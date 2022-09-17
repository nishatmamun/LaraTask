@extends('master')
@section('main')
@php
$title= "User List";
@endphp

<div class="page-content">
    <div class="container-fluid">
        <a href="{{route('dashboard')}}" class="btn btn-primary">Dashboard</a>
        <div class="row">
            <div class="col-lg-6">
                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Website</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                            <tr>
                                <td>{{$datas->user_id}}</td>
                                <td>{{$datas->name}}</td>
                                <td>{{$datas->username}}</td>
                                <td>{{$datas->email}}</td>
                                <td>{{$datas->phone}}</td>
                                <td>{{$datas->website}}</td>
                                <td><a class="btn btn-sm btn-primary"
                                        href="{{route('user.details',['id'=>$datas->user_id])}}">Posts</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
</div>

@endsection