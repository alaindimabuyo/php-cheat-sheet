<?php 
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time() + 3600);

        header('Location: cookie3.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
        <input type="text" name="username" placeholder='Enter Username'>
        <input type="submit" name="submit" value='submit'>
    </form>
</body>
</html>