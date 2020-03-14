<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
    	$posts = Post::all();
        return view('frontend.pages.home.index', ['posts' => $posts]);

    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('frontend.pages.posts.index', compact('post'));
    }


    public function about()
    {
    	return view('frontend.pages.about.index');
    }

    public function contact()
    {
    	return view('frontend.pages.contact.index');
    }
}
