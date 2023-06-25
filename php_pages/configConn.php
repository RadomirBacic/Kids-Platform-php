<?php 

    $host = "localhost";
    $username = "root";
    $password = "root";
    $db = "EU_Kids";

    $conn = new mysqli($host,$username,$password,$db);

    if ($conn === false) {
      //  die("Connection error");
    }else{
       // echo "Connection successfully";
    }

?>