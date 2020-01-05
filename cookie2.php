<?php 
    // delete cookie
    // setcookie('username', 'Frank', time() - 3600);
    
    if(count($_COOKIE) > 0){
        echo 'There are' . count($_COOKIE). 'cookies saved <br>';
    }else{
        echo 'There are no cookies saved';
    }

    if(isset($_COOKIE['username'])){
        echo 'User '. $_COOKIE['username']. ' is set up correctly';
    }

?>