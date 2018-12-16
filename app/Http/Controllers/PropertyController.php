<?php

namespace App\Http\Controllers;


use Khsing\World\Models\Country;
use Khsing\World\World;

class PropertyController extends Controller
{
    public function index()
    {
        $countries = World::Countries()->pluck('name', 'code')->sort();
        return view('material.property.add_property', compact('countries'));
    }

    public function getCity()
    {
        $countryCode = request('country');
        $country = Country::getByCode($countryCode);
        $data = $country->cities()->get()->pluck('name', 'code');
        if ($data->isEmpty()) {
            $data = $country->divisions()->get()->pluck('name', 'code');
        }
        return response()->json($data, 200);
    }
}
