@extends('layouts.app')

@push('styles')
<style>
.form-signin {
    max-width: 350px;
    padding: 1rem;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>
@endpush

@section('content')
<div class="form-signin mx-auto my-5">
    <form action="/login" method="post">
        @csrf
        <img class="mb-4" src="{{ asset('logo.png') }}" width="72"/>
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <div class="form-floating">
            <input id="floatingInput" class="form-control" name="email" type="email" placeholder="name@example.com"/>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input id="floatingPassword" class="form-control" name="password" type="password" placeholder="Password"/>
            <label for="floatingPassword">Password</label>
        </div>
        @if ($errors->has('email'))
        <div class="form-text text-danger">{{ $errors->first('email') }}</div>
        @endif
        <button class="btn btn-primary w-100 py-2 my-3" type="submit">Sign in</button>
    </form>
</div>
@endsection
