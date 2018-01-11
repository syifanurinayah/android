<?php

namespace App\Transformers;

use App\Blood;
use League\Fractal\TransformerAbstract;

class BloodTransformer extends TransformerAbstract
{
	public function transform(Blood $blood)
	{
		return[
			'id'			=> $blood->id,
			'name'			=> $blood->name,
			'category_id'	=> $blood->category_id,
			'alamat'		=> $blood->alamat,
			'longitude'		=> $blood->longitude,
			'latitude'		=> $blood->latitude,
			'keterangan'	=> $blood->keterangan,
			'published'		=> $blood->created_at->diffForHumans(),
		];
	}
}