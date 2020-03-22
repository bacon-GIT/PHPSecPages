<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include "config.php";

// Check if submit is not empty
if(isset($_POST['but_submit'])){

    // Escape strings submitted
    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    // Check to ensure strings have values
    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: ../home.php');
        }else{
            echo "Invalid username and password";
        }

    }

}