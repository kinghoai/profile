<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\UserRepositoryInterface;

class EloquentUserRepository extends AbstractEloquentRepository implements UserRepositoryInterface
{
	public function getAll(){
		return $this->model->get();
	}
}
