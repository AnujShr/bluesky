<?php

namespace App\Http\Controllers;


use PragmaRX\Countries\Package\Countries;

class PropertyController extends Controller
{
    public function index()
    {
        $countries = Countries::all()->pluck('name.common', 'cca2')->sort();
        return view('material.property.add_property',compact('countries'));
    }
}
