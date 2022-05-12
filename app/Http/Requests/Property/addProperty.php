<?php

namespace App\Http\Requests\Property;

use Illuminate\Foundation\Http\FormRequest;

class addProperty extends FormRequest
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
            'email' => 'required_without_all:email1,password1',
            'email1' => 'required_without_all:email,password',
            'password' =>  'required_without_all:email1,password1',
            'password1' =>  'required_without_all:email,password',
            'firstname' => 'required_without_all:email1,password1',
            'lastname' => 'required_without_all:email1,password1',
            'address' => 'required',
            'city_name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'contact' => 'required_without_all:email1,password1',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'password.required_without_all' => __('New password is required with provided email.'),
            'password1.required_without_all' => __('Password is required with provided email.'),
            'email.required_without_all' => __('New email is required.'),
            'email1.required_without_all' => __('The email field is required.'),
            'firstname.required_without_all' => __('Users firstname is required.'),
            'lastname.required_without_all' => __('Users lastname is required.'),
            'address' => __('Address is required.'),
            'city_name' => __('City Name is required.'),
            'latitude' => __('Lattitude is required.'),
            'longitude' => __('Longitude is required.'),
            'title' => __('Title is required.'),
            'description' => __('Description is required.'),
            'price' => __('Price is required.'),
            'unit' => __('Unit is required.'),
            'type' => __('Property type is required.'),
            'contact.required_without_all' => __('Contact number is required.'),
            'image' => __('Images are required.'),
        ];
    }
}
