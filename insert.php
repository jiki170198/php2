<?php
	//echo '<pre>';
	//print_r($_POST);
	//echo '</pre>';
	//echo $_POST['id'];
	//echo $_POST['name'];
	//echo $_POST['age'];

	//insert
	if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['age'])) {
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
		$id=$_REQUEST['id'];
		$name=$_REQUEST['name'];
		$age=$_REQUEST['age'];
		$sql = "INSERT INTO student (id, name, age)
		VALUES ('$id','$name','$age')";
		
		if ($conn->query($sql) == TRUE) {
		  echo "inserted";

		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		$conn->close();
	}

?>