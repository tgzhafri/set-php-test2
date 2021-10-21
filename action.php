<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>action.php</title>
</head>

<body>
    <?php
    //to link the database
    include "db.sql.php";

    $name = $_GET['fname'];

    if (isset($name)) {
        insertName();
    } else {
        echo 'No name inserted';
    }

    function insertName () {
        global $name;
        global $conn;
        $sql = "INSERT INTO training (name)
        VALUES('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }

    // $sql = "INSERT INTO training (name)
    //     VALUES('$name')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully ";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // to Show all data
    $sql = "SELECT id, name, created_date FROM training";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data for each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["name"]. " Date created - ". $row['created_date']. "<br>";
        }
    } else {
        echo "No results";
    }

    $conn->close();


    ?>

</body>

</html>