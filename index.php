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

<div class="Login">
    <form action="/~sftpuser/scripts/action.php" method="post">
    <label for="username">Username</label>
    <input type="Text" name="username" id="username" required><br />
    <label for="password">Password</label>
    <input type="Text" name="password" id="password" required>
    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
</div>

<!--Tests for Server Info-->
<div class="footer">
    <?php echo "PHP Good";?>
</div>

</body>
</HTML>