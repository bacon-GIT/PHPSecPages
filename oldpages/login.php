<HTML>
 <head>
  <title> Login Page </title>
 </head>
 <body>
  Sign In</br></br>
  <form name="login" id="login" method="post" action="login.php">
   <table>
   <tr><td>Username</td><td>:-</td><td><input type="text" name="uname" ></td></tr>
   <tr><td>Password</td><td>:-</td><td><input type="password" name="pwd"></td></tr>
   <tr><td><input type="submit" name="sbutton" value="LOGIN"></td></tr>
   </table>
  </form>
 </body>


</html>

<?php
	// Database connection

	$server = "localhost";
	$username = "root";
	$password = "1111";
	$dbname = "PT_login";

	// Create Connection
	$conn = new mysqli($server, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM login";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Username: " . $row["username"]. " - password (unhashed): " . $row["password"]. " " . $row["id"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();

	//$result = $mysqli->query("SELECT * FROM login");
	
?>