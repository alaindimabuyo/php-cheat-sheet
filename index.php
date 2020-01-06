<?php
    require('db.php');

    $query = 'SELECT * FROM posts';

    //GET RESULT
    $result = mysqli_query($conn, $query);

    //FETCH DATA
    $posts = mysql_fetch_all($result, MYSQLI_ASSOC);
    var_dump($posts);
    //Free Result
    mysqli_free_result($result);

    //Close COnnection
    mysqli_close($conn);

