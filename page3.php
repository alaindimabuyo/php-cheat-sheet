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
    <title>Session</title>
</head>
<body>
    <H1>Hello <?php echo $name?> Welcome to page 3 </H1>
</body>
</html>