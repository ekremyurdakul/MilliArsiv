<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depot extends Model
{
    protected $fillable = ['name', 'description' ,'archive_id'];

    public function materials(){
        return $this->hasMany('App\Material');
    }
}
