<!DOCTYPE html>

<html lang="en">
<head>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="My outfit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Weather </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/weather.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
    <!-- Leaflet Map -->
    <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    
    <!-- <script type="text/javascript" src="../scripts/weatherCard.js"></script> -->
    
    <!-- Geolocatia curenta -->
    <script src="../scripts/geolocation.js"></script>
    <script src="../scripts/currentW.js"></script>
    
</head>

<body>
  
   
    <!-- Bara de meniu -->
    <nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark ">
        <div class="container" >
            <a class="navbar-brand" href="../index.php">My Outfit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../templates/weather.php">Weather</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="../templates/join.php">Join</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../templates/about.php">About</a>
                    </li>   
                </ul>
            </div>

            
            <div class="col-sm-3 col-md-3">
                <div id="address" style="color:white; text-align: right; "></div>
                <div id='temp' style="color:white;  text-align: right;"></div>
            </div>
            <div><img class = "icon" width="75px" margin-left='0px'/></div>

    
    </nav>


<div class="container">
 <div id="leaflet"></div>
    <script type="application/javascript" src="//unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script> 
        var map = new L.Map('leaflet', {
        center: [47.159810,27.587200],
        zoom: 9,
        layers: [
            new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {})
        ]
    });
    var marker = L.marker([47.159810,27.587200]).addTo(map).bindPopup('Temp: 26 C, Hum: 40%'); 
    function addMarker(e){
    // Add marker to map at click location; add popup window
    var newMarker = new L.marker(e.latlng).addTo(map);
    }
    addMarker(47.159810,27.587200);

    </script>  

    <div id="map"></div>
    <script>
    var map = L.map('map').setView([47.159810,27.587200],9);
    L.tileLayer('https://api.maptiler.com/maps/topographique/{z}/{x}/{y}.jpg?key=ent3rAUYRJ6Fc14Uni2f', {
        attribution:<a href="https://www.maptiler.com/copyright/" target="_blank"> © MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>
    }).addTo(map);
    </script> 



<div class="weather-app">
	<div class="left">
    <div id="address2" class='location' style="color:white; text-align: right; "></div>
    <div id='temp2' class="temperature-celsius" style="color:white;  text-align: right;"></div>
        <!-- <div id='temp' style="color:white; "></div> -->
		<!-- <div id="toggleCelsius" class="temperature-celsius"><div id="temp"></div></div>  -->
        <!-- <span id='temp'> </span> -->
	    <!-- <div id='address' class="location"></div> -->
        <!-- <div id="address" style="color:white; "></div> -->
	</div>
                    
    <div class="right">
		<div class="top">
				<img class = "icon" width="75px"/>
				<p id="stare" style="color:#262626;"></p>
		</div>
        
        <div class="bottom">
			<div class="humidity">
				<span>Humidity: 
                    <span id='umid'></span>
					<span>💧</span>
				</span>
			</div>
			<div class="wind">
				<span>Wind: <span id="vant"></span></span>
			</div>
		</div>
	</div>
</div>


</div>
</body>
</html>