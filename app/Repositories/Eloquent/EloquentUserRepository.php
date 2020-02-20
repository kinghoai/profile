<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\UserRepositoryInterface;

class EloquentUserRepository extends AbstractEloquentRepository implements UserRepositoryInterface
{
	public function getProfile()
	{
		return $this->model->where('slug', 'lam-thanh-hoai')
			->with(['skills', 'projects', 'experiences', 'educations'])->first();
	}
}
