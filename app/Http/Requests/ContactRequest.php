<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
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
            'subject.required' => 'Subject is required !!',
            'message.required' => 'Message is required !!',
        ];
    }
}
