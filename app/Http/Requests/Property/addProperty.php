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
            'email' => 'required_without_all:email1|email|unique:customerusers',
            'email1' => 'required_without_all:email',
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city_name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'contact' => 'required',
            'password' =>  'required_without_all:password1|min:6',
            'password1' =>  'required_without_all:password|min:6',
            'image' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'password.required_without_all' => __('Password is required.'),
            'password1.required_without_all' => __('Password is required.'),
            'email.required_without_all' => __('The email field is required.'),
            'email1.required_without_all' => __('The email field is required.'),
            'email.email' => __('You need to provide valid email address.'),
            'email1.email' => __('You need to provide valid email address.'),
            'email.exists' => __('Provided email is invalid.'),
            'email1.exists' => __('Provided email is invalid.'),
            'password.min' => __('Password length should be 4.'),
            'password.max' => __('Password length should be less then 100.'),
            'password.required' => __('Password length should be less then 100.'),
            'firstname' => __('Users firstname is required.'),
            'lastname' => __('Users lastname is required.'),
            'address' => __('Address is required.'),
            'city_name' => __('City Name is required.'),
            'latitude' => __('Lattitude is required.'),
            'longitude' => __('Longitude is required.'),
            'title' => __('Title is required.'),
            'description' => __('Description is required.'),
            'price' => __('Price is required.'),
            'unit' => __('Unit is required.'),
            'type' => __('Property type is required.'),
            'contact' => __('Contact number is required.'),
            'image' =>__('Images are required.'),
        ];
    }
}
