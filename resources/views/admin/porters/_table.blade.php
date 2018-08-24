<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
            <th scope="col">Departure</th>
            <th scope="col">Cargo Space</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="7">{{ $porters->render() }}</td>
        </tr>
    </tfoot>
    <tbody>
        @foreach($porters as $porter)
        <tr onclick="location.href='/admin/porters/{{ $porter->id }}'">
            <th scope="row">{{ $porter->id }}</th>
            <td>
                {{ $porter->fullName }}
            </td>
            <td>
                {{ $porter->originCity }}
                <br /><small>{{ $porter->originPostal }}</small>
            </td>
            <td>
                {{ $porter->destinationCity }}
                <br /><small>{{ $porter->destinationPostal }}</small>
            </td>
            <td>
                {{ date('M jS @g:ia', strtotime($porter->departure)) }}
                <br /><small>{{ (date('Y-m-d H:i:s', strtotime($porter->departure)) >= date('Y-m-d H:i:s') ? 'pending' : 'expired') }}</small>
            </td>
            <td>{{ $porter->cargoSpace }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
