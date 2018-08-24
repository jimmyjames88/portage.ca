<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Origin</th>
            <th scope="col">Destination</th>
            <th scope="col">Delivery Window</th>
            <th scope="col">Cargo Space</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="6">{{ $senders->render() }}</td>
        </tr>
    </tfoot>
    <tbody>
        @foreach($senders as $sender)
        <tr onclick="location.href='/admin/senders/{{ $sender->id }}'">
            <th scope="row">{{ $sender->id }}</th>
            <td>
                {{ $sender->fullName }}
            </td>
            <td>
                {{ $sender->originCity }}
                <br /><small>{{ $sender->originPostal }}</small>
            </td>
            <td>
                {{ $sender->destinationCity }}
                <br /><small>{{ $sender->destinationPostal }}</small>
            </td>
            <td>
                <span class="nowrap">{{ date('M jS', strtotime($sender->earliestDeliveryDate)) }}</span> - <span class="nowrap">{{ date('M jS', strtotime($sender->latestDeliveryDate)) }}</span>
                <br /><small>{{ (date('Y-m-d H:i:s', strtotime($sender->latestDeliveryDate)) >= date('Y-m-d H:i:s') ? 'pending' : 'expired') }}</small>
            </td>
            <td>{{ $sender->cargoSpace }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
