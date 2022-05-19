<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function index(){
        $comment = Comment::get();
        $comment_unregistered = Comment::whereHas('post', function($query) {
            $user_name_registered = User::pluck('name')->toArray();
            $email_name_registered = User::pluck('email')->toArray();
            $query->whereNotIn('name', $user_name_registered)->whereNotIn('email', $email_name_registered);
        })->get();

        Session::flash('success', 'Very Good, Success View Data!');
        return view('comment', compact('comment_unregistered'));
    }
}
