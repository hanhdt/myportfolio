<?php namespace App\Http\Controllers;

use App\Contact;
use App\Team;
use Illuminate\Support\Facades\Validator;
use Request;

class TeamController extends Controller
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
    public function getIndex()
    {
        $contacts = Contact::all();
        $teams = Team::all();
        return view('team.index', ['contacts' => $contacts, 'teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreating()
    {
        return view('team.create', ['method' => 'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postStoring()
    {
        $inputs = Request::all();
        $file = array('image' => Request::file('avatar'));
        // setting up rules
        $rules = array('image' => 'required',); // 'mimes' => 'jpeg png gif jpg' and max => 10000
        // doing the validation, passing post data, rules
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            return redirect('team', ['error' => 'Can not upload image']);
        } else {
            if (Request::file('avatar')->isValid()) {

                $destinationPath = 'public/img/team'; // upload path
                $extension = Request::file('avatar')->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '_member' . '.' . $extension;
                Request::file('avatar')->move($destinationPath, $fileName);
                $inputs['avatar'] = 'img/team/' . $fileName;

                Team::create($inputs);
                // sending back with message
                \Session::flash('message', 'Upload successfully');

                return redirect('team', 201);
            } else {
                // sending back with error message
                \Session::flash('error', 'uploaded file is not valid!');
                return redirect('team', 500);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function getShowing($id)
    {
        $team = Team::findOrFail($id);
        return view('team.single', ['team' => $team]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function getEditing($id)
    {
        $team = Team::findOrFail($id);
        return view('team.edit', ['team' => $team, 'method' => 'put']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function putUpdating($id)
    {
        //
    }

    public function getDeleting($id)
    {
        $team = Team::findOrFail($id);
        return view('team.edit', ['team' => $team, 'method' => 'put']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function deleteDestroying($id)
    {

    }

}
