<?php

namespace App\Http\Requests;

use App\Mail\ClientMail;
use App\NewsLetterSubscription;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Response;

class NewsLetterSubscriptionFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:news_letter_subscriptions,email'
        ];
    }

    public function response(array $errors)
    {
        return Response::json([
            'error' => [
                'message' => $errors,
            ]
        ]);
    }

    public function save()
    {
        NewsLetterSubscription::query()->create([
            'email' => $this->email
        ]);
    }

    public function sendMail($email)
    {
        $payload['subject'] = 'Newsletter Subscription';
        $payload['email'] = $email;
        $payload['view'] = 'email.newsletter';
        app('mailer')->queue(new ClientMail($payload));
        return null;
    }

}
