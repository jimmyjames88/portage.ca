@extends('admin.layout')

@section('content')
    <div class="container">
        <h1 class="title">Edit Porter #{{ $porter->id }} - {{ $porter->fullName }}</h1>

        <div>
            <a href="#" onclick="history.back()" class="btn">
                <i class="fa fa-arrow-left"></i> Back
            </a>
            <a href="/admin/porters/{{ $porter->id }}/delete" class="btn">
                <i class="fa fa-trash"></i> Delete
            </a>
        </div>

        {{ Form::model($porter, ['method'=>'PUT', 'url'=>'/admin/porters/' . $porter->id]) }}
 
            @include('admin.porters._form')

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>

        {{ Form::close() }}
    </div><!-- end container -->
@endsection
