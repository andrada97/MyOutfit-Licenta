// import React from 'react';


var js_file = document.createElement('script');
js_file.type = 'text/javascript';
js_file.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBZiRQSd8fx7u4KGqey86oBwmUh1lWkuBA&libraries=places&callback=initialize' ;
document.getElementsByTagName('head')[0].appendChild(js_file);

function initialize() {  
    var input2 = document.getElementById("search_location");
    var autocomplete = new google.maps.places.Autocomplete(input2);
}

    google.maps.event.addDomListener(window, 'load', initialize);
