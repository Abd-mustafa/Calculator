<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calculator_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Calculate and store in the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST["expression"];
    $result = eval("return $expression;");

    $sql = "INSERT INTO calculations (expression, result) VALUES ('$expression', $result)";

    if ($conn->query($sql) === TRUE) {
        echo "Calculation successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>