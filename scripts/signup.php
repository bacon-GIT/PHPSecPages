<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include_once('config.php');

// Check if submit is not empty
if(isset($_POST['but_submit'])){

    // Encryption Settings
    $cypherMethod = 'AES-256-CBC';
    // Static Seed for debugging purposes
    $key = 32;
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cypherMethod));

    // Escape strings submitted
    $uname = openssl_encrypt($_POST['username'], $cypherMethod, $key, $options=0, $iv);
    $password = openssl_encrypt($_POST['password'], $cypherMethod, $key, $options=0, $iv);

    // Check to ensure strings have values
    if ($uname != "" && $password != ""){

        $sql = "INSERT INTO users (username, password) VALUES (?,?)";
        $stmt= $con->prepare($sql);
        $stmt->bind_param("ss", $uname, $password);
        $stmt->execute();

        // Lame success message, absolutely no soul here
        echo "User Created";

        $stmt->close();
        $con->close();
        }
}
?>

