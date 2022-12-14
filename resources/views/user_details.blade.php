@extends('master')
@section('main')
@php
$title= "User Posts";
@endphp

<div class="container-fluid">
    <h1 class="h2 my-3 d-flex justify-content-center">User Posts</h1>
    <div class="my-2">
        <div class="container d-flex flex-row">

            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Name: {{ $name->name }}</h5>
                    <br>
                    @foreach ($data as $datas)
                    <h5 class="card-title">Title: {{ $datas->title }}</h5>
                    <p class="card-text">Description: {{ $datas->body }}</p>
                    <div class="d-flex flex-row-reverse">
                        <a class="btn btn-sm btn-primary"
                            href="{{ route('post.details',['id'=>$datas->post_id])}}">Details</a>
                    </div>
                    <br>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
</div>


@endsection