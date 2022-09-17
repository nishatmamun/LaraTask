@php
use Illuminate\Support\Facades\Route;
$value= Route::getFacadeRoot()->current()->uri();
@endphp


<footer class="footer footer-dark bg-dark p-2 mt-3 {{ $value == 'dashboard' ? 'fixed-bottom' : 'p-2'}}">
    <div class="d-flex justify-content-center text-light">All Rights Reserved © 2022</div>
</footer>