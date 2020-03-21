<?php
	// Database connection
    // Just debugging, good luck getting my data
	$server = "localhost";
	$username = "root";
	$password = "1111";
	$dbname = "PT_login";

echo "Test 1";

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

	//echo $result;

echo "Test 2";
?>