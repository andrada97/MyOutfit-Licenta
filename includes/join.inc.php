<?php

if(isset($_POST['submit'])){
    include_once 'db.inc.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    //Error handlers
    //Check for empty fields

    if(empty($email) || empty($fname) || empty($lname) || empty($city) || empty($gender)){
        header("Location: ../templates/joinpages/join-empty.php?join=empty");
        exit();
    }
    else{
        //Check if input is correct
        if(!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)){
            header("Location: ../templates/joinpages/join-invalid.php?join=invalid");
            exit();
        }
        else{
            //Daca email-ul este valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../templates/joinpages/join-eInvalid.php?join=invalidEmail");
                exit();
            }
            else{
                //Verific daca email-ul exista deja
                $sql = "SELECT * FROM abonati WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    header("Location: ../templates/joinpages/join-eExist.php?join=emailExistent");
                    exit();
                }
                
                else{
                    $sql = "INSERT INTO abonati (fname, lname, email, gender, city) VALUES ('$fname', '$lname', '$email', '$gender', '$city');";
                    $result = mysqli_query($conn, $sql);
                    header("Location: ../templates/joinpages/join-success.php?join=successJoin");
                    exit();
                }
            }
        }
    }

}
else{
    header("Location: ../templates/join.php");
}
?>