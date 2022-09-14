<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function store(){

        $api_url = "https://jsonplaceholder.typicode.com/users";

        $response = Http::get($api_url);

        $data = json_decode($response->body());

        echo "<pre>";

        foreach ($data as $user) 
        {
            $user = (array)$user;

            User::updateOrCreate(
                ['id' => $user['id']],
                [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'phone' => $user['phone'],
                    'website' => $user['website']
                ]
                
                );
        }

        $api_url2 = "https://jsonplaceholder.typicode.com/posts";

        $response = Http::get($api_url2);

        $data = json_decode($response->body());

        echo "<pre>";

        foreach ($data as $post) 
        {
            $post = (array)$post;

            Post::updateOrCreate(
                ['id' => $post['id']],
                [
                    'id' => $post['id'],
                    'userId' => $post['userId'],
                    'title' => $post['title'],
                    'body' => $post['body']
                ]
                
                );
        }

        $api_url3 = "https://jsonplaceholder.typicode.com/comments";

        $response = Http::get($api_url3);

        $data = json_decode($response->body());

        echo "<pre>";

        foreach ($data as $comment) 
        {
            $comment = (array)$comment;

            Comment::updateOrCreate(
                ['id' => $comment['id']],
                [
                    'id' => $comment['id'],
                    'postId' => $comment['postId'],
                    'email' => $comment['email'],
                    'name' => $comment['name'],
                    'body' => $comment['body']
                ]
                
                );
        }
        dd("Data Stored");
    }

    public function flash(){
        User::truncate();
        Post::truncate();
        Comment::truncate();
        return redirect()->back();
    }

    public function seeder(){
        $seeder = new \Database\Seeders\AdminSeeder();
        $seeder->run();
        return redirect()->back();
    }
}