<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetterSubscriptionFormRequest;
use App\Mail\ClientMail;
use App\NewsLetterSubscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        return view('home');
    }

    public function newsLetterSubscribe(NewsLetterSubscriptionFormRequest $form)
    {
        $form->save();
        $form->sendMail($form['email']);
        $return['success'] = true;
        return response($return, 200);
    }


}
