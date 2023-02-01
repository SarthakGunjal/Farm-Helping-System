<?php

    
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "getdata";
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
 
$ID=$_POST['ID'];
$Name=$_POST['Name'];
$land=$_POST['land'];
$month=$_POST['month'];
$money=$_POST['money'];
$income=$_POST['income'];
$profit=$_POST['profit'];
$fertilizer=$_POST['fertilizer'];
$organic=$_POST['organic'];
$information=$_POST['information'];

$sql = "INSERT INTO  user(ID,Name,land,month,money,income,profit,fertilizer,organic,information) VALUES ('$ID','$Name','$land','$month','$money','$income','$profit','$fertilizer','$organic','$information' )";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}
// alert("Data Entered Succefully");
header("Location: index.php");

mysqli_close($conn);


?>
<br>

