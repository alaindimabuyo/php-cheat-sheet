<?php
    $user = ['name' => 'Alain', 'email' => 'xalaindimabuyo@gmail.com', 'age'=> 20];

    //accept array of objects to save it to cookie
    $user = serialize($user);

    setcookie('user', $user, time() + 3600);

    $user = unserialize($_COOKIE['user']);

    echo $user['name'] . $user['email']
 ?>