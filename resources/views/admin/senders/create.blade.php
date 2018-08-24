@extends('admin.layout')

@section('content')
    <div class="container">
        <h1 class="title">Add sender</h1>

        <div>
            <a href="#" onclick="history.back()" class="btn">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        {{ Form::model($sender, ['method'=>'POST', 'url'=>'/admin/senders/']) }}

            @include('admin.senders._form')

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save sender</button>
            </div>

        {{ Form::close() }}
    </div><!-- end container -->
@endsection
