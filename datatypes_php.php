<?php

    // string
    $name = "sammed";
    echo $name;
    echo "<br>";
    $name = 'sk';  // over written
    echo $name;
    echo "<br>";


    // int
    $val = 26;
    echo $val;
    echo "<br>";

    // float 
    $decimal_val = 26.26;
    echo $decimal_val;
    echo "<br>";

    // boolean
    $first = true;
    echo $first;
    echo "<br>";
    $second = false;
    echo $second;      // this prints empty space so we can't notice it 
    echo var_dump($second);  // var_dump used to resolve problem of empty printing. var_dump prints which type of variable it is and outputs
    echo "<br>";

    //array
    $numbers = array(1, 2, 3, 4, 5);
    // echo $numbers;  // giving error
    echo $numbers[1];
    echo "<br>";
    echo $numbers[2];
    echo "<br>";

    // NULL
    $null_var = NULL;
    echo var_dump($null_var);    // var_dump() prints which type of variable it is
    echo "<br>";

?>
