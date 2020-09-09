<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'url',
        'record_id'
    ];

    public function record() {
        return $this->belongsTo('App\Record');
    }
}
