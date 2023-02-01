
<?php
    
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "getdata";
    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
 ?>

<table class="table" border="1">
        <thead>
            <tr>
            <!-- <th scope="col">Sr_No</th> -->
                <th scope="col">Crope_Name</th>
                <th scope="col">Land</th>
                <th scope="col">Months</th>
                <th scope="col">Money Required</th>
                    <th scope="col">Income</th>
                        <th scope="col">Profit</th>
                        <th scope="col">Fertilizer</th>
                        <th scope="col">Organic</th>
                        <th scope="col">Information</th>
                <!-- <th>Edit data</th>
                <th>Delete data</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            
            $query = "SELECT * FROM user where Name='Maize' or Name='maize';";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                   
                        <td><?php echo $row['Name'] ?></td>
                        <td><?php echo $row['land'] ?></td>
                        <td><?php echo $row['month'] ?></td>
                    
                        <td><?php echo $row['money'] ?></td>
                        <td><?php echo $row['income'] ?></td>
                        <td><?php echo $row['profit'] ?></td>
                        <td><?php echo $row['fertilizer'] ?></td>
                        <td><?php echo $row['organic'] ?></td>
                        <td><?php echo $row['information'] ?></td>
                        <!-- <td><?php echo $row[''] ?></td> -->
                        <!-- <td><a href="edit.php?Sr_No=<?php echo $row['Sr_No']?>"><i style="color: green;" class="fa fa-edit"></i></a></button></td>
                       <td><a href="delete.php?Sr_No=<?php echo $row['Sr_No']?>" ><i style="color: red;" class="fa fa-trash"></i></a></button></td> -->
                       
                        
                    </tr>
            <?php
          
                }
            } else {
                echo "Not Found data";
            }

        
            ?>
            </tr>
        </tbody>
    </table>