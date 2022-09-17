@extends('master')
@section('main')
@php
$title= "Post Details";
@endphp


<div class="page-content">
    <div class="container-fluid">
        <a href="{{route('dashboard')}}" class="btn btn-primary">Dashboard</a>
        <div class="row">
            <div>
                <div class="container d-flex flex-row">
                    <div>
                        <div class="card">
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