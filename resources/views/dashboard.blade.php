@extends('master')
@section('main')
@php
$title= "Dashboard";
$value = Session::get('loginId');
$data = App\Models\Admin::find($value);
@endphp

<div class="container my-3 d-flex justify-content-center">
    <p class="h3">Welcome, {{$data->username}}</p>
</div>
<div class="container d-flex justify-content-between">
    <a href="{{ route('users.list') }}" class="btn btn-lg btn-primary">Users</a>
    <a href="{{ route('posts.list') }}" class="btn btn-lg btn-primary">Posts</a>
</div>

@endsection