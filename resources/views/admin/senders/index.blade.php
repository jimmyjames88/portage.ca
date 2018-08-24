@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="title">Senders</h1>
    <div>
        <a href="/admin/senders/create" class="btn">
            <i class="fa fa-user-plus"></i> Add sender
        </a>
        <a href="/admin/senders/archives" class="btn">
            <i class="fa fa-archive"></i> Archives
        </a>
    </div>
    @include('admin.senders._table')
</div><!-- end container -->
@endsection
