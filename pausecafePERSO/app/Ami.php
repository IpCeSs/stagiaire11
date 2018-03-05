<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ami extends Model
{
    protected $table='ami';
    public $timestamps = false;

    public function utilisateur(){
        return $this->belongsTo('Utilisateur');
    }
}
