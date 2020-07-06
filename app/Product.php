<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'product_name',
        'price',
        'description',
        'id_category',
        'photo',
    ];

    public function category(){
        return $this->belongsTo('App\Category', 'id_category');
    }

    public function user(){
        return $this->belongsToMany('App\Hobi', 'wishlist', 'id_product', 'id_user');
    }
}
