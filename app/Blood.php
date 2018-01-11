<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    protected $table = 'blood';

    protected $fillable = [
        'name',
        'category_id',
        'alamat',
        'keterangan'
    ];

    public function category() {
        return $this->belongsTo('App\Category','category_id');
    }

    public function getNameAttribute($name){
    	return ucwords($name);
    }
}
