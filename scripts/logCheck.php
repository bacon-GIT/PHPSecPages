<?php
// Holy Error Checking, praise these 2 lines
ini_set('display_errors',1);
error_reporting(E_ALL);

// For variables $_SESSION and uname
include('scripts/action.php');
include('scripts/config.php');

// Checks for index errors and no session
if(isset($_SESSION['uname'])) {
        echo "Welcome '" . $_SESSION['uname'] . "'";
    }else{
        echo "User not logged in";
        header('Location: index.php');
}
?>