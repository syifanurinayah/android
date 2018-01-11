<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blood;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
    	'name'
    ];

    public function blood() {
        return $this->hasMany(Blood::class);
    }

    public function getNameAttribute($name){
    	return ucwords($name);
    }

}
