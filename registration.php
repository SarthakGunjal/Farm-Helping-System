<?php
    
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "ragistration";
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
    
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$number=$_POST['number'];
$email=$_POST['email'];
$pname=$_POST['pname'];
$sql = "INSERT INTO  user (number,fname, lname, email,pname) VALUES ('$number','$fname', '$lname',' $email','$pname' )";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
    // alert
}
echo"Registration succesful";
header("Location: log.php");
mysqli_close($conn);

?>
