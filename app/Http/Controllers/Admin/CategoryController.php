<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $crumbs['title'] = 'All Categories';
        $crumbs['group'] = 'Category';
        $crumbs['icon'] = 'fa fa-tag';
        return view('admin.category.index', compact('categories', 'crumbs'));
    }
}
