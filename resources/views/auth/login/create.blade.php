@extends('layout')

@section('content')
<div class="container">
    <h1 class="title">Sign In</h1>
    <form method="POST" action="/auth/login">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign in <i class="fa fa-sign-in"></i></button>
        </div>
    </form>
</div>
@endsection
