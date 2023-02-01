<?php
    
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "contact";
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
 
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$sql = "INSERT INTO  user(name,email,phone) VALUES ('$name','$email','$phone' )";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}
echo"Submitted";

mysqli_close($conn);


?>
<br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<a class="btn btn-primary" href="index.php" role="button">Home</a>
