<?php
include_once('scripts/logCheck.php');
include_once('scripts/config.php');
ini_set('display_errors',1);
error_reporting(E_ALL);

// TODO: Rewrite as a class so I can easily include header variables
// include "config.php";

// Check if submit is not empt
if(isset($_POST['but_submit'])){

    // Escape strings submitted
    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    // Check to ensure strings have values
    if ($uname != "" && $password != ""){

        $stmt = $conn->prepare("INSERT INTO users (username, password)
        VALUES (?, ?)");


        // set parameters and execute
        $en_f = strval($uname);
        $en_p = sha1("$password");
        $stmt->bind_param("ss", $en_f, $en_p);
        $stmt->execute();


        echo "User Created";

        $stmt->close();
        $conn->close();
        }
}
?>

