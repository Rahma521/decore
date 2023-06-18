//map
function initMap() {

    var locations = [
        [24.704265, 46.398586],
        [24.654265, 46.718586],
        [24.412265, 46.708586],
        [24.784265, 46.738586],
        [24.774265, 46.338586],
        [24.73265, 46.238586],
    ];

    // Setup the different icons and shadows  

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: new google.maps.LatLng(24.774265, 46.738586),
        mapTypeId: google.maps.MapTypeId.ROADMAP,

    });


    var markers = new Array();

    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {

        var marker = new MarkerWithLabel({
            icon: '../images/l21.png',
            position: new google.maps.LatLng(locations[i][0], locations[i][1]),
            labelContent: '<a href="product-details.html"  target="_blank" class="map-link"> <img src="../images/kitchen.png"></a>',
            labelClass: "maplabel", // the CSS class for the label
            labelAnchor: new google.maps.Point(-15.5, -72),
            map: map,
            url: 'product-details.html'
        });
        
        google.maps.event.addListener(marker, 'click', function () {
            window.location.href = this.url;
        })
        markers.push(marker);

       

    }

    function autoCenter() {
        //  Create a new viewpoint bound
        var bounds = new google.maps.LatLngBounds();
        //  Go through each...
        for (var i = 0; i < markers.length; i++) {
            bounds.extend(markers[i].position);
        }
        //  Fit these bounds to the map
        map.fitBounds(bounds);
    }
    autoCenter();

}
