<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $highlight = Post::orderBy('viewed', 'desc')->first();
        $latest = Post::orderBy('date', 'desc')->take(4)->get();
        $posts = Post::all();

        return view('home', compact('highlight','latest','posts'));
    }
    public function detail($id){
        $post = Post::find($id);

        return view('detail', compact('post'));
    }
}
