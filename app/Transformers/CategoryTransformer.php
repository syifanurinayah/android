<?php

namespace App\Transformers;

use App\Category;
use App\Transformers\Bloodransformer;
use League\Fractal\TransformerAbstract;


class CategoryTransformer extends TransformerAbstract
{

	protected $availableIncludes = [
		'blood'
	];

	public function transform(Category $category)
	{
		return [
			'id'			=> $category->id,
			'name'			=> $category->name,
			'registered'	=> $category->created_at->diffForHumans(),
			
		];
	}

	public function includeBlood(Category $category)
	{
		$blood = $category->blood()->latestFirst()->get();

		return $this->collection($blood, new BloodTransformer);
	}
}