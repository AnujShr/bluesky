<?php

namespace App\Http\Controllers;

class PropertyController extends Controller
{
    public function index()
    {
        return view('material.property.add_property');
    }
}
