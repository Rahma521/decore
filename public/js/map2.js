
// start map ============
// ============
function initMap() {
    // The location of Uluru
    const uluru = { lat: 24.769472232800453, lng:46.69108382453509};
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom:9,
      center: uluru,
    });
    
    var markerIcon = {
      url: '../images/location1.png',
      scaledSize: new google.maps.Size(65, 80),
      // origin: new google.maps.Point(40, 0),
      anchor: new google.maps.Point(13,17)
    };
    
    // The marker, positioned at Uluru
    const marker = new MarkerWithLabel({
      position: uluru,
     map: map,
     icon:markerIcon,
     clickable: true,
      labelContent: " <div class='images_location1'><img src='../images/logooo.png'></div>", // can also be HTMLElement
      labelClass: "sayed", // the CSS class for the label
      url:"https://jaadara.com/"
    });

    
    google.maps.event.addListener(marker, 'click', function () {
      window.location.href = this.url;
      })
  }
