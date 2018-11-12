<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact');
    }

    public function store(ContactFormRequest $form)
    {
        $form->save();
        $return['success'] = true;
        return response($return, 200);
    }
}
