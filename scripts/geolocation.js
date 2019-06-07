$.get("http://ipinfo.io", function (response) {
	alert('This site will use your geolocation.');
		$("#ip").html("IP: " + response.ip);
		$("#address").html(response.city + ", " + response.country);
		$("#geoloc").html("LOC:" + response.loc);
		$("#details").html(JSON.stringify(response, null, 4));
		
	}, "jsonp");