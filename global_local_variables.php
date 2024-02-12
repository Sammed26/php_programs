<?php

echo "this is global and local variables<br>";

$a = 26;

echo "this is printed outside function $a<br>";

function print_value()
{
    global $a;
    echo "this is inside function $a<br>";

    $a = 30;  // global variables can be changed here also and that change reflects
}

print_value();

echo "$a<br>";

?>