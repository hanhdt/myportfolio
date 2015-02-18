<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\SkillInformation;
use App\Http\Requests\Request;

class SkillInformationController extends Controller
{

	/**
	 * Create a new controller instance.
	 *
	 */
	public function __construct()
	{
        $this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $skills = SkillInformation::all();
        return view('skill.index')
            ->with('skills', $skills);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('skill.create')
            ->with('method', 'post');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $inputs = Request::all();
        SkillInformation::create($inputs);
        return redirect('skills');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $skill = SkillInformation::find($id);
        return view('skill.single')
            ->with('skill', $skill);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $skill = SkillInformation::find($id);
        return view('skill.edit')
            ->with('skill', $skill)
            ->with('method', 'put');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
    {
        $skill = SkillInformation::find($id);
        $skill->title = Request::get('title');
        $skill->description = Request::get('description');
        $skill->save();

        return redirect('skills');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $skill = SkillInformation::find($id);
        $skill->delete($id);
        return redirect('skills');
    }

    public function delete($id)
    {
        $skill = SkillInformation::find($id);
        return view('skill.edit')
            ->with('skill', $skill)
            ->with('method', 'delete');
    }

}
