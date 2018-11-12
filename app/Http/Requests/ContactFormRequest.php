<?php

namespace App\Http\Requests;

use App\contact;
use App\Mail\ClientMail;
use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'required|email',
            'message' => 'required|max:200',
            'subject' => 'required|max:150',
        ];
    }

    public function save()
    {
        Contact::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
        ]);
        $this->sendMail();
    }

    public function sendMail()
    {
        $data['payload'] = $this;
        dd($data);
        app('mailer')->queue(new ClientMail($data));
    }
}
