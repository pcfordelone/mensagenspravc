<?php

namespace FRD;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = [
        'name',
        'datafilter',
        'description'
    ];

    public function posts()
    {
        return $this->hasMany('FRD\Post');
    }
}
