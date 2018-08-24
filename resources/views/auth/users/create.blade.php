
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="title">Register Account</h1>
        <form action="/auth/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required />
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required />
            </div>
            @if($errors->any())
            <div class="form-group">
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create account <i class="fa fa-user"></i></button>
            </div>
        </div>
    </div>
@endsection
