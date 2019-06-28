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

