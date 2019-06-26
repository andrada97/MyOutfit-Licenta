<!DOCTYPE html>

<html lang="en">
<head>

    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="My outfit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/about.css">

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
                            <a class="nav-link" href="../templates/join.php">Join</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../templates/about.php">About</a>
                    </li>   
                </ul>
            </div>

            
        

        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3> About our team</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form class="join-succ-form"   method="POST"  >
                        <h4> Application created by Țăpuc Andrada-Ionela. </h4>
                        <h4> If you would like to send us new outfit ideas, please contact us at: </h4>
                        <h4><i>myoutfit@gmail.com </i></h4>
                        <div class="form-group">
                            <button id="btnHome" name ="btnHome" type="submit" class="btn btn-secondary float-right btn-dark" id="contact-submit">Home page</button>
                                <?php
                                    if(isset($_POST['btnHome'])){
                                        header('Location: ../index.php');
                                    }
                                ?>
                            
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
        </div>
    
</body>
</html>