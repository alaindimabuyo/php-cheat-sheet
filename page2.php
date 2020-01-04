<?php 
    session_start();
    
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP SESSIONS</title>
</head>
<body>
    <h5>Thank you <?php echo $name ?>!, You have succussfully subscribed as <?php echo $email?></h5>

    <a href="page3.php">Go to Page 3</a>
</body>
</html>