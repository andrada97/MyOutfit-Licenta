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

        

        </div>
    </nav>
    
</body>
</html>