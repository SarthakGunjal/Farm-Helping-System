<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "ragistration";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' AND pname='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['name'] . "<br/>";
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);
?>




























// $email=$_POST['e'];
// $password=$_POST['password'];
 
// $sql="select * from user where email=$email and pname=$password";
// $result = mysqli_query($db,$sql);
//       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//       $active = $row['active'];
      
//       $count = mysqli_num_rows($result);
      
//       // If result matched $myusername and $mypassword, table row must be 1 row
		
//       if($count == 1) {
//          session_register("myusername");
//          $_SESSION['login_user'] = $myusername;
         
//          header("location: welcome.php");
//       }else {
//          $error = "Your Login Name or Password is invalid";
//       }



















// $sql->bind_param("s",$email);
// $sql->execute();
// $sql_result= $sql_get->result();

// if($sql_result->num_rows>0){
//     $data =$sql_result->fetch_assoc();
//     if($data['pname']===$password)
//     echo"Login Succesfully";
//     else{
         
//          echo"<h2>Invalid Email Or Passward</h2>";
//     }
// }
// else{
//     echo"<h2>Invalid Email Or Passward</h2>";
// }
//   header("Location: index.php?error=User Name is required");


mysqli_close($conn);


?>