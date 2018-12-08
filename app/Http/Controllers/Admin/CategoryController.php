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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $crumbs['title'] = 'All Categories';
        $crumbs = array_merge($crumbs, $this->bread);
        return view('admin.category.index', compact('categories', 'crumbs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crumbs['title'] = 'Add Category';
        $crumbs = breadcrumb($crumbs, $this->bread);
        return view('admin.category.add', compact('crumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryFormRequest $request
     * @return void
     */
    public function store(CategoryFormRequest $request)
    {
        $request->save();
        return redirect(route('admin.category.index'))->with('message', 'Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $crumbs['title'] = 'Edit Category';
        $crumbs = breadcrumb($this->bread, $crumbs);
        return view('admin.category.edit', compact('crumbs', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryFormRequest $form
     * @param Category $category
     * @return void
     */
    public function update(CategoryFormRequest $form, Category $category)
    {
        $form->update($category);
        return redirect(route('admin.category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        if (auth()->user()->isSuperAdmin()) {
            $category->delete();
            return back()->with('message', 'Delete Sucessfully');
        }
        return abort(403);
    }

    /**
     * Calculates and returns slug
     * @return string
     */
    public function getSlug()
    {
        $data = request()->text;
        $id = request()->id ?? null;
        if (!$data) {
            return '';
        }
        return Category::getSlug($data, $id);
    }
}
