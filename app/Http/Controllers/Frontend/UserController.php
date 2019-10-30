<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserController extends Controller
{
	private $userRepository;

	public function __construct( UserRepositoryInterface $userRepository )
	{
		$this->userRepository = $userRepository;
	}

	public function show($slug)
    {
    	$user = $this->userRepository->findBySlug($slug);
        return view('frontend.user.show', $user);
    }
}
