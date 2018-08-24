@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="title">Porters</h1>
    <div>
        <a href="/admin/porters/create" class="btn">
            <i class="fa fa-user-plus"></i> Add Porter
        </a>
        <a href="/admin/porters/archives" class="btn">
            <i class="fa fa-archive"></i> Archives
        </a>
    </div>
    @include('admin.porters._table')
</div><!-- end container -->
@endsection
