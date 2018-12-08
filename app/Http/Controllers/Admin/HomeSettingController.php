<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Property;
use App\Setting;
use Illuminate\Http\Request;

class HomeSettingController extends Controller
{

    private $breads;

    public function __construct()
    {
        $this->breads['icon'] = 'fa fa-cog';
        $this->breads['group'] = 'setting';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function featureProperty()
    {
        $crumbs['title'] = 'Feature Property';
        $crumbs = breadcrumb($this->breads, $crumbs);

        $setting = Setting::whereGroup('feature-prop')->first();
        $content = ($setting) ? json_decode($setting->content, true) : '';
        $properties = Property::where('status', 1)->get();
        return view('admin.setting.home-setting.feature-prop', compact('crumbs', 'content', 'properties'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function featureTown()
    {
        $crumbs['title'] = 'Feature Towns';
        $crumbs = breadcrumb($this->breads, $crumbs);
        return view('admin.setting.home-setting.feature-prop', compact('crumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
