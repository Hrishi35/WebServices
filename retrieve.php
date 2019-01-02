<?php
$servername = "localhost";
$database = "id8258200_image";
$username = "id8258200_qmine1";
$password = "qwerty123";


$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

  $sql = "SELECT * FROM photos";



    $r = mysqli_query($conn,$sql);

    $result = array(); 

    while($row = mysqli_fetch_array($r)){
        array_push($result,array(
        'id'=>$row['id'],
        'question'=>$row['question'],
        'marks'=>$row['marks'],
        'difficulty'=>$row['difficulty'],
        'url'=>$row['image']
        ));
    }

    echo json_encode(array('images'=>$result),JSON_UNESCAPED_SLASHES);

    mysqli_close($conn);