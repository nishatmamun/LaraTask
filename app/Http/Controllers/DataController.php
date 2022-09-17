<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Log;

class DataController extends Controller
{
    public function userList(){
        $data = User::all();
        return view('user_list', compact('data'));
    }

    public function postList(){
        $data= Post::with('users')->get();
        return view('post_list', compact('data'));
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function userDetails($id){
        $data= User::find($id)->posts;
        $name = User::find($id);
        return view('user_details', compact('data','name'));
    }

    public function postDetails($id){
        $data= Post::find($id)->comments;
        $post = Post::find($id);
        return view('post_details', compact('data','post'));
    }
}