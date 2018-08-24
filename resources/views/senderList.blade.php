@extends('layout')

@section('content')
    <section id="" class="pt60 pb50" data-overlay-light="10">
        <div class="container">

            <h1 class="title">Available Senders</h1>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Origin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Delivery Window</th>
                        <th scope="col">Cargo Space</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="5">{{ $senders->render() }}</td>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($senders as $sender)
                        <tr>
                            <th scope="row">{{ $sender->id }}</th>
                            <td>
                                {{ $sender->originCity }}
                                <br /><small>{{ $sender->originPostal }}</small>
                            </td>
                            <td>
                                {{ $sender->destinationCity }}
                                <br /><small>{{ $sender->destinationPostal }}</small>
                            </td>
                            <td>
                                <span class="nowrap">{{ date('M jS @ g:ia', strtotime($sender->earliestDeliveryDate)) }}</span> - <span class="nowrap">{{ date('M jS @ g:ia', strtotime($sender->latestDeliveryDate)) }}</span>
                            </td>
                            <td>{{ $sender->cargoSpace }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div><!-- end container -->
    </section>

@endsection
