<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model

{
    protected $fillable = [
        'titolo_canzone',
        'genere',
        'record_id',
    ];
        
    public function record() {
        return $this->belongsTo('App\Record');
    }
}

