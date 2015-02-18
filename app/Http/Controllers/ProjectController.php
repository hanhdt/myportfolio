<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
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
        $projects = Project::all();
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $inputs = Request::all();
        Project::create($inputs);
        return redirect('projects', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return view('projects.single', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $project = Project::find($id);

        return view('projects.edit', [
            'project' => $project,
            'method' => 'put'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $project = Project::find($id);
        $project->name = Request::get('name');
        $project->category = Request::get('category');
        $project->description = Request::get('description');

        $project->update($id);

        return redirect('projects/' . $id, 302);
    }

    public function delete($id)
    {
        $project = Project::find($id);

        return view('projects.edit', [
            'project' => $project,
            'method' => 'delete',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        Project::destroy($id);

        return redirect(
            'projects',
            302,
            ['message' => 'Successfully delete #' . $project->name]);
    }

}
