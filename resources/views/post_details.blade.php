@extends('master')
@section('main')
@php
$title= "Post Details";
@endphp


<div class="page-content">
    <div class="container-fluid">
        <h1 class="h2 my-3 d-flex justify-content-center">Post Details</h1>
        <div class="row">
            <div>
                <div class="container d-flex flex-row">
                    <div>
                        <div class="card text-white bg-dark">
                            <div class="card-body">
                                <h5 class="card-title">Username: {{ $post->users->name }}</h5>
                                <h5 class="card-title">Title: {{ $post->title }}</h5>
                                <p class="card-text">Description: {{ $post->body }}</p>
                                <br>
                                <h5 class="card-title">Comments:</h5>
                                @foreach ($data as $datas)
                                <p class="card-text ml-3">-> {{ $datas->body }}</p>
                                @endforeach
                                <hr>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
    </div>
</div>

@endsection