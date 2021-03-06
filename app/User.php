<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'address',
        'telephone',
        'photo',
        'email',
        'password',
    ];

    public function wishlist(){
        return $this->belongsToMany('App\Product', 'wishlist', 'id_user', 'id_product')->withTimeStamps();
    }
}