<?php namespace App\Http\Controllers;

use App\About;
use App\Contact;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Request;

class AboutController extends Controller
{


    public function getIndex()
    {
        $contacts = Contact::all();
        $abouts = About::all();

        return view('about.index', ['contacts' => $contacts, 'abouts' => $abouts]);
    }

    public function getTimeline()
    {
        return view('about.create', ['method' => 'post']);
    }

    public function postTimeline()
    {
        $inputs = Request::all();
        $file = array('image' => Request::file('image'));
        // setting up rules
        $rules = array('image' => 'required',); // 'mimes' => 'jpeg png gif jpg' and max => 10000
        // doing the validation, passing post data, rules
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            return redirect('about', ['error' => 'Can not upload image']);
        } else {
            if (Request::file('image')->isValid()) {

                $destinationPath = 'uploads'; // upload path
                $extension = Request::file('image')->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . 'timeline' . '.' . $extension;
                Request::file('image')->move($destinationPath, $fileName);
                $inputs['image'] = $destinationPath . '/' . $fileName;
                About::create($inputs);
                // sending back with message
                Session::flash('message', 'Upload successfully');

                return redirect('about');
            } else {
                // sending back with error message
                \Session::flash('error', 'uploaded file is not valid!');
                return redirect('about', 500);
            }
        }

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('about.index');
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
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
