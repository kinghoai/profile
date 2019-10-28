<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\SkillRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
	private $skillRepository;

	public function __construct(SkillRepositoryInterface $skillRepository)
	{
		$this->skillRepository = $skillRepository;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$skills = $this->skillRepository->all();
        return view('admin.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return redirect(route('skill.index'));
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
    	    'title' => 'required|min:5|max:40'
	    ]);
	    $input = $request->all();
	    $input['user_id'] = Auth::user()->id;
	    $this->skillRepository->create($input);

	    return redirect(route('skill.index'))->with('messenger', 'Created success');
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
    	$skill = $this->skillRepository->find($id);
		return view('admin.skill.edit', compact('skill'));
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
		    'title' => 'required|min:5|max:40'
	    ]);
	    $skill = $this->skillRepository->find($id);
	    $input = $request->all();
	    $input['user_id'] = Auth::user()->id;
	    $this->skillRepository->update($skill, $input);

	    return redirect(route('skill.index'))->with('messenger', 'Updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $skill = $this->skillRepository->find($id);
	    $this->skillRepository->destroy($skill);
	    return redirect(route('skill.index'))->with('messenger', 'Deleted');
    }
}
