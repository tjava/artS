<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'price', 'image1', 'image2', 'image3', 'description'
    ];

    public function category()
    {
        //
    }
}
