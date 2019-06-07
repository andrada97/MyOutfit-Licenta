


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
                            <a class="nav-link" href="join.php">Join</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../templates/about.php">About</a>
                    </li>   
                </ul>
            </div>

        

        </div>
    </nav>
    
    
    <!-- <?php include 'abonare.php'; ?> -->


    <!-- Caseta de abonare -->
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3> Find your outfit everyday </h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form class="join-form"   method="POST" action="../includes/join.inc.php" method="POST">
                        
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="email" type="text" class="form-control" placeholder="Email Address" name='email'  autofocus>
                        </div>
                        

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="fname" type="text" class="form-control" placeholder="First name" name='fname'>
                        </div>

                        <div class="input-group form-group">
                             <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                             </div>
                            <input id="lname" type="text" class="form-control" placeholder="Last name" name='lname' >
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                   <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="city" type="text" class="form-control" placeholder="City" name='city' >
                            <script>
								function activatePlaces(){
									var input = document.getElementById('city');
									var autocomplete = new google.maps.places.Autocomplete(input);
								}
							</script>
							<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZiRQSd8fx7u4KGqey86oBwmUh1lWkuBA&libraries=places&callback=activatePlaces"></script>

                        </div>

                        <div class="input-group form-group">
                            <select class="form-control" name='gender'>
                                <option value="0" selected>Gender</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <!-- <input type="submit" value="Abonare" class="btn float-right login_btn" > -->
                            <button  name ="submit" type="submit" class="btn btn-secondary float-right btn-dark" id="contact-submit">Join</button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
        </div>


</body>
</html>