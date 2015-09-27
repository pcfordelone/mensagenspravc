<?php

namespace FRD;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'featured'
    ];

    public function category()
    {
        return $this->belongsTo('FRD\PostCategory');
    }
}
