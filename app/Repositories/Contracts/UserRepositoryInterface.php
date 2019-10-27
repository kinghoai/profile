<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface extends BaseRepository
{
	public function getAll();
}
