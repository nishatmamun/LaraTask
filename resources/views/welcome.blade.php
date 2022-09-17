@extends('master')
@section('main')

@php
$lastId= App\Models\Admin::orderBy('id', 'desc')->first()->id;
$data = App\Models\Admin::find($lastId);
$seed= "Seed First";
$title = "Laravel Project";
@endphp

<div class="container">
    <div class="row">
        <h2 class="text-center my-3">Laravel Project<h2>
                <div class="d-flex justify-content-center">
                    <form class='card p-5 bg-light' action="{{ route('Signin') }}" method="post">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                        <div class=" mb-3">
                            <label class="exampleInputEmail1 h4">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="username"
                                value="{{ (!empty($data->username)) ? $data->username : $seed }}"
                                id="exampleInputPassword1">
                            <span class="text-danger h6">@error('username') {{ $message }} @enderror </span>
                        </div>
                        <div class="mb-5">
                            <label class="exampleInputEmail1 h4">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="12345678"
                                id="exampleInputPassword1">
                            <span class="text-danger h6">@error('password') {{ $message }} @enderror </span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div>
                    <div class="d-flex justify-content-between my-5  ">
                        <a href="{{ route('fetch.data')}}" class="btn btn-lg btn-success"> Import Data </a>
                        <a href="{{ route('flash.data')}}" class="btn btn-lg btn-danger"> Flash Data </a>
                        <a href="{{ route('seed.data')}}" class="btn btn-lg btn-danger"> Seeder </a>
                    </div>
                </div>
    </div>
</div>

@endsection