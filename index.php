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
    include "action.php";
    ?>

    <form action="action.php" method="get">
        <label for="">Enter your name here</label>
        <input type="text" name="fname">
        <input type="submit" name="submit">



    </form>


</body>

</html>