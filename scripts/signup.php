<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$servername = "localhost";
$username_db = "root";
$password_db = "root";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

