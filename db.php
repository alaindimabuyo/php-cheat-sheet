<?php 
    //CREATE CONNECTION
    $conn = mysqli_connect('localhost', 'root', 'alainquanta', 'phpblog');


    //Check Connection 
    if(mysql_connect_errno()){
        //Connection Failed
        echo 'Failed to connect to Mysql' . mysql_connect_errno();
    }


?>