<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ExperienceRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
	private $experienceRepository;

	public function __construct(ExperienceRepositoryInterface $experienceRepository)
	{
		$this->experienceRepository = $experienceRepository;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = $this->experienceRepository->getByAttributes(['user_id'=>Auth::user()->id]);
        return view('admin.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return redirect(route('experience.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $input = $request->all();
	    $input['user_id'] = Auth::user()->id;
	    $this->experienceRepository->create($input);

	    return redirect(route('experience.index'))->with('messenger', 'Created success');
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
	    $experience = $this->experienceRepository->find($id);
	    return view('admin.experience.edit', compact('experience'));
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
	    $experience = $this->experienceRepository->find($id);
	    $input = $request->all();
	    $input['user_id'] = Auth::user()->id;
	    $this->experienceRepository->update($experience, $input);

	    return redirect(route('experience.index'))->with('messenger', 'Updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $experience = $this->experienceRepository->find($id);
	    $this->experienceRepository->destroy($experience);
	    return redirect(route('experience.index'))->with('messenger', 'Deleted');
    }
}
