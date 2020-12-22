<?php

$servername = "localhost:3308";
$username = "root";
$password = "root";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO myguests (Name,City,Number,Email,Feedback)
VALUES ('".$_POST["Name"]."','".$_POST["City"]."','".$_POST["Number"]."','".$_POST["Email"]."','".$_POST["Feedback"]."')";

if ($conn->query($sql) === TRUE) {

	header("Location:http://localhost:81");
}
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>