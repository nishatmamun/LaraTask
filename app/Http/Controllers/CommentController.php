<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Http;

class CommentController extends Controller
{
    public function store(){

        $api_url = "https://jsonplaceholder.typicode.com/comments";

        $response = Http::get($api_url);

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
        dd("Comments Stored");
    }
}