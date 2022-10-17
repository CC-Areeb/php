<?php
    // basic string and integer
    $title = 'This is a string';
    $number = 100;

    // defining a constant with the define keyword
    define('NAME', 'My name is PHP');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My basics</title>
</head>
<body>
    <h1>
        Strings and Variables
    </h1>   
    <?php echo $title;?>
    <br>

    this is a number >>>>
    <?php echo $number;?>
    <br><br>

    <p>
        We can also define a certain data type that we do not want to be changed and remain as it is.<br><br>
        We can do this by using a constant type of data and to use this we need to use the "define()" keyword.<br><br>
        The "define()" is function as we can tell by the paranthesis and this takes in 2 parameters or arguments.<br><br>
        The first argument is the name of the constant and better do it in all block letters or capital letters <br><br>
        and the next parameter is the actual value that you want to store inside the constant.<br><br>
        The block letters makes it easy to recognise that it is a constant.<br><br>
    </p>

    <h1>Constant</h1>

    <p>
        <?php echo NAME; ?>
    </p>
</body>
</html>