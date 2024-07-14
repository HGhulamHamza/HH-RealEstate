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
   
    $noroom = $_POST["no_rooms"];
    $nofloor = $_POST["no_floors"];
    $area = $_POST["area"];
    $facs = $_POST['facs_avail'];
    
    // Prepare the SQL query
    $sql_query = "INSERT INTO features (no_rooms, no_floors, area, facs_avail) 
    VALUES ('$noroom', '$nofloor', '$area', '$facs')";;
    
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
