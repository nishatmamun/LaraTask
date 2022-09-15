<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DataController extends Controller
{
    public function userList(){
        $data = User::all();
        return view('user_list', compact('data'));
    }

    public function postList(){
        // $data = Post::all();
        $data= Post::with('users')->get();
        return view('post_list', compact('data'));
    }
}