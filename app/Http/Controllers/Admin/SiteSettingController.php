<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;

class SiteSettingController extends Controller
{
    private $breads;

    public function __construct()
    {
        $this->breads['icon'] = 'fa fa-cog';
        $this->breads['group'] = 'Setting';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crumbs['title'] = 'Site Setting';
        $crumbs = breadcrumb($this->breads, $crumbs);
        $setting = Setting::whereGroup('site')->first();
        $content = json_decode($setting->content, true);
        return view('admin.setting.site-setting.index', compact('crumbs', 'content'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store()
    {
        $setting = Setting::where('group', 'site')->first();

        $content = isset($setting->content) ? json_decode($setting->content, true) : '';

        $data = request()->all();

        $input['meta']['title'] = $data['title'] ?? (isset($content['meta']['title']) ?? '');
        $input['meta']['keywords'] = $data['keywords'] ?? $content['meta']['keywords'] ?? '';
        $input['meta']['description'] = $data['description'] ?? $content['meta']['description'] ?? '';

        $input['contact']['email'] = $data['email'] ?? $content['contact']['email'] ?? '';
        $input['contact']['phone'] = $data['phone'] ?? $content['contact']['phone'] ?? '';

        $input['social']['facebook'] = $data['facebook'] ?? $content['social']['facebook'] ?? '';
        $input['social']['twitter'] = $data['twitter'] ?? $content['social']['twitter'] ?? '';
        $input['social']['instagram'] = $data['instagram'] ?? $content['social']['instagram'] ?? '';

        $setting = new Setting;

        $setting->saveSetting(json_encode($input), 'site');

        return back();
    }
}
