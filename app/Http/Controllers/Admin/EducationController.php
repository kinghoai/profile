<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\EducationRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
	private $educationRepository;

	public function __construct(EducationRepositoryInterface $educationRepository)
	{
		$this->educationRepository = $educationRepository;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

	    $educations = $this->educationRepository->getByAttributes(['user_id'=>Auth::user()->id]);
	    return view('admin.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    return redirect(route('education.index'));
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
	    $this->educationRepository->create($input);

	    return redirect(route('education.index'))->with('messenger', 'Created success');
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
	    $education = $this->educationRepository->find($id);
	    return view('admin.education.edit', compact('education'));
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
	    $education = $this->educationRepository->find($id);
	    $input = $request->all();
	    $input['user_id'] = Auth::user()->id;
	    $this->educationRepository->update($education, $input);

	    return redirect(route('education.index'))->with('messenger', 'Updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $education = $this->educationRepository->find($id);
	    $this->educationRepository->destroy($education);
	    return redirect(route('education.index'))->with('messenger', 'Deleted');
    }
}
