<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Blood extends Model
{
    protected $table = 'blood';

    protected $fillable = [
        'name',
        'category_id',
        'alamat',
        'no_tlp',
        'longitude',
        'latitude',
        'keterangan'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scopeLatestFirst($query)
    {
    	return $query->orderBy('id', 'DESC');
    }

    public function getNameAttribute($name){
    	return ucwords($name);
    }
}
