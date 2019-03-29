// for the address autocompleted
  var engine = new PhotonAddressEngine({
    lang: 'de',
    formatResult: function (feature) {
                      var formatted = feature.properties.name,
                          type = feature.properties.osm_value;

                      if (feature.properties.street) {
                        formatted += ', ' + feature.properties.street;
                      }

                      if (feature.properties.housenumber) {
                        formatted += ' ' + feature.properties.housenumber;
                      }

                      if (feature.properties.city &&
                            feature.properties.city !== feature.properties.name) {
                        formatted += ', ' + feature.properties.city;
                      }

                      if (feature.properties.country) {
                        formatted += ', ' + feature.properties.country;
                      }

                      return formatted;
                  },
    lat: 48.137154,
    lon: 11.576124
  });

  $('#inpAddress').typeahead(null, {
    source: engine.ttAdapter(),
    displayKey: 'description'
  });

  //for the datepicker
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat: 'dd.mm.yy'});
  } );

//for the clockpicker
$('.clockpicker').clockpicker({
  autoclose: true,
  default: 'now'
});
