<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



use OpenAdmin\Admin\Controllers\AdminController;

class PlacesInfo extends Model
{
    protected $table = 'placesinfo';

    protected $fillable = [
        'placeName',
        'placeShortdes',
        'placeDescription',
        'image',
        'categoryName',
        'placeRating',
        'placeLocation',
        'placeMapURL',
    ];
}
