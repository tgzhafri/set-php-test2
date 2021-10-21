<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "companyA";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}


// sql to insert data into database
$name = $_GET['name'];
$dob = $_GET['dob'];
$age = $_GET['age'];
$username = $_GET['username'];
$password = $_GET['password'];
$salary = $_GET['salary'];
$bonus = $_GET['bonus'];
$leave_days = $_GET['leave_days'];
$leave_proof = $_GET['leave_proof'];
$mc = $_GET['mc'];
$mc_proof = $_GET['mc_proof'];
$claim = $_GET['claim'];
$claim_proof = $_GET['claim_proof'];

if (isset($name)) {
    insertName();
} else {
    echo 'No name inserted';
}
if (isset($dob)) {
    insertName();
} else {
    echo 'No date of birth inserted';
}
if (isset($username)) {
    insertName();
} else {
    echo 'No username inserted';
}
if (isset($password)) {
    insertName();
} else {
    echo 'No password inserted';
}

function insertName()
{
    global $name;
    global $conn;
    global $dob;
    global $age;
    global $username;
    global $password;
    global $salary;
    global $bonus;
    global $leave_days;
    global $leave_proof;
    global $mc;
    global $mc_proof;
    global $claim;
    global $claim_proof;

    $sql = "INSERT INTO user (name) VALUES('$username')";
    $sql = "INSERT INTO user (password) VALUES('$password')";

    $sql = "INSERT INTO user_details (name) VALUES('$name')";
    $sql = "INSERT INTO user_details (dob) VALUES('$dob')";
    $sql = "INSERT INTO user_details (age) VALUES('$age')";

    $sql = "INSERT INTO reimbursements (salary) VALUES('$salary')";
    $sql = "INSERT INTO reimbursements (bonus) VALUES('$bonus')";

    $sql = "INSERT INTO benefits (leave_days) VALUES('$leave_days')";
    $sql = "INSERT INTO benefits (leave_proof) VALUES('$leave_proof')";
    $sql = "INSERT INTO benefits (mc) VALUES('$mc')";
    $sql = "INSERT INTO benefits (mc_proof) VALUES('$mc_proof')";
    $sql = "INSERT INTO benefits (claim) VALUES('$claim_proof')";
    $sql = "INSERT INTO benefits (claim_proof) VALUES('$claim_proof')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



//sql to SELECT data
$sql = "SELECT user_id, name, dob FROM user_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data for each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        echo "Registration Date - " . $row['reg_date'];
    }
} else {
    echo "No results";
}

$conn->close();
