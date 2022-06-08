<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest('post_creation')->paginate(10);
        return Inertia::render('Admin/blog/index',['posts' => $posts]);
    }
    public function getPostList(){
        $posts = Post::latest('post_creation')->paginate(10);
        return Inertia::render('Public/blog/index', ['posts' => $posts]);
    }

    public function getPostIndex(){
        $posts = Post::latest()->take(3)->get();
        return Inertia::render('Public/home/Welcome',['posts'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Admin/blog/crear-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $validated_data = $request->validated();

        // Guardar en storage el fichero
        $path = $request->file('photo')->store(
            'blog', 'public'
        );

        data_set($validated_data, 'photo', $path);
        
        Post::create($validated_data);

        return Inertia::render('Admin/blog/crear-post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $post = Post::find($id);
        
        if ($post) {
            return Inertia::render('Admin/blog/editar-post', compact('post'));
        }

        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $validated_data = $request->validated();
        //$post = Post::find($id);
        
        if($validated_data['photo'] != null ){
            $path = $request->file('photo')->store(
                'blog', 'public'
            );
    
            data_set($validated_data, 'photo', $path);    
        }

        $post->update($validated_data);

        return Redirect::back()->with('success', 'Post updated.');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {   
        $post->delete();
        return Redirect::back()->with('success', 'Post deleted.');  
    }   
}
