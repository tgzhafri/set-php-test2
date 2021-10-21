<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <?
    include "question2.php";
    ?>

    <form action="question2.php" method="get">
        <label for="">Enter your name here</label>
        <input type="text" name="name">
        <br>
        <label for="">Date of birth</label>
        <input type="date" name="dob">
        <br>
        <label for="">Age</label>
        <input type="text" name="age">
        <br>
        <label for="">Username</label>
        <input type="text" name="username">
        <br>
        <label for="">Password</label>
        <input type="text" name="password">
        <br>
        <label for="">Salary</label>
        <input type="text" name="salary">
        <br>
        <label for="">Bonus</label>
        <input type="text" name="bonus">
        <br>
        <label for="">Leave Days</label>
        <input type="text" name="leave_days">
        <br>
        <label for="">Leave Days Proof</label>
        <input type="text" name="leave_proof">
        <br>
        <label for="">MC</label>
        <input type="text" name="mc">
        <br>
        <label for="">MC Proof</label>
        <input type="text" name="mc_proof">
        <br>
        <label for="">Claims</label>
        <input type="text" name="claim">
        <br>
        <label for="">Claims Proof</label>
        <input type="text" name="claim_proof">
        <br>

        <input type="submit" name="submit">



    </form>


</body>

</html>