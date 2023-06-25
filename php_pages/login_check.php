<?php 

    error_reporting(0);
    session_start();
    include 'configConn.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = $_GET['username'];
        $password = $_GET['password'];

        $sql = "SELECT * FROM Users WHERE username = '".$username."' AND password = '".$password."' ";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
     
        echo $row["UserType"] ." == ". "admin";
        if ($row["UserType"] == "admin") {
           $_SESSION['username'] = $username;
           $_SESSION['UserType'] = "admin";
           header("location:adminDashboard.php");
        }elseif($row["UserType"] == "user"){
            $_SESSION['username'] = $username;
            $_SESSION['UserType'] = "user";
            header("location:userDashboard.php");
        }else{
            $message = "Username or Password do not match";

            $_SESSION['loginMessage'] = $message;

            header("location:login.php");
        }
    }

?>