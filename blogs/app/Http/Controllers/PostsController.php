<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Session;
use DB;



class PostsController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this -> middleware('auth',['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts=Post::all();
        $posts=Post::orderBy('created_at','desc')->paginate(4);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::all();
       $tags = Tag::all();
        return view('posts.create') -> withCategories($categories) -> withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validates the data
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'category_id'=>'required|integer'
        ] );
        //create posts
        $post = new Post;
        $post -> title = $request -> input('title');
        $post -> content = $request -> input('content');
        $post -> category_id =$request -> input('category_id');
        $post -> user_id = auth() -> user() -> id;
       
        $post -> save();

        $post -> tags() -> sync($request -> tags, false);

        return redirect('/posts') -> with('success','Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
        $categories= Category::all();
        $cats=array();
        foreach($categories as $category){
            $cats[$category -> id] = $category -> name;
        }
        $tags = Tag::all();
        $tags2 = array();
        foreach($tags as $tag){
            $tags2[$tag -> id] = $tag -> name;
        }

        //check for correct user
        
        if (auth() -> user() -> id !== $post ->user_id){
            return redirect('/posts') -> with('error','Unauthorized page!'); 
        }
        return view('posts.edit')->withPost($post) -> withCategory($cats) ->withTags($tags2);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //validates the data
         $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'category_id' =>'required|numeric'
        ] );
        //create posts
        $post =Post::find($id);
        $post -> title = $request -> input('title');
        $post -> content = $request -> input('content');
        $post -> category_id = $request -> input('category_id');
        $post -> user_id = auth() -> user() ->id;
        $post -> save();
        
        if(isset($request -> tags)){
            $post -> tags() -> sync($request -> tags);
        }else{
            $post ->tags() -> sync(array());
        }
       

        return redirect('/posts') -> with('success','Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::find($id);
        $post -> tags() -> detach();
        
        //check for correct user
        if (auth() -> user() -> id !== $post ->user_id){
            return redirect('/posts') -> with('error','Unauthorized page!'); 
        }
        $post -> delete();
        return redirect('/posts') -> with('success','Post removed!');

    }
}
