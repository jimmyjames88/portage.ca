<fieldset class="form-group">
    <legend>Origin Address</legend>
    <div class="row">
        <div class="col-md-3">
            {{ Form::label('originStreetNumber', 'Number')}}
            {{ Form::text('originStreetNumber', $porter->originStreetNumber, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-9">
            {{ Form::label('originStreetName', 'Street Name')}}
            {{ Form::text('originStreetName', $porter->originStreetName, ['class'=>'form-control']) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            {{ Form::label('originCity', 'City')}}
            {{ Form::text('originCity', $porter->originCity, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('originProvince', 'Province')}}
            {{ Form::text('originProvince', $porter->originProvince, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-4">
            {{ Form::label('originPostal', 'Postal')}}
            {{ Form::text('originPostal', $porter->originPostal, ['class'=>'form-control']) }}
        </div>
    </div>
</fieldset>
<hr />
<fieldset class="form-group">
    <legend>Destination Address</legend>
    <div class="row">
        <div class="col-md-3">
            {{ Form::label('destinationStreetNumber', 'Number')}}
            {{ Form::text('destinationStreetNumber', $porter->destinationStreetNumber, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-9">
            {{ Form::label('destinationStreetName', 'Street Name')}}
            {{ Form::text('destinationStreetName', $porter->destinationStreetName, ['class'=>'form-control']) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            {{ Form::label('destinationCity', 'City')}}
            {{ Form::text('destinationCity', $porter->destinationCity, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('destinationProvince', 'Province')}}
            {{ Form::text('destinationProvince', $porter->destinationProvince, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-4">
            {{ Form::label('destinationPostal', 'Postal')}}
            {{ Form::text('destinationPostal', $porter->destinationPostal, ['class'=>'form-control']) }}
        </div>
    </div>
</fieldset>
<hr />
<fieldset class="form-group">
    <legend>Trip Info</legend>
    <div class="row">
        <div class="col-md-5">
            {{ Form::label('departure', 'Departure') }}
            <div class="input-append date datetimepicker" data-date="{{ $porter->departure or '' }}" data-date-format="yyyy-mm-dd hh:ii" required>
                <input name="departure" class="span2 form-control" size="16" type="text" value="{{ $porter->departure or '' }}">
                <span class="add-on"><i class="icon-th"></i></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('', 'Out of Way') }}
        <br />
        {{ Form::radio('outOfWay', '5 minutes', ($porter->outOfWay == '5 minutes'), ['id'=>'outOfWay5', 'required'])}}
        {{ Form::label('outOfWay5', '5 minutes') }}
        <br />
        {{ Form::radio('outOfWay', '10 minutes', ($porter->outOfWay == '10 minutes'), ['id'=>'outOfWay10'])}}
        {{ Form::label('outOfWay10', '10 minutes') }}
        <br />
        {{ Form::radio('outOfWay', '15+ minutes', ($porter->outOfWay == '15+ minutes'), ['id'=>'outOfWay15'])}}
        {{ Form::label('outOfWay15', '15+ minutes') }}
    </div>
    <div class="form-group">

        {{ Form::label('', 'Cargo Space') }}
        <br />
        {{ Form::radio('cargoSpace', 'Front seat', ($porter->cargoSpace == 'Front seat'), ['id'=>'cargoSpaceFrontSeat', 'required'])}}
        {{ Form::label('cargoSpaceFrontSeat', 'Front Seat') }}
        <br />
        {{ Form::radio('cargoSpace', 'Back seat', ($porter->cargoSpace == 'Back seat'), ['id'=>'cargoSpaceBackSeatTrunk'])}}
        {{ Form::label('cargoSpaceBackSeatTrunk', 'Back Seat / Trunk') }}
        <br />
        {{ Form::radio('cargoSpace', 'Pickup truck', ($porter->cargoSpace == 'Pickup truck'), ['id'=>'cargoSpacePickupTruck'])}}
        {{ Form::label('cargoSpacePickupTruck', 'Pickup Truck') }}
    </div>
</fieldset>
<hr />
<fieldset class="form-group">
    <legend>Contact</legend>
    <div class="row">
        <div class="col-md-6">
            {{ Form::label('fullName', 'Full Name') }}
            {{ Form::text('fullName', $porter->fullName, ['required', 'class'=>'form-control']) }}
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', $porter->email, ['required', 'class'=>'form-control']) }}
            </div>
        <div class="col-md-6">
                {{ Form::label('phone', 'Phone') }}
                {{ Form::text('phone', $porter->phone, ['required', 'class'=>'form-control']) }}
            </div>
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('', 'Best Contact Method') }}
        <br />
        {{ Form::radio('bestContactMethod', 'Phone call', ($porter->bestContactMethod == 'Phone call'), ['id'=>'bestContactMethodPhone', 'required'] )}}
        {{ Form::label('bestContactMethodPhone', 'Phone Call') }}
        <br />
        {{ Form::radio('bestContactMethod', 'Text message', ($porter->bestContactMethod == 'Text message'), ['id'=>'bestContactMethodText'] )}}
        {{ Form::label('bestContactMethodText', 'SMS / Text Message') }}
        <br />
        {{ Form::radio('bestContactMethod', 'Email', ($porter->bestContactMethod == 'Email'), ['id'=>'bestContactMethodEmail'] )}}
        {{ Form::label('bestContactMethodEmail', 'Email') }}
    </div>

    <div class="form-group">
        {{ Form::label('', 'Valid Registration &amp; Insurance') }}
        <br />
        {{ Form::radio('validRegistrationInsurance', 'Yes', ($porter->validRegistrationInsurance == 'Yes'), ['id'=>'validRegistrationInsuranceYes', 'required']) }}
        {{ Form::label('validRegistrationInsuranceYes', 'Yes') }}
        <br />
        {{ Form::radio('validRegistrationInsurance', 'No', ($porter->validRegistrationInsurance == 'No'), ['id'=>'validRegistrationInsuranceNo']) }}
        {{ Form::label('validRegistrationInsuranceNo', 'No') }}
    </div>

    <div class="form-group">
        {{ Form::label('', 'Licensed') }}
        <br />
        {{ Form::radio('licensed', 'Yes', ($porter->licensed == 'Yes'), ['id'=>'licensedYes', 'required']) }}
        {{ Form::label('licensedYes', 'Yes') }}
        <br />
        {{ Form::radio('licensed', 'No', ($porter->licensed == 'No'), ['id'=>'licensedNo']) }}
        {{ Form::label('licensedNo', 'No') }}
    </div>

    <div class="form-group">
        {{ Form::label('', 'Agreed to TOS') }}
        <br />
        {{ Form::radio('tos', '1', ($porter->tos), ['id'=>'tosYes', 'required'])}}
        {{ Form::label('tosYes', 'Yes') }}

        {{ Form::radio('tos', '0', (!$porter->tos), ['id'=>'tosNo'])}}
        {{ Form::label('tosNo', 'No') }}
    </div>
</fieldset>
