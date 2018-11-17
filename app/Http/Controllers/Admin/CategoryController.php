<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;

class CategoryController extends Controller
{
    private $bread;

    public function __construct()
    {
        $this->bread['group'] = 'category';
        $this->bread['icon'] = 'fa fa-tag';
    }

    public function index()
    {
        $categories = Category::all();
        $crumbs['title'] = 'All Categories';
        $crumbs = array_merge($crumbs, $this->bread);
        return view('admin.category.index', compact('categories', 'crumbs'));
    }

    public function show(Category $category)
    {

        $crumbs['title'] = 'Edit Category';
        $crumbs['subgroup'] = 'all-categories';
        $crumbs = array_merge($crumbs, $this->bread);

        return view('admin.category.edit', compact('crumbs', 'category'));
    }

    public function addCategory()
    {
        $crumbs['title'] = 'Add a Category';
        $crumbs = array_merge($crumbs, $this->bread);
        return view('admin.category.edit', compact('crumbs'));
    }

    public function update(CategoryFormRequest $form)
    {
        $form->update();
        return back();
    }

    public function getSlug()
    {
        $data = request()->text;
        $id = request()->id ?? null;
        $slug = Category::query()->where('slug', $data);
        if ($slug->exists() && !$id) {
            $data = Category::incrementSlug($data);
            return response($data);
        } elseif ($slug->exists() && $id) {
            $slugs = Category::query()->where('id', (int)$id)->first();
            return $slugs->slug;
        } else {
            return str_slug($data);
        }

    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('admin.category.index'));
    }
}
