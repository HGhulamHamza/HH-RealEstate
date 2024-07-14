<?php
// Database connection details
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "hh_realestate"; 

// Establish the database connection
$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['save'])) {
    // Retrieve form data
   
    $experience = $_POST["experience"];
    $tel = $_POST["tel"];
    $commission = $_POST["commission"];
    $email = $_POST['email'];
    
    // Prepare the SQL query
    $sql_query = "INSERT INTO realestateagent(tel_no,comm_per,experience) 
    VALUES ('$tel','$commission','$experience')";
    
    // Execute the query
    if (mysqli_query($conn, $sql_query)) {
        echo "New details entry inserted successfully!";
    } else {
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
