@extends('layout')

@section('content')
    <section id="" class="pt60 pb50" data-overlay-light="10">
        <div class="container">

            <h1 class="title">Available Porters</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Origin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Departing</th>
                        <th scope="col">Cargo Space</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="5">{{ $porters->render() }}</td>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($porters as $porter)
                        <tr>
                            <th scope="row">{{ $porter->id }}</th>
                            <td>
                                {{ $porter->originCity }}
                                <br /><small>{{ $porter->originPostal }}</small>
                            </td>
                            <td>
                                {{ $porter->destinationCity }}
                                <br /><small>{{ $porter->destinationPostal }}</small>
                            </td>
                            <td>{{ date('M jS @ g:ia', strtotime($porter->departure)) }}</td>
                            <td>{{ $porter->cargoSpace }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div><!-- end container -->
    </section>

@endsection
