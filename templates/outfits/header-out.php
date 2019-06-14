
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
    <link rel="stylesheet" type="text/css" href="../../../styles/style.css"> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.js"></script>

	


</head>

<body>


    <nav class="navbar navbar-inverse navbar-expand-sm bg-dark navbar-dark ">
        <div class="container" >
            <a class="navbar-brand" href="../../../index.php">My Outfit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../../weather.php">Weather</a>
                    </li>

                    <li class="nav-item">
							<a class="nav-link" href="../../join.php">Join</a>
						</li>

                    <li class="nav-item">
                        <a class="nav-link" href="../../about.php">About</a>
                    </li>  	
				</ul>
			
            </div>
	
        </div>
    </nav>

    <div class="container" >
            <!-- Caseta de cautare -->
            <section class="search-sec">
                    <div class="container">
                        <form action="../../../includes/getOutfit.php" method="post" >
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
                                            <input name="submit"  id="submit" type="submit" class="btn btn-dark " value="Search"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>