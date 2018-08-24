function initialize() {

    var acInputs = document.getElementsByClassName("autocomplete");

	var componentForm = {
    	street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        postal_code: 'short_name'
	};

    for (var i = 0; i < acInputs.length; i++) {

        acInputs[i].addEventListener('keyup', function(){
            if(!this.val) $(this).next('span').children('input').val('');
        });

		var options = {
			componentRestrictions: {country: "ca"},
			types: ['geocode']
		}

        var autocomplete = new google.maps.places.Autocomplete(acInputs[i], options);
        autocomplete.inputId = acInputs[i].id;

		google.maps.event.addListener(autocomplete, 'place_changed', function(){
			if(this.inputId == 'porterOriginAddress') var type = 'porterOrigin';
            else if(this.inputId == 'porterDestinationAddress') var type = 'porterDestination';
            else if(this.inputId == 'senderOriginAddress') var type = 'senderOrigin';
			else if(this.inputId == 'senderDestinationAddress') var type = 'senderDestination';
            else return false;

            var place = this.getPlace();

			var fields = '#' + type + 'AddressFields';
			for (var i = 0; i < place.address_components.length; i++) {
				var addressType = place.address_components[i].types[0];
				if (componentForm[addressType]) {
					var val = place.address_components[i][componentForm[addressType]];
					$(fields + ' input[data-type="' + addressType + '"]').val(val);
				}
			}
		});
	}
}

initialize();
