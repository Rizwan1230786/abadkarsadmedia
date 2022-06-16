<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    /**
     * Get Image Sizes Define your images sizes here
     *
     * @return string
     */
    public static function getImageSizes($type = '')
    {
        $image_sizes = array(
            'property_thumb' => array(
                'small' => array(
                    'width' => 360,
                    'height' => 250,
                ),
            ),
            'property_slider' => array(
                'small' => array(
                    'width' => 1000,
                    'height' => 750,
                ),
            ),
            'property_medium' => array(
                'small' => array(
                    'width' => 750,
                    'height' => 400,
                ),
            ),
        );
        if (!empty($type) && array_key_exists($type, $image_sizes)) {
            return $image_sizes[$type];
        } else {
            return '';
        }
    }
}
