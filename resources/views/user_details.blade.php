<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>User Details</title>
</head>

<body>
    <div class="page-content">
        <div class="container-fluid">
            <a href="{{route('dashboard')}}" class="btn btn-primary">Dashboard</a>
            <div class="row">
                <div>
                    <div class="container d-flex flex-row">
                        <div>
                            <div class="card">
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
                                    <hr>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div>
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous">
            </script>
</body>

</html>