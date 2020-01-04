<?php

    $msg = '';
    $msgClass = '';
    //check for the submit
    if(filter_has_var(INPUT_POST, 'submit')){
        //get the names of form data
        $name = htmlspecialchars($_POST['name']) ;
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //check required fields
        if(!empty($name) && !empty($email) && !empty($message) ){
            //PASSED
            //Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //fail
                $msg = 'Please enter a valid email';
                $msgClass = 'alert-danger';
            }else{
                //pass
                //recepient email
                $toEmail = 'xalaindimabuyo@gmail.com';
                $subject = 'Contact Request From' . $name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4> <p>' . $name . '</p>
                        <h4>Email</h4> <p>' . $email . '</p>
                        <h4>Message></h4> <p>' . $message . '</p>'; 
                
                //Email Headers
                $headers = 'MIME-Version: 1.0' . "/r/n";
                $headers .= "Content-Type:text/html;charset=UTF=8" . "/r/n";

                //Additional Headers
                $headers .= "From:" . $name . "<" . $email . ">" . "/r/n";

                if(mail($toEmail , $subject, $body , $headers)){
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                }else{
                    $msg = 'Error';
                    $msgClass = 'alert-danger';
                }
            }


        }else{
            //FAILED
            $msg = 'Please fill in fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contact US</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
        <div clas="navbar-header">
            <a class="navbar-brand" href="index.php">Webiste</a>
        </div>
        </div>
    </nav>

    <div class="container">
        <?php if($message != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label >Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label >Message</label>
                <textarea name="message" class="form-control" <?php echo isset($_POST['message']) ? $message : ''; ?>></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>