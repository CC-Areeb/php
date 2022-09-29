<?php 
    $title = 'Variables and Constants';

    $number = 100;
    $string = 'This is a string';

    echo $number .'<br>'. $string;

    define('CONSTANT', 'this is how we define a constant ---->');
    echo '&nbsp' . CONSTANT . "define ('NAME_OF_CONSTANT_IN_BLOCK_LETTERS', 'the value of this constant') -----> this cannot be overriden";
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
        <?php echo $title; ?>
    </h1>   
</body>
</html>