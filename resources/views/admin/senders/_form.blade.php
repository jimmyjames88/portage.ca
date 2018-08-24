<fieldset class="form-group">
    <legend>Origin Address</legend>
    <div class="row">
        <div class="col-md-3">
            {{ Form::label('originStreetNumber', 'Number')}}
            {{ Form::text('originStreetNumber', $sender->originStreetNumber, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-9">
            {{ Form::label('originStreetName', 'Street Name')}}
            {{ Form::text('originStreetName', $sender->originStreetName, ['class'=>'form-control']) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            {{ Form::label('originCity', 'City')}}
            {{ Form::text('originCity', $sender->originCity, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('originProvince', 'Province')}}
            {{ Form::text('originProvince', $sender->originProvince, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-4">
            {{ Form::label('originPostal', 'Postal')}}
            {{ Form::text('originPostal', $sender->originPostal, ['class'=>'form-control']) }}
        </div>
    </div>
</fieldset>
<hr />
<fieldset class="form-group">
    <legend>Destination Address</legend>
    <div class="row">
        <div class="col-md-3">
            {{ Form::label('destinationStreetNumber', 'Number')}}
            {{ Form::text('destinationStreetNumber', $sender->destinationStreetNumber, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-9">
            {{ Form::label('destinationStreetName', 'Street Name')}}
            {{ Form::text('destinationStreetName', $sender->destinationStreetName, ['class'=>'form-control']) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            {{ Form::label('destinationCity', 'City')}}
            {{ Form::text('destinationCity', $sender->destinationCity, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('destinationProvince', 'Province')}}
            {{ Form::text('destinationProvince', $sender->destinationProvince, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-4">
            {{ Form::label('destinationPostal', 'Postal')}}
            {{ Form::text('destinationPostal', $sender->destinationPostal, ['class'=>'form-control']) }}
        </div>
    </div>
</fieldset>
<hr />
<fieldset class="form-group">
    <legend>Delivery</legend>
    <div class="row">
        <div class="col-md-6">
            {{ Form::label('earliestDeliveryDate', 'Earliest Delivery Date') }}
            {{ Form::date('earliestDeliveryDate', $sender->earliestDeliveryDate, ['required', 'class'=>'form-control datepicker']) }}
        </div>

        <div class="col-md-6">
            {{ Form::label('latestDeliveryDate', 'Latest Delivery Date') }}
            {{ Form::date('latestDeliveryDate', $sender->latestDeliveryDate, ['required', 'class'=>'form-control datepicker']) }}
        </div>
    </div>
</fieldset>

<div class="form-group">
    {{ Form::label('', 'Delivery Type') }}
    <br />
    {{ Form::radio('deliveryType', 'Door to door', ($sender->outOfWay == 'Door to door'), ['id'=>'deliveryTypeDoorToDoor', 'required'])}}
    {{ Form::label('deliveryTypeDoorToDoor', 'Door to Door') }}
    <br />
    {{ Form::radio('deliveryType', 'Meet somewhere', ($sender->outOfWay == 'Meet somewhere'), ['id'=>'deliveryTypeMeetSomewhere'])}}
    {{ Form::label('deliveryTypeMeetSomewhere', 'Meet Somewhere') }}
</div>
<hr />
<fieldset class="form-group">
    <legend>Package</legend>
    <div class="row">
        <div class="col-md-3">
            {{ Form::label('itemValue', 'Value') }}
            {{ Form::text('itemValue', $sender->itemValue, ['required', 'class'=>'form-control']) }}
        </div>
        <div class="col-md-9">
            {{ Form::label('itemDescription', 'Description') }}
            {{ Form::text('itemDescription', $sender->itemDescription, ['required', 'class'=>'form-control']) }}
        </div>
    </div>
</fieldset>

<div class="form-group">
    {{ Form::label('', 'Cargo Space') }}
    <br />
    {{ Form::radio('cargoSpace', 'Front seat', ($sender->cargoSpace == 'Front seat'), ['id'=>'cargoSpaceFrontSeat', 'required'])}}
    {{ Form::label('cargoSpaceFrontSeat', 'Front Seat') }}
    <br />
    {{ Form::radio('cargoSpace', 'Back seat', ($sender->cargoSpace == 'Back seat'), ['id'=>'cargoSpaceBackSeatTrunk'])}}
    {{ Form::label('cargoSpaceBackSeatTrunk', 'Back Seat / Trunk') }}
    <br />
    {{ Form::radio('cargoSpace', 'Pickup truck', ($sender->cargoSpace == 'Pickup truck'), ['id'=>'cargoSpacePickupTruck'])}}
    {{ Form::label('cargoSpacePickupTruck', 'Pickup Truck') }}
</div>
<hr />
<fieldset class="form-group">
    <legend>Contact</legend>
    <div class="row">
        <div class="col-md-6">
            {{ Form::label('fullName', 'Full Name') }}
            {{ Form::text('fullName', $sender->fullName, ['required', 'class'=>'form-control']) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', $sender->email, ['required', 'class'=>'form-control']) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('phone', 'Phone') }}
            {{ Form::text('phone', $sender->phone, ['required', 'class'=>'form-control']) }}
        </div>
    </div>
</fieldset>

<div class="form-group">
    {{ Form::label('', 'Best Contact Method') }}
    <br />
    {{ Form::radio('bestContactMethod', 'Phone call', ($sender->bestContactMethod == 'Phone call'), ['id'=>'bestContactMethodPhone', 'required'] )}}
    {{ Form::label('bestContactMethodPhone', 'Phone Call') }}
    <br />
    {{ Form::radio('bestContactMethod', 'Text message', ($sender->bestContactMethod == 'Text message'), ['id'=>'bestContactMethodText'] )}}
    {{ Form::label('bestContactMethodText', 'SMS / Text Message') }}
    <br />
    {{ Form::radio('bestContactMethod', 'Email', ($sender->bestContactMethod == 'Email'), ['id'=>'bestContactMethodEmail'] )}}
    {{ Form::label('bestContactMethodEmail', 'Email') }}
</div>

<div class="form-group">
    {{ Form::label('', 'Agreed to TOS') }}
    <br />
    {{ Form::radio('tos', '1', ($sender->tos), ['id'=>'tosYes', 'required'])}}
    {{ Form::label('tosYes', 'Yes') }}
    <br />
    {{ Form::radio('tos', '0', (!$sender->tos), ['id'=>'tosNo'])}}
    {{ Form::label('tosNo', 'No') }}
</div>
