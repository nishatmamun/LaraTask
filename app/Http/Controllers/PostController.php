<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function store(){

        $api_url = "https://jsonplaceholder.typicode.com/posts";

        $response = Http::get($api_url);

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
        dd("Data Stored");
    }
}