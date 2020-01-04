
<?php

//VALIDATION SANITATION
    //Check for posted data
    if(filter_has_var(INPUT_POST, 'data')){
        // echo 'Data Found';
    }else{
        // echo 'No Data';
    }
    //email validation
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        //Remove illegal characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // echo $email. '<br>';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // echo 'Email is Valid';
        }else{
            // echo 'Email is not valid';
        }
        // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        //     echo 'Email is Valid';
        // }else{
        //     echo 'Email is not valid';
        // }
    }
    //validate is to check
    #FILTER VALIDATE BOOLEAN
    #FILTER VALIDATE EMAIL
    #FILTER VALIDATE FLOAT
    #FILTER VALIDATE INT
    #FILTER VALIDATE IP
    #FILTER VALIDATE REGEXP
    #FILTER VALIDATE URL

    //sanitize is to remove
    #FILTER SANITIZE EMAIL
    #FILTER SANITIZE ENCODED
    #FILTER SANITIZE NUMBER FLOAT
    #FILTER SANITIZE NUMBER INT
    #FILTER SANITIZE SPECIAL CHARS
    #FILTER SANITIZE STRING
    #FILTER SANITIZE URL

    //validate int
    $var = 23;

    if(filter_var($var, FILTER_VALIDATE_INT)){
        // echo $var . 'is a number';
    }else{
        // echo $var . 'is not a number';
    }
    //sanitize int
    $var2 = 'asd23reffgf342';

    // var_dump(filter_var($var2, FILTER_SANITIZE_NUMBER_INT));


    //filter array
    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
            );
    // print_r(filter_input_array(INPUT_POST, $filters))
    $arr = array(
        "name" => 'alain dimabuyo',
        "age" => '20',
        "email" => "test@yahoo.com"
    );

    $filter2 = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min" => 1,
                "max" => 50
            )
            ),
        "email" => FILTER_VALIDATE_EMAIL
        );
    print_r(filter_var_array($arr, $filter2))

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit"> Submit </button>
</form>