<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageFormRequest;
use App\PageDetail;
use App\Pages;

class PagesController extends Controller
{
    public function index()
    {
        $crumbs['title'] = 'Pages';
        $pages = Pages::where('group', 'pages')->get();
        return view('admin.pages.index', compact('pages', 'crumbs'));
    }

    public function edit($page)
    {

        $page = Pages::query()->whereSlug($page)->first();
        abort_if(!$page, 404);

        $crumbs['title'] = $page->name;
        $crumbs['group'] = $page->group;
        $crumbs['icon'] = 'fa fa-file-text-o';

        $content = $meta = '';
        $pageDetail = PageDetail::query()->wherePageId($page->id)->first();

        if ($pageDetail) {
            $content = json_decode($pageDetail->content, true);
            $meta = json_decode($pageDetail->meta, true);
        }

        $diffView = ['about-us', 'contact'];
        $view = 'partial.__form';

        return view('admin.pages.edit', compact('page', 'content', 'meta', 'page', 'diffView', 'view', 'crumbs'));

    }

    public function store(PageFormRequest $page)
    {
        $page->save();
        return back();

    }

}
