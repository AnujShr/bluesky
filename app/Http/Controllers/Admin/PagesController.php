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
        $pages = Pages::where('group', 'pages')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function edit($page)
    {
        $page = Pages::query()->whereSlug($page)->first();
        abort_if(!$page, 404);

        $content = $meta = '';
        $pageDetail = PageDetail::query()->wherePageId($page->id)->first();
        if ($pageDetail) {
            $content = json_decode($pageDetail->content, true);
            $meta = json_decode($pageDetail->meta, true);
        }
        return view('admin.pages.edit', compact('page', 'content', 'meta'));

    }

    public function store(PageFormRequest $page)
    {
        $page->save();
        return back();

    }
}
