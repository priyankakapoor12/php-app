<?php
$conn = new mysqli("my-db.cozka4i8kv1n.us-east-1.rds.amazonaws.com", "admin", "priyanka", "mydb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM users");

while($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}
?>
