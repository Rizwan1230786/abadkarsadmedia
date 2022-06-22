<?php

namespace App\Http\Requests\UserDashboard;

use Illuminate\Foundation\Http\FormRequest;

class AddProperty extends FormRequest
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
            'email' => 'required',
            'city_name' => 'required',
            'area_id' => 'required_without_all:location',
            'location' => 'required_without_all:area_id',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'contact' => 'required',
            'image' => 'required',
            'front_dim' => 'required',
            'back_dim' => 'required',
            'land_area' => 'required',
            'is_expired' => 'required',
            'category_id' => 'required',
            'property_purpose' => 'required',
            'video_link' => 'required'
            'url_slug' => 'required'

        ];
    }
    public function messages()
    {
        return [
            'email.required' => __('Email is required.'),
            'city_name.required' => __('City Name is required.'),
            'area_id.required_without_all' => __('Area name is required.'),
            'location.required_without_all' => __('Location is required.'),
            'title.required' => __('Title is required.'),
            'description.required' => __('Description is required.'),
            'price.required' => __('Price is required.'),
            'unit.required' => __('Unit is required.'),
            'contact.required' => __('Contact number is required.'),
            'image.required' => __('Images are required.'),
            'front_dim.required' => __('House front dimenssion is required.'),
            'back_dim.required' => __('House back dimenssion is required.'),
            'land_area.required' => __('House area size is required.'),
            'is_expired.required' => __('Property expiry duration is required.'),
            'category_id.required' => 'Please select any category name.',
            'property_purpose.required' => 'Please select Rent or Sale.',
            'video_link.required' => 'Youtube video link is required.',
            'url_slug.required' => 'URL slug is required.',
        ];
    }
}
