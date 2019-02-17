<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'website',
        'email',
        'phone',
        'bio'

    ];

    /*belongs to Relationship*/

    public function user(){
        return $this->belongsTo('App\User');
    }
}
