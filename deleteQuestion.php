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

$qno=$_POST['qno'];
$sql = "DELETE FROM questions WHERE qno = $qno;";
$result = mysqli_query($conn,$sql);

if(! $result ) {
               die('Could not delete data: ' . mysqli_error());
            }
            else{
echo "Deleted data successfully\n";
}

?>