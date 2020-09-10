<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'titolo',
        'artista',
        'anno',
        'numero_brani',
        'descrizione',
    ];
    
    public function songs() {
        return $this->hasMany('App\Song');
    }

    public function image() {
        return $this->hasOne('App\Image');
    }
}
