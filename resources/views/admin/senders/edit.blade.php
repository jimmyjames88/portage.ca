@extends('admin.layout')

@section('content')
    <div class="container">
        <h1 class="title">Edit sender #{{ $sender->id }} - {{ $sender->fullName }}</h1>

        <div>
            <a href="#" onclick="history.back()" class="btn">
                <i class="fa fa-arrow-left"></i> Back
            </a>
            <a href="/admin/senders/{{ $sender->id }}/delete" class="btn">
                <i class="fa fa-trash"></i> Delete
            </a>
        </div>

        {{ Form::model($sender, ['method'=>'PUT', 'url'=>'/admin/senders/' . $sender->id]) }}

            @include('admin.senders._form')

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>

        {{ Form::close() }}
    </div><!-- end container -->
@endsection
