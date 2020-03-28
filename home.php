<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include_once('scripts/logCheck.php');

if(array_key_exists('logout', $_POST)) {
            logout();
}
function logout() {
    session_destroy();
}
?>

<HTML>
<head>
    <title>Tests</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<header>
    <h1>Attack This Page</h1><hr />
    <nav>
        <p><a href="index.php">Other Attack Page</a></p><br />
        <p><a href="sign.php">Create New Users</a></p><br />
    </nav>
</header>

<!--Tests for Server Info-->
<h2>Logged In</h2>

<div class="logout">
    <form method="POST">
        <input type="submit" name="logout"
        class="button" value="logout" />
    </form>
</div>

<div class="footer">
    <?php echo "PHP Good";?>
</div>

</body>
</HTML>