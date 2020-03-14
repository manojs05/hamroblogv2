<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index()
    {
        $posts = Post::all();
        return view('backend.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('backend.posts.create');
    }

     public function store(Request $request)
    {

        $request->validate([
            'title'=>'required|unique:posts|max:255',
            'description'=>'required',

        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Post::create($input);
        return redirect()->route('posts.create');

        /*dd($request->all());*/

       /*Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);*/

        /*return redirect()->back(); */
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('backend.posts.edit', compact('post'));
    }

     public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

     public function show($id)

    {
        $post = Post::findOrFail($id);
        return view('backend.posts.show', compact('post'));
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
}
