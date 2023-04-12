<?php
header("Access-Control-Allow-Origin: *");
header("add_header 'Access-Control-Allow-Headers' '*';");
header("add_header 'Access-Control-Allow-Methods' 'GET, POST, PUT, DELETE, OPTIONS';");
header("Content-Type: application/json; charset=UTF-8");
$servername = "https://databases.000webhost.com/";
$username = "id20577873_admin";
$password = "etalbemahmoud0@M";
$dbname = "id20577873_national";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select data from table
$sql = "SELECT id, name,code FROM mytable";
$result = $conn->query($sql);

// Create array to store data
$data = array();

if ($result->num_rows > 0) {
    // Loop through data and add to array
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return data as JSON
echo json_encode($data);

// Close connection
$conn->close();
?>