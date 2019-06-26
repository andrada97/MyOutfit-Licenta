<?php
    // include_once 'templates/sendDailyMail.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>

    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="My outfit">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>MyOutfit</title>

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
    
            
		
            <?php
            global $temp;
            $temp = 22.0;
            ?>
            
            <div class="col-sm-3 col-md-3">
            <div id="address" style="color:white; "></div>
            <div style="color:white; "><?php echo $temp ?> <span>&#8451;</span> </div>
            </div>
        </div>
    </nav>


    <div class="container" >
            <!-- Caseta de cautare -->
            <section class="search-sec">
                    <div class="container">
                        <form action="./includes/getOutfit.php" method="post" >
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">

                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                         <select name="gen" class="form-control search-slt" id="gen">
                                                <option> Select gender</option>
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                         <select name="activity" class="form-control search-slt" id="activity">
                                                <option >Select activity</option>
                                                <option value="park">Park</option>
                                                <option value="dinner">Dinner</option>
                                                <option value="sport">Sport</option>
                                                <option value="festival">Festival</option>
												<option value="school">School</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <input  name="submit"  id="submit" type="submit" class="btn btn-dark " value="Search"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
               

             <?php 
             
             $temp = 15.0;

             if($temp >=23.0){
                include('templates/outfits/summer/out-empty-summer.php');
                }   
            else {
                if($temp<23.0 && $temp>=17.0){
                    include('templates/outfits/spring/out-empty-spring.php');
                }
                else{
                    if($temp<10.0){
                        include('templates/outfits/winter/out-empty-winter.php');
                    }
                    else{
                        include('templates/outfits/autumn/out-empty-autumn.php');
                        
                    }
                }
            }
             ?>





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

    <!-- <footer>
         <p>MyOutfit &copy 2019 </p>                           
    </footer>                              -->
</body>

</html>

<!-- Javascript pentru viziualizarea imaginilor  -->
<script src="scripts/carousel.js"> </script>