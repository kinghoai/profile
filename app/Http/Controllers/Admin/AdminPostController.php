<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\PostRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
	private $postRepository;
	public function __construct(PostRepositoryInterface $postRepository)
	{
		$this->postRepository = $postRepository;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$posts = $this->postRepository->getByAttributes(['user_id'=>Auth::user()->id]);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
	        'title'=>'required|unique:posts|min:10|max:100',
        ]);
        $input = $request->all();
        $input['slug'] = Str::slug($input['title']);
        $input['user_id'] = Auth::user()->id;
        $this->postRepository->create($input);

        return redirect(route('post.index'))->with('messenger', 'Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	    $request->validate([
		    'title'=>[
		    	'required',
	            'min:10',
	            'max:100',
			    Rule::unique('posts')->ignore($id)
	        ]
	    ]);
	    $input = $request->all();
	    $post = $this->postRepository->find($id);
	    $input['slug'] = Str::slug($input['title']);
	    $input['user_id'] = Auth::user()->id;
	    $this->postRepository->update($post, $input);

	    return redirect(route('post.index'))->with('messenger', 'Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $post = $this->postRepository->find($id);
	    $this->postRepository->destroy($post);
	    return redirect(route('post.index'))->with('messenger', 'Deleted');
    }
}
