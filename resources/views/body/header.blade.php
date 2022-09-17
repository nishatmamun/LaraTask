<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">{{ $title }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-center mx-2">
            <div class="collapse navbar-collapse {{ Session::has('loginId') ? 'visible' : 'invisible' }}"
                id="navbarSupportedContent">
                <a class="btn btn-success" href="{{ route('signout')}}">Signout</a>
            </div>
        </div>
    </div>
</nav>