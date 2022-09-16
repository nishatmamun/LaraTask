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

    public function postComment(){
        $data= Comment::with('posts')->get();
        return view('post_comment', compact('data'));
    }

    public function dashboard(){
        return view('dashboard');
    }
}