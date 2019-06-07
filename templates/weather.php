<!DOCTYPE html>

<html lang="en">
<head>

    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="My outfit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aboneaza-te la site</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/join.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  
    <!-- Leaflet Map -->
    <link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    

    
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

            <!-- Buton de cautare alta locatie-->
        <div class="col-sm-3 col-md-3">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Find location.." name="q" id="search_location">
                        <div class="input-group-btn">
                             <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                     </div>
                </form>
        </div>
    
    </nav>



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
    attribution:<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>
  }).addTo(map);
</script>

</body>
</html>