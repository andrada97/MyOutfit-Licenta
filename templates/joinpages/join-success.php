<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../vendor/autoload.php';


$dbServername = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "join";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $sql = mysqli_query($conn, 'SELECT fname,lname,email FROM abonati ORDER BY id DESC LIMIT 1');

    $data = mysqli_fetch_row($sql);
    // $result =mysqli_query($conn, 'SELECT fname,lname,email FROM abonati ORDER BY id DESC LIMIT 1');
    // $result = $conn->query($sql);
    // $row = mysqli_fetch_row($result);
    $fname = $data[0];
    $lname = $data[1];
    $email = $data[2];

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.sendgrid.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'apikey';                     // SMTP username
    $mail->Password   = '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';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('myoutfit@gmail.com', 'MyOutfit');
    $mail->addAddress($email, $fname);     // Add a recipient

    $body = "<strong>Welcome to our page, <font size=\"4\">" . $fname . "</font></strong>, <p>";
    $body .= "We will send you outfits and information about weather everyday. <p>";
    $body .= "Sincerely, <br>";
    $body .= "MyOutfit team: ";
    $body .= "<a href=\"http://www.myoutfit.com\">http://www.myoutfit.com/</a><p>"; 

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to MyOutfit';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>


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
    <link rel="stylesheet" type="text/css" href="join-error.css">

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
            <a class="navbar-brand" href="../../index.php">My Outfit</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../weather.html">Weather</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="../join.php">Join</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../about.html">About</a>
                    </li>   
                </ul>
            </div>

        

        </div>
    </nav>
    
    


    <!-- Caseta de abonare -->
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3> Welcome! </h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form class="join-succ-form"   method="POST"  >
                        <h4>You join with success.</h4>

                        <div class="form-group">
                            <button id="btnHome" name ="btnHome" type="submit" class="btn btn-secondary float-right btn-dark" id="contact-submit">Back to home page</button>
                                <?php
                                    if(isset($_POST['btnHome'])){
                                        header('Location: ../../index.php');
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