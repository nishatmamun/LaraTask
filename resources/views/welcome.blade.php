@php
$lastId= App\Models\Admin::orderBy('id', 'desc')->first()->id;
$data = App\Models\Admin::find($lastId);
$seed= "Seed First";
@endphp
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>