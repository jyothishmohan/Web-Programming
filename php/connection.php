<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected";
}


$sql = "DROP TABLE IF EXISTS MyGuests";
$conn->query($sql);

$sql = "CREATE TABLE MyGuests(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests Created Successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$ins = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Jyothish', 'A', 'abc@gmail.com')";
if ($conn->query($ins) === TRUE) {
    echo "Values inserted successfully";
} else {
    echo "Error inserting values: " . $conn->error;
}

$conn->close();
?>
