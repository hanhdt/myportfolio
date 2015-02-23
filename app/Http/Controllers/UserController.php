<?php namespace App\Http\Controllers;

use App\User;
use Request;

class UserController extends Controller
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
        $users = User::all();
        return view('auth.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreating()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postStoring()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function getShowSingle($id)
    {
        $user = User::findOrFail($id);
        return view('auth.single', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function getEditing($id)
    {
        $user = User::findOrFail($id);
        return view('auth.edit', ['user' => $user, 'method' => 'put']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function putUpdating($id)
    {
        $inputs = Request::all();
        $user = User::find($id);
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
        $user->update($id);

        return redirect('user/show-single/' . $id, ['message' => 'Successfully updated!']);
    }

    public function getDeleting($id)
    {
        $user = User::findOrFail($id);
        return view('auth.edit', ['user' => $user, 'method' => 'delete']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function deleteDestroying($id)
    {
        $user = User::find($id);

        User::destroy($id);

        return redirect(
            'user',
            302,
            ['message' => 'Successfully delete #' . $user->name]);
    }

}
