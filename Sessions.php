<?php 
    if(isset($_POST['submit'])){
        //catch the values and put in it the session variables
        session_start();

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name" placeholder="Enter Name"> <br>
        <input type="text" name="email" placeholder="Enter Email"> <br>
        <input type="submit" name="submit" placeholder="Submit Form"> <br>
    </form>
</body>
</html>