@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="title">Viewing sender #{{ $sender->id }} - {{ $sender->fullName }}</h1>

    <div>
        <a href="/admin/senders" class="btn">
            <i class="fa fa-arrow-left"></i> Back
        </a>
        <a href="/admin/senders/{{ $sender->id }}/edit" class="btn">
            <i class="fa fa-pencil"></i> Edit
        </a>
        <a href="/admin/senders/{{ $sender->id }}/delete" class="btn">
            <i class="fa fa-trash"></i> Delete
        </a>
    </div>
    <hr />
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Origin</th>
                <td>
                    {{ $sender->originStreetNumber }} {{ $sender->originStreetName }}
                    <br />{{ $sender->originCity }} {{ isset($sender->originProvince) ? ' , ' . $sender->originProvince : '' }}
                    <br />{{ $sender->originPostal }}
                </td>
            </tr>
            <tr>
                <th scope="row">Destination</th>
                <td>
                    {{ $sender->destinationStreetNumber }} {{ $sender->destinationStreetName }}
                    <br />{{ $sender->destinationCity }} {{ isset($sender->destinationProvince) ? ' , ' . $sender->destinationProvince : '' }}
                    <br />{{ $sender->destinationPostal }}
                </td>

            </tr>

            <tr>
                <th scope="row">Earliest Delivery Date</th>
                <td>{{ date('l F jS @ g:ia', strtotime($sender->earliestDeliveryDate)) }}</td>
            </tr>
            <tr>
                <th scope="row">Latest Delivery Date</th>
                <td>{{ date('l F jS @ g:ia', strtotime($sender->latestDeliveryDate)) }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr />
                </td>
            </tr>
            <tr>
                <th scope="row">Cargo Space</th>
                <td>{{ $sender->cargoSpace }}</td>
            </tr>
            <tr>
                <th scope="row">Item Description</th>
                <td>{{ $sender->itemDescription }}</td>
            </tr>
            <tr>
                <th scope="row">Item Value</th>
                <td>{{ $sender->itemValue }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr />
                </td>
            </tr>

            <tr>
                <th scope="row">Full Name</th>
                <td>{{ $sender->fullName }}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{ $sender->email }}</td>
            </tr>
            <tr>
                <th scope="row">Phone</th>
                <td>{{ $sender->phone }}</td>
            </tr>
            <tr>
                <th scope="row">Best Contact Method</th>
                <td>{{ $sender->bestContactMethod }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr />
                </td>
            </tr>
            <tr>
                <th scope="row">Agreed to TOS</th>
                <td>{{ $sender->tos }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr />
                </td>
            </tr>
            <tr>
                <th scope="row">Created at</th>
                <td>{{ $sender->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">Last updated</th>
                <td>{{ $sender->updated_at }}</td>
            </tr>
        </tbody>
    </table>

</div><!-- end container -->
@endsection
