<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Name is required !!',
            'email.required' => 'Email is required !!',
            'email.email' => 'Invalid Email !!',
            'phone.required' => 'Phone is required !!',
            'subject.required' => 'Subject is required !!',
            'message.required' => 'Message is required !!',
        ];
    }
}
