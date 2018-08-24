@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Are you sure you want to delete sender #{{ $id }}?</h3>
    <h5>This action cannot be undone.</h5>

    {{ Form::open(['method'=>'DELETE', 'url'=>'/admin/senders/' . $id]) }}
        <button type="submit" class="btn btn-primary">Confirm Delete</button>
        <button type="button" class="btn btn-link" onclick="history.back()">Cancel</button>
    {{ Form::close() }}
</div>
@endsection
