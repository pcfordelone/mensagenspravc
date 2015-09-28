<?php

namespace FRD;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = [
        'post_id',
        'extension'
    ];

    public function post()
    {
        return $this->belongsTo('FRD\Post');
    }
}
