<?php
$servername = "localhost";
$database = "id8258200_image";
$username = "id8258200_qmine1";
$password = "qwerty123";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
$question = $_POST['question'];
$marks = $_POST['marks'];
$difficulty = $_POST['difficulty'];
$image=$_POST['image'];
$sql = "INSERT INTO photos (question,marks,difficulty,image) VALUES ('$question','$marks','$difficulty','$image')";
if (mysqli_query($conn, $sql)) {
   echo "Success";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>