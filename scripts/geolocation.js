$.get("http://ipinfo.io", function (response) {
	// alert('This site will use your geolocation.');
		$("#ip").html("IP: " + response.ip);
		$("#address").html(response.city + ", " + response.country);
		$("#address2").html(response.city + ", " + response.country);
		$("#geoloc").html(response.loc);

		$("#lati").html((response.loc).split(',')[0]);
		$("#long").html((response.loc).split(',')[1]);
	
		$("#details").html(JSON.stringify(response, null, 4));
		
	}, "jsonp");

	
$.get("")


// $.getJSON("http://ipinfo.io", function (data){
    

//     var lat = parseFloat((data.loc).split(',')[0]);
//     var long = parseFloat((data.loc).split(',')[1]);
//     var locatia = data.city;
//     }

