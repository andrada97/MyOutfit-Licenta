<!DOCTYPE html>
<html lang="en">
<head>

    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="My outfit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="styles/style.css"> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.js"></script>

	
	<!-- Geolocatia curenta -->
	<script src="scripts/geolocation.js"></script>

</head>

<body>


    <nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark ">
        <div class="container" >
            <a class="navbar-brand" href="index.php">My Outfit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="templates/weather.php">Weather</a>
                    </li>

                    <li class="nav-item">
                            <!-- <a class="nav-link" href="../templates/join.html">Join</a> -->
							<a class="nav-link" href="templates/join.php">Join</a>
						</li>

                    <li class="nav-item">
                        <a class="nav-link" href="templates/about.php">About</a>
                    </li>  	
				</ul>
			
            </div>
	
			
            <!-- Buton de cautare alta locatie-->
            <div class="col-sm-3 col-md-3">
			<div id="address" style="color:white; position:center;"></div>
                    <form autocomplete="off" class="navbar-form" role="search">
                        <div class="input-group">
						<input type="text" class="form-control" placeholder="Change city.." name="myCity" id="cityInput">

							<script>
								function activatePlaces(){
									var input = document.getElementById('cityInput');
									var autocomplete = new google.maps.places.Autocomplete(input);
								}
							</script>
							<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZiRQSd8fx7u4KGqey86oBwmUh1lWkuBA&libraries=places&callback=activatePlaces"></script>

                         </div>
                    </form>
            </div>
        </div>
    </nav>

    <div class="container" >
            <!-- Caseta de cautare -->
            <section class="search-sec">
                    <div class="container">
                        <form action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <!-- <input type="text" class="form-control search-slt" placeholder="Enter Pickup City"> -->
                                            <select class="form-control search-slt" id="Genul">
                                                <option value="0">Select gender</option>
                                                <option value="1">Female</option>
                                                <option value="2">Male</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <!-- <input type="text" class="form-control search-slt" placeholder="Enter Drop City"> -->
                                            <select class="form-control search-slt" id="Activitate">
                                                <option value="0">Select activity</option>
                                                <option value="1">Park</option>
                                                <option value="2">Dinner</option>
                                                <option value="3">Sport</option>
                                                <option value="4">Festival</option>
                                                <option value="5">Party</option>
												<option value="6">School</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <button id="searchButton" type="button" class="btn btn-dark ">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <!-- Afisare imagini -->
                <section class="projects-section">		
                        <div class="outer-container">
                            <div class="projects-carousel owl-carousel owl-theme">
                                <div class="project-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="images/out2.jpg" alt="" />
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="title">Poza1</div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>				
                                <div class="project-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="images/out3.jpg" alt="" />
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="title">Poza2</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>				
                                <div class="project-block">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="images/out2.jpg" alt="" />
                                            <div class="overlay-box">
                                                <div class="overlay-inner">
                                                    <div class="title">Poza3</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>				
                            </div>			
                        </div>		
                    </section>    
            </div>
        </div>
    </div>    

        <!--    {% for new in news %}-->
        <!--        <h1><b> {{ new.stare_vreme }}</b></h1>-->
        <!--        <p> <b>Localitate:</b> {{new.oras}}, {{new.tara}}</p>-->
        <!--        <p> <b>Temperatura:</b> {{new.temperatura}}</p>-->
        <!--        <p> <b>Data:</b> {{ new.data_new}}</p>-->
        <!--    {% endfor %}-->
        
              <!-- <div class="row">
                <div class="col-sm-4">
                  <h2>London</h2>
                  <p>London is the most populous city in the United Kingdom,
                  with a metropolitan area of over 13 million inhabitants.</p>
                </div>
                <div class="col-sm-4">
                  <h2>Paris</h2>
                  <p>The Paris area is one of the largest population centers in Europe,
                  ith more than 12 million inhabitants.</p>
                </div>
                <div class="col-sm-4">
                  <h2>Tokyo</h2>
                  <p>Tokyo is the center of the Greater Tokyo Area,
                  and the most  populous metropolitan area in the world.</p>
                </div>
              </div> -->

    </div>
 
	<!-- <div id="ip"></div>
<hr/>Full response: <pre id="details"></pre> 
</body> -->
    


<!-- Javascript pentru viziualizarea imaginilor  -->
<script src="scripts/carousel.js"> </script>