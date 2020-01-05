<?php

    $people[] = 'Alain';
    $people[] = 'Braum';
    $people[] = 'Cass';
    $people[] = 'Deidara';
    $people[] = 'Elementor';
    $people[] = 'Fakuna';
    $people[] = 'Growlithe';
    $people[] = 'Hello';
    $people[] = 'Igloo';
    $people[] = 'Jump';
    $people[] = 'Kali';
    $people[] = 'Libra';
    $people[] = 'Mango';
    $people[] = 'Nice';
    $people[] = 'Ophra';
    $people[] = 'Peso';
    $people[] = 'Quadra';
    $people[] = 'Rector';
    $people[] = 'Sauna';
    $people[] = 'Talon';
    $people[] = 'Ursula';
    $people[] = 'Victor';
    $people[] = 'Winner';
    $people[] = 'Xyra';
    $people[] = 'Yen';


    //Get Query String

    $q = $_REQUEST['q'];

    $suggestion = '';

    //Get Suggestions
    if($q !== ""){
        $q = strtoupper($q);
        $len = strlen($q);

        foreach($people as $person){
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion === ''){
                    $suggestion = $person;
                }else {
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>