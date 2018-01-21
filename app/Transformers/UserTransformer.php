<?php

namespace App\Transformers;

use App\User;
use App\Transformers\PostTransformer;
use League\Fractal\TransformerAbstract;


class UserTransformer extends TransformerAbstract
{

	protected $availableIncludes = [
		'blood'
	];

	public function transform(User $user)
	{
		return [
			'id'			=> $user->id,
			'name'			=> $user->name,
			'email'			=> $user->email,
			'registered'	=> $user->created_at->diffForHumans(),
			
		];
	}

	public function includeBlood(User $user)
	{
		$blood = $user->blood()->latestFirst()->get();

		return $this->collection($blood, new BloodTransformer);
	}
}