<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
function encrypt() {
 // Encryption Settings
    $cypherMethod = 'AES-256-CBC';
    // Static Seed for debugging purposes
    $key = 32;
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cypherMethod));
    // Escape strings submitted
    $uname = openssl_encrypt('String', $cypherMethod, $key, $options=0, $iv);
    $uname_dec = openssl_decrypt($uname, $cypherMethod, $key, $options=0, $iv);
    return $uname;
}
echo encrypt();
?>
<HTML>
    <head>
        <title>Tests</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
<body>
<h1>Tests</h1>


</body>
<h1>