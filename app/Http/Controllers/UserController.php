<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
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
        dd("User Stored");
    }
}