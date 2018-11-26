<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    private $bread;

    public function __construct()
    {
        $this->bread['group'] = 'Testimonial';
        $this->bread['icon'] = 'fa fa-wechat';
    }

    /**
     * Display a listing of the testimonial.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crumbs['title'] = 'Testimonials';
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials', 'crumbs'));
    }

    /**
     * Show the form for creating a new testimonial.
     *
     */
    public function create()
    {
        $crumbs['title'] = 'Add Testimony';
        $crumbs = breadcrumb($this->bread, $crumbs);
        return view('admin.testimonial.create', compact('category', 'crumbs'));
    }

    /**
     * Store a newly created testimonial in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified testimonial.
     *
     * @param  \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        $crumbs['title'] = 'Edit Testimony';
        $crumbs = breadcrumb($this->bread, $crumbs);
        return view('admin.testimonial.edit', compact('category', 'crumbs'));
    }

    /**
     * Show the form for editing the specified testimonial.
     *
     * @param  \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified testimonial in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified testimonial from storage.
     *
     * @param  \App\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
