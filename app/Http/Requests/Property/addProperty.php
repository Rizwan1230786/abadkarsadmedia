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
            'city_name' => 'required_without_all:location,latitude,longitude',
            'area_id' => 'required_without_all:location,latitude,longitude',
            'location' => 'required_without_all:area_id',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'contact' => 'required_without_all:email1,password1',
            'image' => 'required',
            'front_dim' => 'required',
            'back_dim' => 'required',
            'land_area' => 'required',
            'is_expired' => 'required',
            'category_id' => 'required',
            'property_purpose' => 'required',
            'url_slug' => 'required'
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
            'city_name.required_without_all' => __('City Name is required.'),
            'area_id.required_without_all' => __('Area name is required.'),
            'location.required_without_all' => __('Location name is required.'),
            'title.required' => __('Title is required.'),
            'description.required' => __('Description is required.'),
            'price.required' => __('Price is required.'),
            'unit.required' => __('Unit is required.'),
            'contact.required_without_all' => __('Contact number is required.'),
            'image.required' => __('Images are required.'),
            'front_dim.required' => __('House front dimenssion is required.'),
            'back_dim.required' => __('House back dimenssion is required.'),
            'land_area.required' => __('House area siza is required.'),
            'is_expired.required' => __('Property expiry duration is required.'),
            'category_id.required' => 'Please select any category name.',
            'property_purpose.required' => 'Please select Rent or Sale.',
            'url_slug.required' => 'URL slug is required.',
        ];
    }
}
