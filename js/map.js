
var map;
var infoWindow;
var service;
var geocoder;

function initialize() {

  geocoder = new google.maps.Geocoder();

  map = new google.maps.Map(document.getElementById('googleMap'), {
    center: new google.maps.LatLng(28.597725, -81.176486),
    zoom: 10,
    styles: [
      {
        stylers: [
          { visibility: 'simplified' }
        ]
      },
      {
        elementType: 'labels',
        stylers: [
          { visibility: 'off' }
        ]
      }
    ]
  });

  infoWindow = new google.maps.InfoWindow();
  service = new google.maps.places.PlacesService(map);

  google.maps.event.addListenerOnce(map, 'bounds_changed', performSearch);
}

function performSearch() {
  var request = {
    bounds: map.getBounds(),
    keyword: 'fishing'
  };
  service.radarSearch(request, callback);
}

function codeAddress() {
  var address = document.getElementById('address').value;

  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });

  infoWindow = new google.maps.InfoWindow();
  service = new google.maps.places.PlacesService(map);

  google.maps.event.addListenerOnce(map, 'bounds_changed', performSearch);
}

function callback(results, status) {
  if (status != google.maps.places.PlacesServiceStatus.OK) {
    alert(status);
    return;
  }
  for (var i = 0, result; result = results[i]; i++) {
    createMarker(result);
  }
}

function createMarker(place) {
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    icon: {
      // Star
      path: 'M -32,0 -24,16 0,24 24,24 40,16 48,8 56,16 64,24 64,-24 56,-16 48,-8 40,-16 24,-24 0,-24 -16,-24 z',
      fillColor: '#E65C00',
      fillOpacity: 1,
      scale: 1/4,
      strokeColor: '#000000',
      strokeWeight: 1
    }
  });

  google.maps.event.addListener(marker, 'click', function() {
    service.getDetails(place, function(result, status) {
      if (status != google.maps.places.PlacesServiceStatus.OK) {
        alert(status);
        return;
      }
      infoWindow.setContent(result.name);
      infoWindow.open(map, marker);
    });
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

