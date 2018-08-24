@extends('admin.layout')

@section('content')
<div class="container">
    <h1 class="title">Viewing Porter #{{ $porter->id }} - {{ $porter->fullName }}</h1>

    <div>
        <a href="/admin/porters" class="btn">
            <i class="fa fa-arrow-left"></i> Back
        </a>
        <a href="/admin/porters/{{ $porter->id }}/edit" class="btn">
            <i class="fa fa-pencil"></i> Edit
        </a>
        <a href="/admin/porters/{{ $porter->id }}/delete" class="btn">
            <i class="fa fa-trash"></i> Delete
        </a>
    </div>
    <hr />
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Origin</th>
                <td>
                    {{ $porter->originStreetNumber }} {{ $porter->originStreetName }}
                    <br />{{ $porter->originCity }} {{ isset($porter->originProvince) ? ' , ' . $porter->originProvince : '' }}
                    <br />{{ $porter->originPostal }}
                </td>
            </tr>
            <tr>
                <th scope="row">Destination</th>
                <td>
                    {{ $porter->destinationStreetNumber }} {{ $porter->destinationStreetName }}
                    <br />{{ $porter->destinationCity }} {{ isset($porter->destinationProvince) ? ' , ' . $porter->destinationProvince : '' }}
                    <br />{{ $porter->destinationPostal }}
                </td>
            </tr>
            <tr>
                <th scope="row">Departure</th>
                <td>{{ date('l F jS @ g:ia', strtotime($porter->departure)) }}</td>
            </tr>
            <tr>
                <th scope="row">Out of Way</th>
                <td>{{ $porter->outOfWay }}</td>
            </tr>
            <tr>
                <th scope="row">Cargo Space</th>
                <td>{{ $porter->cargoSpace }}</td>
            </tr>

            <tr>
                <td colspan="2">
                    <hr />
                </td>
            </tr>

            <tr>
                <th scope="row">Full Name</th>
                <td>{{ $porter->fullName }}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td><a href="mailto:{{ $porter->email }}">{{ $porter->email }}</a></td>
            </tr>
            <tr>
                <th scope="row">Phone</th>
                <td>{{ $porter->phone }}</td>
            </tr>
            <tr>
                <th scope="row">Best Contact Method</th>
                <td>{{ $porter->bestContactMethod }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr />
                </td>
            </tr>
            <tr>
                <th scope="row">Valid Registration &amp; Insurance</th>
                <td>{{ $porter->validRegistrationInsurance }}</td>
            </tr>
            <tr>
                <th scope="row">Licensed</th>
                <td>{{ $porter->licensed }}</td>
            </tr>
            <tr>
                <th scope="row">Agreed to TOS</th>
                <td>{{ $porter->tos }}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr />
                </td>
            </tr>
            <tr>
                <th scope="row">Created at</th>
                <td>{{ $porter->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">Last updated</th>
                <td>{{ $porter->updated_at }}</td>
            </tr>
        </tbody>
    </table>

</div><!-- end container -->
@endsection
