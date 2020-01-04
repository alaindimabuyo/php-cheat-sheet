<?php
    // if(isset($_GET['name'])){
    //     echo htmlentities($_GET['name']);
    // }

    #PHP TO JS Equivalent
    // ------------------
    #substr = slice
    #returns a proportion of a string

    $output = substr('Hello', 1,4);


    #strlen  = .length
    #return the lengths of a string including the space
    $output2 = strlen('Alain');
    
    #strpos 
    #find the first occurence of a sub string and its case sensitive
    $output3 = strpos('Alain Dimabuyo', 'D');
    
    #strrpos
    #find the last occurence of a sub string
    $output4 = strrpos('Alain Dimabuyo', 'a');
   

    #trim = split
    #strips whitespace - usefull in forms
    $text = 'Hello World     !';
    
    $textTrimmed = trim($text);
   

    #strtoupper = toUppeCase
    #make everything string to uppercase
    $output5 = strtoupper('alain dimabuyo');

    #strtolower = toLowerCase
    #make string to lowercase
    $output6 = strtolower('ALAIN dimabuyo');

    #ucwords
    #capitalize every first letter of each word
    $output7 = ucwords('alain dimabuyo');
        
    #str_replace = takes two parameters (word to be replaced, word to replace);
    $output8 = str_replace('World', 'alain', $text);

    #is_string = typeOF 
    #check if value is String
    $output9 = is_string($text);
   

    $output10 = array(10 , '10' , 10.5, '10.5');

    foreach($output10 as $val){
        if(is_string($val)){
            // echo "{$val} is a fucking string <br>";
        }
    }

    #PHP  TERNARY OPERATION IS THE SAME IN JS
    $age = 20;
    $score = 15;
    #NESTED Ternary operations
    echo 'Your score is:' .($score > 10 ? ($age > 10 ? "GOod" : "Best") : ($age > 10 ? "Bad" : "Worst"));

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 10</title>
</head>
<body>
    <form method="GET" action="index.php">
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
    <label for="">Email</label>
    <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
    </form>
</body>
</html>