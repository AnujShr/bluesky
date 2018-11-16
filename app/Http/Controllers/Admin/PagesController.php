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
        $pages = Pages::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function edit($page)
    {
        $page = Pages::query()->whereSlug($page)->first();
        abort_if(!$page, 404);
        $pageDetail = PageDetail::query()->wherePageId($page->page_id)->first();
        $content = $meta = '';
        if ($pageDetail) {
            $content = json_decode($pageDetail->content);
            $meta = json_decode($pageDetail->meta);
        }
        return view('admin.pages.edit', compact('page', 'content', 'meta'));

    }

    public function store(PageFormRequest $page)
    {
        $page->save();

    }
}
