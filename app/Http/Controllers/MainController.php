<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Admin;
use Illuminate\Support\Facades\Http;
use Artisan;

class MainController extends Controller
{
    public function store(){

        $api_url = "https://jsonplaceholder.typicode.com/users";

        $response = Http::get($api_url);

        $data = json_decode($response->body());

        foreach ($data as $user) 
        {
            $user = (array)$user;

            User::updateOrCreate(
                ['user_id' => $user['id']],
                [
                    'user_id' => $user['id'],
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

        foreach ($data as $post) 
        {
            $post = (array)$post;

            Post::updateOrCreate(
                ['post_id' => $post['id']],
                [
                    'post_id' => $post['id'],
                    'user_id' => $post['userId'],
                    'title' => $post['title'],
                    'body' => $post['body']
                ]
                
                );
        }

        
        $api_url3 = "https://jsonplaceholder.typicode.com/comments";

        $response = Http::get($api_url3);

        $data = json_decode($response->body());

        foreach ($data as $comment) 
        {
            $comment = (array)$comment;

            Comment::updateOrCreate(
                ['comment_id' => $comment['id']],
                [
                    'comment_id' => $comment['id'],
                    'post_id' => $comment['postId'],
                    'email' => $comment['email'],
                    'name' => $comment['name'],
                    'body' => $comment['body']
                ]
                
                );
        }
        return redirect()->back();
    }

    public function flash(){
        Artisan::call('migrate:refresh');
        $seeder = new \Database\Seeders\AdminSeeder();
        $seeder->run();
        return redirect()->back();
    }

    public function seeder(){
        $seeder = new \Database\Seeders\AdminSeeder();
        $seeder->run();
        return redirect()->back();
    }
}