<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleFormRequest;
use Storage;

class ArticleController extends Controller
{

    private $bread;

    public function __construct()
    {
        $this->bread['group'] = 'Article';
        $this->bread['icon'] = 'fa fa-inbox';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crumbs['title'] = 'Article';
        $articles = Article::all();
        $crumbs = breadcrumb($this->bread, $crumbs);
        return view('admin.articles.index', compact('articles', 'crumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $crumbs['title'] = 'Add Article';
        $category = Category::all()->pluck('name', 'id');

        return view('admin.articles.create', compact('crumbs', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleFormRequest $request
     * @return void
     */
    public function store(ArticleFormRequest $request)
    {
        $request->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $article
     * @return void
     */
    public function edit(Article $article)
    {
        $crumbs['title'] = 'Edit Article';
        $crumbs = breadcrumb($this->bread, $crumbs);
        $category = Category::all()->pluck('name', 'id');
        $articleCategory = $article->categories->pluck('id')->toArray();
        return view('admin.articles.edit', compact('crumbs', 'article', 'category', 'articleCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleFormRequest $request
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleFormRequest $request, Article $article)
    {
        $request->store($article);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Article $article)
    {
        if (auth()->user()->isSuperAdmin()) {
            $id = $article->id;
            Storage::deleteDirectory('public/uploads/articles/' . $id);
            $article->delete();
        }
        return back()->with('message', 'Article Deleted Successfully!');
    }
}
