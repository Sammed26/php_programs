<?php

echo "This is multidimensional arrays";

$mul_arr = array(
                array(
                    array(21, 22, 23, 24),
                    array(11, 12, 13,14)
                ),
                array(
                    array(26, 54, 7, 84, 54),
                    array(98, 65, 35,12)
                ),
                array(
                    array(41, 42, 43, 44),
                    array(51, 52, 53,54)
                )
            );

echo "<br>";

for($i = 0; $i < count($mul_arr); $i++)
{
    for($j = 0; $j < count($mul_arr[$i]); $j++)
    {
        for($k = 0; $k < count($mul_arr[$i][$j]); $k++)
        {
            echo $mul_arr[$i][$j][$k];
            echo " ";
        }
        echo "<br>";
    }
    echo "<br>";
}

?>