<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $user = User::with('post')->get();
        Session::flash('success', 'Very Good, Success View Data!');
        return view('user', compact('user'));
    }
}
