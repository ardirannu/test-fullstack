<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function comment(){
        return $this->hasMany('App\Models\Comment', 'id');
    }
}
