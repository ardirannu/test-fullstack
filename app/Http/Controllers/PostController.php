<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){
        $post = Post::with('user')->get();
        Session::flash('success', 'Very Good, Success View Data!');
        return view('post', compact('post'));
    }
}
