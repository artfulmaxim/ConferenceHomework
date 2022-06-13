//document.getElementById()
let X = 0;
let Y = 0;

X = document.getElementById('cordX').value;
Y = document.getElementById('cordY').value;
init();


// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);



function init() {
    var mapOptions = {
        zoom: 11,

        center: new google.maps.LatLng(X, Y),

        styles: [{"featureType":"all","elementType":"labels.text","stylers":[{"color":"#878787"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f9f5ed"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"color":"#f5f5f5"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#aee0f4"}]}]
    };

    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(X, Y),
        map: map,
        title: 'Title!'
    });
}

