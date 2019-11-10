<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ProjectRepositoryInterface;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
	private $projectRepository;
	public function __construct(ProjectRepositoryInterface $projectRepository)
	{
		$this->projectRepository = $projectRepository;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $projects = $this->projectRepository->all();
	    return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return view('admin.project.create');
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
		    'title'=>'required|unique:projects|min:10|max:100',
		    'feature_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
	    ]);
	    $input = $request->all();
	    $input['slug'] = Str::slug($input['title']);
	    $input['user_id'] = Auth::user()->id;
	    $project = $this->projectRepository->create($input);
	    if($request->hasFile('image')) {
		    $project->addMediaFromRequest('image')->toMediaCollection('image');
	    }
	    if ($request->hasFile('slide')) {
		    $files = $request->file('slide');
		    foreach ($files as $item) {
			    $project->addMedia($item)->toMediaCollection('slide');
		    }
	    };
	    return redirect(route('project.index'))->with('messenger', 'Created');
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
	    $project = $this->projectRepository->find($id);
	    return view('admin.project.edit', compact('project'));
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
			    Rule::unique('projects')->ignore($id)
		    ],
		    'feature_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
	    ]);
	    $input = $request->all();
	    $project = $this->projectRepository->find($id);

	    $input['slug'] = Str::slug($input['title']);
	    $input['user_id'] = Auth::user()->id;
	    $this->projectRepository->update($project, $input);

	    if ($request->hasFile('image')) {
		    $project->addMediaFromRequest('image')->toMediaCollection('image');
	    };
	    if ($request->hasFile('slide')) {
		    $files = $request->file('slide');
		    foreach ($files as $item) {
			    $project->addMedia($item)->toMediaCollection('slide');
		    }
	    };
	    return redirect(route('project.index'))->with('messenger', 'Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $project = $this->projectRepository->find($id);
	    $this->projectRepository->destroy($project);
	    return redirect(route('project.index'))->with('messenger', 'Deleted');
    }
}
