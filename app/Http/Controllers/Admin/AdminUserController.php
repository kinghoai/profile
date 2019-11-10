<?php

namespace App\Http\Controllers\Admin;

use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
	protected $userRepository;
	public function __construct(UserRepositoryInterface $userRepository)
	{
		$this->userRepository = $userRepository;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = $this->userRepository->all();
	    return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $request->validate([
		    'name'=>'required|min:5|max:50|unique:users',
		    'email'=>'required|unique:users|min:5|max:50',
		    'password'=>'required|min:5|max:50',
		    'retypepassword'=>'required|same:password|min:5|max:50',
		    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
	    ]);

	    $input = $request->all();
	    $input['password'] = bcrypt($request->password);
	    $input['slug'] = Str::slug('name');
	    $user = $this->userRepository->create($input);
	    if ($request->hasFile('image')) {
		    $user->addMediaFromRequest('image')->toMediaCollection('image');
	    };
	    return redirect(route('user.index'))->with('messenger', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$user = $this->userRepository->find($id);
    	if($id == Auth::user()->id || Auth::user()->id == 1) {
		    return view('admin.user.edit', compact('user'));
	    } else return redirect(route('admin'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	    $user = $this->userRepository->find($id);
	    if($id == Auth::user()->id || Auth::user()->id == 1) {
		    $request->validate([
			    'name'=>[
				    'required',
				    Rule::unique('users')->ignore($id),
				    'min:5',
				    'max:50'
			    ],
			    'email'=>[
				    'required',
				    'min:5',
				    'max:50',
				    Rule::unique('users')->ignore($id),
			    ]
		    ]);
		    $input = $request->all();
		    if(isset($input['password']) && $input['password'] != '') {
			    $input['password'] = bcrypt($request->password);
		    } else {
			    $input['password'] = $user->password;
		    };
		    $input['slug'] = Str::slug($input['name']) == $user->slug ? $user->slug : Str::slug($input['name']);
		    $this->userRepository->update($user, $input);
		    if ($request->hasFile('image')) {
			    $user->addMediaFromRequest('image')->toMediaCollection('image');
		    };
		    if ($request->hasFile('slide')) {
			    $files = $request->file('slide');
			    foreach ($files as $item) {
				    $user->addMedia($item)->toMediaCollection('slide');
			    }
		    };
		    return redirect(route('user.index'))->with('messenger', 'Edit success');
	    } else return redirect(route('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);
	    if($id == Auth::user()->id || Auth::user()->id == 1) {
		    $this->userRepository->destroy($user);
		    return redirect(route('user.index'))->with('messenger', 'Delete success');
	    } else return redirect(route('admin'));

    }
}
