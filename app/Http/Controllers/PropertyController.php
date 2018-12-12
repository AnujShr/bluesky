<?php

namespace App\Http\Controllers;


use PragmaRX\Countries\Package\Countries;

class PropertyController extends Controller
{
    public function index()
    {
        $countries = Countries::all()->pluck('name.common', 'cca2')->sort();
        return view('material.property.add_property', compact('countries'));
    }

    public function getCity()
    {
        $country = request('country');

        $data = Countries::where('name.common', $country)->first()
            ->hydrate('cities')
            ->cities
            ->pluck('name')->toArray();
        if (empty($data)) {
            $data = Countries::where('name.common', $country)->first()
                ->hydrate('states')
                ->states
                ->pluck('name')->toArray();
        }
        return response()->json($data, 200);
    }
}
