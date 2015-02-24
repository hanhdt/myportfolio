<?php namespace App\Http\Controllers;

use App\About;
use App\Contact;
use Illuminate\Support\Facades\Validator;
use Request;

class AboutController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

                $destinationPath = 'public/img/about'; // upload path
                $extension = Request::file('image')->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . 'timeline' . '.' . $extension;
                Request::file('image')->move($destinationPath, $fileName);
                $inputs['image'] = 'img/about/' . $fileName;
                About::create($inputs);
                // sending back with message
                \Session::flash('message', 'Upload successfully');

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
        $contacts = Contact::all();
        $abouts = About::all();

        return view('about.index', ['contacts' => $contacts, 'abouts' => $abouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('about.create', ['method' => 'post']);
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
    public function getShow($id)
    {
        $about = About::findOrFail($id);
        return view('about.single', ['about' => $about]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function getEditing($id)
    {
        $about = About::findOrFail($id);
        return view('about.edit', ['about' => $about, 'method' => 'put']);
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
        $file = array('image' => Request::file('image'));
        // setting up rules
        $rules = array('image' => 'required',); // 'mimes' => 'jpeg png gif jpg' and max => 10000
        // doing the validation, passing post data, rules
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            return redirect('about', ['error' => 'Can not upload image']);
        } else {
            if (Request::file('image')->isValid()) {

                $destinationPath = 'public/img/about'; // upload path
                $extension = Request::file('image')->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . 'timeline' . '.' . $extension;
                Request::file('image')->move($destinationPath, $fileName);
                $inputs['image'] = 'img/about/' . $fileName;
                // Update model
                $about = About::findOrFail($id);
                $about->title = $inputs['title'];
                $about->milestone = $inputs['milestone'];
                $about->description = $inputs['description'];
                $about->image = $inputs['image'];
                $about->update();

                // sending back with message
                \Session::flash('message', 'Upload successfully');

                return redirect('about', 302);
            } else {
                // sending back with error message
                \Session::flash('error', 'uploaded file is not valid!');
                return redirect('about', 500);
            }
        }
    }

    public function getDeleting($id)
    {
        $about = About::findOrFail($id);
        return view('about.edit', ['about' => $about, 'method' => 'delete']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function deleteDestroy($id)
    {
        $about = About::find($id);
        $about->delete();
        \Session::flash('message', 'Successfully deleted #' . $about->title . '!');
        return redirect('about', 302);
    }

}
