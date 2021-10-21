<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link PHP to SQL</title>
</head>

<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "myDB_test";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    //create database
    // $sql = "CREATE DATABASE myDB_test";
    // if($conn->query($sql) === TRUE) {
    //     echo "Database created successfully";
    // } else {
    //     echo "Error creating database: ". $conn->error;
    // }

    //sql to create table
    // $sql = "CREATE TABLE MyGuests (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //     )";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Table MyGuests created successfully";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }

    //sql to insert data
    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John','Doe', 'john@example.com')";
    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: ". $sql . "<br>" . $conn->error;
    // }

    //sql to SELECT data
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data for each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
            echo "Registration Date - ". $row['reg_date'];
        }
    } else {
        echo "No results";
    }

    $conn->close();
    ?>
</body>

</html>