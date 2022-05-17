<?php

namespace App\Http\Requests\ContactUs;

use Illuminate\Foundation\Http\FormRequest;

class Contact extends FormRequest
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
            "name" => "required",
            "lastname" => "required",
            "email" => "required|email",
            "message" => "required|min:20",
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "First name is required!",
            "lastname.required" => "Last name is required!",
            "email.required" => "Email is required!",
            "email.required" => "Valid email is required!",
            "message.required" => "Message is required!",
            "message.min" => "Message minimum words must be 20!",
        ];
    }
}
