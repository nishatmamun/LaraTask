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

    public function userDetails($id){
       
        // $data = User::where('user_id',$id)->first();
        // Log::info($data);
        // $data = User::find($id);
        $data= User::find($id)->with('posts')->get();
        return view('user_details', compact('data'));
    }
}