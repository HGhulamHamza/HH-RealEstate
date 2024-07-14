<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "hh_realestate"; 

// Create connection
$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    $sql_query = "INSERT INTO `contact-details` (`bname`, `bemail`, `bphone`, `bmessage`)
    VALUES ('$name', '$email', '$phone', '$message')";
    
    if (mysqli_query($conn, $sql_query)) {
        echo "New Details Entry inserted successfully!";
    } else {
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
