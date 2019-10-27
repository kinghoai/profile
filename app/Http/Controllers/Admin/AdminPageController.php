<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\PageRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminPageController extends Controller
{
	private $pageRepository;
	public function __construct(PageRepositoryInterface $pageRepository)
	{
		$this->pageRepository = $pageRepository;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$pages = $this->pageRepository->all();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
		    'title'=>'required|unique:pages|min:10|max:100',
	    ]);
	    $input = $request->all();
	    $input['slug'] = str_slug($input['title']);
	    $input['user_id'] = Auth::user()->id;
	    $this->pageRepository->create($input);

	    return redirect(route('page.index'))->with('messenger', 'Created');
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
	    $page = $this->pageRepository->find($id);
	    return view('admin.page.edit', compact('page'));
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
			    Rule::unique('pages')->ignore($id)
		    ]
	    ]);
	    $input = $request->all();
	    $page = $this->pageRepository->find($id);
	    $input['slug'] = str_slug($input['title']);
	    $input['user_id'] = Auth::user()->id;
	    $this->pageRepository->update($page, $input);

	    return redirect(route('page.index'))->with('messenger', 'Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $page = $this->pageRepository->find($id);
	    $this->pageRepository->destroy($page);
	    return redirect(route('page.index'))->with('messenger', 'Deleted');
    }
}
