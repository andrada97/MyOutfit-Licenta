<?php
// Conectarea la baza de date abonati

    $dbServername = "localhost:3308";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "join";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
