<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'website_id', 	'category_id', 	'title', 	'image', 	'price'
    ];
}
