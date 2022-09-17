@extends('master')
@section('main')
@php
$title= "Dashboard";
@endphp

<div class="container my-3 d-flex justify-content-center">
    <h1>Dashboard</h1>
</div>
<div class="container d-flex justify-content-between">
    <a href="{{ route('users.list') }}" class="btn btn-lg btn-primary">Users</a>
    <a href="{{ route('posts.list') }}" class="btn btn-lg btn-primary">Posts</a>
</div>
<div class="container mt-5">
    <a class="btn btn-lg btn-danger" href="{{ route('signout')}}">Signout</a>
</div>

@endsection