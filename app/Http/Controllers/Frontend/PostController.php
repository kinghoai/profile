<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\PostRepositoryInterface;

class PostController extends Controller
{
	private $postRepository;

    public function index() {
    	return view('frontend.post.index');
    }
}
