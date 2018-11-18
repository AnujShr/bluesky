<?php

namespace App\Http\Controllers\Admin;

use App\Articles;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleFormRequest;

class ArticlesController extends Controller
{
    private $bread;

    public function __construct()
    {
        $this->bread['group'] = 'articles';
        $this->bread['icon'] = 'fa fa-inbox';
    }

    public function index()
    {
        $articles = Articles::all();
        $crumbs['title'] = 'All Articles';
        $crumbs = array_merge($crumbs, $this->bread);
        return view('admin.articles.index', compact('articles', 'crumbs'));
    }

    public function update(ArticleFormRequest $form)
    {
        $form->save();
        return redirect(route('admin.articles.index'));
    }

    public function addArticle()
    {
        $category = Category::all()->pluck('name', 'slug');
        $bread['title'] = 'Add Article';
        $crumbs = array_merge($bread, $this->bread);
        return view('admin.articles.__form', compact('crumbs', 'category'));
    }

    public function edit(Articles $article)
    {
        $category = Category::all()->pluck('name', 'slug');
        $bread['title'] = 'Edit Article';
        $crumbs = array_merge($bread, $this->bread);
        return view('admin.articles.__form', compact('crumbs', 'article', 'category'));
    }

    public function destroy(Articles $article)
    {
        Storage::delete('/uploads/articles/' . $article->id);
        $article->delete();
        return redirect(route('admin.article.index'));
    }
}

