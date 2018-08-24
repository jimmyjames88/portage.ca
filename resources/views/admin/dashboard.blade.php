@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="title">Dashboard</h1>
    <p>&nbsp;</p>
    <h3>Today's New Porters</h3>
    @include('admin.porters._table')
    <hr />

    <h3>Today's New Senders</h3>
    @include('admin.senders._table')

</div><!-- end container -->
@endsection
