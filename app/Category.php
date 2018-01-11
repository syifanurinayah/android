<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
    	'name'
    ];

    public function blood() {
        return $this->hasMany('App\Blood');
    }

    public function getNameAttribute($name){
    	return ucwords($name);
    }

}
