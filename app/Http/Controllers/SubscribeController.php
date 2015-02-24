<?php namespace App\Http\Controllers;

use App\Subscribe;
use Request;

class SubscribeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        if (\Auth::check()) {
            $subscribes = Subscribe::all();

            return view('subscribes.index', ['subscribes' => $subscribes]);
        } else
            return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
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
        $inputs = Request::all();
        Subscribe::create($inputs);
        \Session::flash('message', 'You are subscribed to our Newsletter and Updates!');
        return redirect('/', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function getShowSingle($id)
    {
        $subscribe = Subscribe::find($id);

        return view('subscribes.single', ['subscribe' => $subscribe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function getEditing($id)
    {
        $subscribe = Subscribe::find($id);

        return view('subscribes.edit', ['subscribe' => $subscribe, 'method' => 'put']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function putUpdating($id)
    {
        $subscribe = Subscribe::find($id);
        $subscribe->email = Request::get('email');
        $subscribe->update();
        \Session::flash('message', 'Successfully updated #' . $subscribe->email . '!');
        return redirect('subscribes/show-single/' . $id, 302);
    }

    public function getDeleting($id)
    {
        $subscribe = Subscribe::find($id);

        return view('subscribes.edit', ['subscribe' => $subscribe, 'method' => 'delete']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function deleteDestroying($id)
    {
        $subscribe = Subscribe::find($id);
        $subscribe->delete();
        \Session::flash('message', 'Successfully deleted #' . $subscribe->email . '!');
        return redirect('subscribes', 302);
    }
}
