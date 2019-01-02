<?php
$servername = "localhost";
$database = "id8258200_question";
$username = "id8258200_qmine";
$password = "qwerty123";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM questions;";
$result = mysqli_query($conn, $query);
$number_of_rows = mysqli_num_rows($result);

$temp_array = array();
if ($number_of_rows>0) {
	while ($row=mysqli_fetch_assoc($result)) {
		$temp_array[] = $row;
		
	}
}
header('Content-Type: application/json');
echo json_encode(array("questions"=>$temp_array));
mysqli_close($conn);