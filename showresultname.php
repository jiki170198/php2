<?php
	$servername = "localhost";
	$username = "root";
	$password = "jiki170198";
	$dbname = "da";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$name=$_REQUEST['name'];
	$sql = "SELECT id, name, age FROM student WHERE name='$name'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "id: " . $row["id"]. " - name: " . $row["name"]. " age " . $row["age"]. "<br>";
	  }
	} else {
	  echo "0 results";
	}
	$conn->close();

?>