<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';


$dbServername = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "join";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $sql = mysqli_query($conn, 'SELECT fname,lname,email,gender,city FROM abonati');

    $temp = 25.0;

    if($sql){
        while($row=mysqli_fetch_row($sql)){
            $fname=$lname=$email='';
            $fname = $row[0];
            $lname = $row[1];
            $email = $row[2];
            $gender = $row[3];
            $city = $row[4];

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


                $body = '<h2> Good morning, ' . $fname . '</h2>'
                        .'<h4>Here you have some outfits idea for today, one for any activity.</h4>'
                        .'<h4>Have a nice day!</h4>'
                        .'<p>Sincerely, <br> </p>'
                        . 'MyOutfit team: ';
                $body .= "<a href=\"http://www.myoutfit.com\">http://www.myoutfit.com/</a><p>"; 

                if($gender = 'F'){
                        if($temp >=23.0){
                            $mail->addAttachment('images/outfits/female/summer/dinner/1.jpg', 'Dinner.jpg');   
                            $mail->addAttachment('images/outfits/female/summer/festival/1.jpg', 'Festival.jpg');    
                            $mail->addAttachment('images/outfits/female/summer/park/1.jpg', 'Park.jpg');    
                            $mail->addAttachment('images/outfits/female/summer/school/1.jpg', 'School.jpg');    
                            $mail->addAttachment('images/outfits/female/summer/sport/1.jpg', 'Sport.jpg');    
                            }   
                        else {
                            if($temp<23.0 && $temp>=17.0){
                                $mail->addAttachment('images/outfits/female/spring/dinner/1.jpg', 'Dinner.jpg');   
                                $mail->addAttachment('images/outfits/female/spring/festival/1.jpg', 'Festival.jpg');    
                                $mail->addAttachment('images/outfits/female/spring/park/1.jpg', 'Park.jpg');    
                                $mail->addAttachment('images/outfits/female/spring/school/1.jpg', 'School.jpg');    
                                $mail->addAttachment('images/outfits/female/spring/sport/1.jpg', 'Sport.jpg');        
                            }
                            else{
                                if($temp<10.0){
                                    $mail->addAttachment('images/outfits/female/autumn/dinner/1.jpg', 'Dinner.jpg');    
                                    $mail->addAttachment('images/outfits/female/autumn/festival/1.jpg', 'Festival.jpg');  
                                    $mail->addAttachment('images/outfits/female/autumn/park/1.jpg', 'Park.jpg');  
                                    $mail->addAttachment('images/outfits/female/autumn/school/1.jpg', 'School.jpg');   
                                    $mail->addAttachment('images/outfits/female/autumn/sport/1.jpg', 'Sport.jpg');   
                                }
                                else{
                                    $mail->addAttachment('images/outfits/female/winter/dinner/1.jpg', 'Dinner.jpg');    
                                    $mail->addAttachment('images/outfits/female/winter/festival/1.jpg', 'Festival.jpg');  
                                    $mail->addAttachment('images/outfits/female/winter/park/1.jpg', 'Park.jpg');  
                                    $mail->addAttachment('images/outfits/female/winter/school/1.jpg', 'School.jpg');   
                                    $mail->addAttachment('images/outfits/female/winter/sport/1.jpg', 'Sport.jpg'); 
                                }
                            }
                        }
                    }
                    else{
                        if($temp >=23.0){
                            $mail->addAttachment('images/outfits/male/summer/dinner/1.jpg', 'Dinner.jpg');   
                            $mail->addAttachment('images/outfits/male/summer/festival/1.jpg', 'Festival.jpg');    
                            $mail->addAttachment('images/outfits/male/summer/park/1.jpg', 'Park.jpg');    
                            $mail->addAttachment('images/outfits/male/summer/school/1.jpg', 'School.jpg');    
                            $mail->addAttachment('images/outfits/male/summer/sport/1.jpg', 'Sport.jpg');    
                            }   
                        else {
                            if($temp<23.0 && $temp>=17.0){
                                $mail->addAttachment('images/outfits/male/spring/dinner/1.jpg', 'Dinner.jpg');   
                                $mail->addAttachment('images/outfits/male/spring/festival/1.jpg', 'Festival.jpg');    
                                $mail->addAttachment('images/outfits/male/spring/park/1.jpg', 'Park.jpg');    
                                $mail->addAttachment('images/outfits/male/spring/school/1.jpg', 'School.jpg');    
                                $mail->addAttachment('images/outfits/male/spring/sport/1.jpg', 'Sport.jpg');        
                            }
                            else{
                                if($temp<10.0){
                                    $mail->addAttachment('images/outfits/male/autumn/dinner/1.jpg', 'Dinner.jpg');    
                                    $mail->addAttachment('images/outfits/male/autumn/festival/1.jpg', 'Festival.jpg');  
                                    $mail->addAttachment('images/outfits/male/autumn/park/1.jpg', 'Park.jpg');  
                                    $mail->addAttachment('images/outfits/male/autumn/school/1.jpg', 'School.jpg');   
                                    $mail->addAttachment('images/outfits/male/autumn/sport/1.jpg', 'Sport.jpg');   
                                }
                                else{
                                    $mail->addAttachment('images/outfits/male/winter/dinner/1.jpg', 'Dinner.jpg');    
                                    $mail->addAttachment('images/outfits/male/winter/festival/1.jpg', 'Festival.jpg');  
                                    $mail->addAttachment('images/outfits/male/winter/park/1.jpg', 'Park.jpg');  
                                    $mail->addAttachment('images/outfits/male/winter/school/1.jpg', 'School.jpg');   
                                    $mail->addAttachment('images/outfits/male/winter/sport/1.jpg', 'Sport.jpg'); 
                                }
                            }
                        }
                    }

               

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
        }
    }


?>