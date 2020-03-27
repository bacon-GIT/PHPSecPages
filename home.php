<?php
include_once('scripts/logCheck.php');
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
        <p><a href="main.php">Other Attack Page</a></p><br />
    </nav>
</header>

<p>Test Good</p>
<!--Tests for Server Info-->
<h1>Logged In</h1>
<div class="footer">
    <?php echo "PHP Good";?>
</div>

</body>
</HTML>