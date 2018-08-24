@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="title">Porter Archives</h1>
    <div>
        <a href="{{ url()->previous() }}" class="btn">
            <i class="fa fa-arrow-left"></i> Go Back
        </a>
    </div>
    @include('admin.porters._table')
</div>
@endsection
