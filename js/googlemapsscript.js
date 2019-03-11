function initialize() {

    var styles = [
        {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [
                {"saturation": 36},
                {"color": "#060606"},
                {"lightness": 40}
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [
                {"visibility": "on"},
                {"color": "#060606"},
                {"lightness": 16}
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [
                {"visibility": "off"}
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 20}
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                { "color": "#060606"},
                {"lightness": 17},
                {"weight": 1.2}
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 20}
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 21}
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 17}
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 29},
                {"weight": 0.2}
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 18}
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 16}
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 19}
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {"color": "#060606"},
                {"lightness": 17}
            ]
        }
    ];



            var mapOptions = {
              center: new google.maps.LatLng(40.8681539,-73.42567600000001),
              zoom: 10,
              scrollwheel: false,
              navigationControl: false,
              mapTypeControl: false,
              scaleControl: false,
              draggable: true,
              streetViewControl:false,
              zoomControl:false,
              styles: styles,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                mapOptions);

            var image = 'img/arrow.png';
  var marker = new google.maps.Marker({
    position: {lat: 40.8681539, lng: -73.42567600000001},
    map: map,
    icon: image
  });
          };
          google.maps.event.addDomListener(window, 'load', initialize);