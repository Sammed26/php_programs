<?php

    function sumarr($arr)
    {
        $sum = 0;

        foreach($arr as $element)
        {
            $sum += $element;
        }

        return $sum;
    }

    $marks = array(1, 2, 3, 4, 5);

    $total_marks = sumarr($marks);

    print "total marks are " . $total_marks;

?>