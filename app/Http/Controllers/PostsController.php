<?php
/**
 * Created by PhpStorm.
 * User: Chicky-PC
 * Date: 11/23/2015
 * Time: 1:43 PM
 */

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Support\Facades\Auth;
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
        $posts = Post::with('Author')->orderBy('id', 'DESC')->paginate(5);
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
        try{
            $post_title = Input::get('title');
            $post_content = Input::get('content');
            $author_id = Auth::user()->id;
            $category_id = 0;
            Post::create(array('title' => $post_title, 'content' => $post_content, 'author_id' => $author_id, 'category_id' => $category_id));
            Session::flash('message', "Added post successfully!");
        }
        catch(\Exception $e){
            Session::flash('error', "Added post failed!");
        }
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