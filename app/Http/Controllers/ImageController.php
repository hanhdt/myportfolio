<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		// Load the form view
        return view('photos.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return view('photos.upload', ['method' => 'post']);
	}

	/**
	 * Store a newly created resource in storage.
	 * @params Request
	 * @return Response
	 */
	public function store(Request $request)
	{
        try{
            // validation rules
            $validator = $this->getValidationFactory()->make($request->all(), Photo::$upload_rules, ['Invalid inputs']);

            if ($validator->fails()){
                Session::flash('message','Upload unsuccessfully!!! ');
                logger($validator->getMessageBag());
                return redirect('photos/upload')
                    ->withInput()
                    ->withErrors($validator);
            }
            else{
                // process
                $title = $request->input('title');
                $filename = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filename, PATHINFO_FILENAME);
                $fullname = Str::slug(Str::random(8) . $filename) . '.' . $request->file('image')->getClientOriginalExtension();
                $upload = $request->file('image')->move(config('image.upload_folder'), $fullname);
                Image::make(config('image.upload_folder') . '/' . $fullname)
                    ->resize(config('image.thumb_width'), config('image.thumb_height'), null)
                    ->save(config('image.thumb_folder') . '/' . $fullname);
                if($upload){
                    // insert record to database
                    $photo = new Photo;
                    $photo->title = $title;
                    $photo->image = $fullname;
                    $photo->save();
                    $message = "Uploaded file: " . $photo->id . " " . $title . " - " . $filename;
                    logger($message, ['context' => 'ImageController#store']);
                    Session::flash('message','Upload successfully! ' . $message);
                }
                else{
                    Session::flash('message','Upload unsuccessfully!!! ');
                }
            }

            return redirect('photos', 201);
        }
        catch (\Exception $e){
            info($e, ['context' => 'ImageController#store']);
            return redirect('photos', 302);
        }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
