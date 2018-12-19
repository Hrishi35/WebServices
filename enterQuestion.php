<?php
$servername = "localhost";
$database = "id8258200_question";
$username = "id8258200_qmine";
$password = "qwerty123";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
$question = $_POST['question'];
$marks = $_POST['marks'];
$difficulty = $_POST['difficulty'];
$sql = "INSERT INTO questions (qno,question,marks,difficulty) VALUES (NULL,'$question','$marks','$difficulty')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>