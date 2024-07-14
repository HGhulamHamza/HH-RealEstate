<?php
// Assuming you have already established a database connection
$server_name = "localhost";
$password = "";
$username = "root";
$database_name = "hh_realestate"; 

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    //now check the connection
    if(!$conn)
    {
        die("Connection Failed:" . mysqli_connect_error());
    
    }
    
    if(isset($_POST['save']))
    {	
         
        
        $date= $_POST["date"];
        $time = $_POST["time"];
        $amount = $_POST["amount"];
        
         $sql_query = "INSERT INTO investment(idate,itime,amount)
         VALUES ('$date','$time','$amount')";
    
         if (mysqli_query($conn, $sql_query)) 
         {
            echo "New Details Entry inserted successfully !";
         } 
         else
         {
            echo "Error: " . $sql . "" . mysqli_error($conn);
         }
         mysqli_close($conn);
    }
    ?>