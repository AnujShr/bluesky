<?php

namespace App\Http\Controllers;


use App\Http\Requests\NewsLetterSubscriptionFormRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        return view('front.home');
    }

    public function newsLetterSubscribe(NewsLetterSubscriptionFormRequest $form)
    {
        $form->save();
        $form->sendMail($form['email']);
        $return['success'] = true;
        return response($return, 200);
    }


}
