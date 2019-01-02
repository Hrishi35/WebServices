<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
$servername = "localhost";
$database = "id8258200_image";
$username = "id8258200_qmine1";
$password = "qwerty123";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }

 if (isset($_FILES["uploaded_file"]["name"])) {

$name = $_FILES["uploaded_file"]["name"];
$tmp_name = $_FILES['uploaded_file']['tmp_name'];
$error = $_FILES['uploaded_file']['error'];

if (!empty($name)) {
    $location = './image/';

 if ( ! is_dir($location)) {
 mkdir($location);
 }

    if  (move_uploaded_file($tmp_name, $location.$name)){
        echo 'Uploaded';
       
    }

} else {
    echo 'please choose a file';
}
}
else{
     echo "File not selected";
}
 ?>