@if(session()->has('success'))
    <p class="alert alert-{{ session('success.type') }}">{!!  session('success.message') !!}</p>
@endif