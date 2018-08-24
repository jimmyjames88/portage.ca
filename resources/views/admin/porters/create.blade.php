@extends('admin.layout')

@section('content')
    <div class="container">
        <h1 class="title">Add Porter</h1>

        <div>
            <a href="#" onclick="history.back()" class="btn">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        {{ Form::model($porter, ['method'=>'POST', 'url'=>'/admin/porters/']) }}

            @include('admin.porters._form')

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Porter</button>
            </div>

        {{ Form::close() }}
    </div><!-- end container -->
@endsection
