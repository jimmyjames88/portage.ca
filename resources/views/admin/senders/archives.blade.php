@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="title">Sender Archives</h1>
    <div>
        <a href="{{ url()->previous() }}" class="btn">
            <i class="fa fa-arrow-left"></i> Go Back
        </a>
    </div>
    @include('admin.senders._table')
</div>
@endsection
