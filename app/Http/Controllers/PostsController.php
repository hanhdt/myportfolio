<?php
/**
 * Created by PhpStorm.
 * User: Chicky-PC
 * Date: 11/23/2015
 * Time: 1:43 PM
 */

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller {
    /**
	 * Create a new controller instance.
	 *
	 */
    public function __construct(){

    }
   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(){
        $posts = Post::with('Author')->orderBy('id', 'DESC')->get();
        return view('posts.index')->with('posts', $posts);
    }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(){
        return view('posts.add_post', ['method' => 'post']);
    }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store(){
        $post_title = Input::get('title');
        Session::flash('message', "Post title: " . $post_title);
        return redirect('posts');
    }
   /**
    * Display the specified resource.
    *
    * @param int 
    * @return Response
    */
    public function show($id){}
   /**
    * Show the form for editing the specified resource.
    *
    * @param int 
    * @return Response
    */
    public function edit($id){}
    
   /**
    * Update the specified resource in storage.
    *
    * @param int 
    * @return Response
    */
    public function update($id){}
    
   /**
    * Remove the specified resource from storage.
    *
    * @param int 
    * @return Response
    */
    public function destroy($id){}
}