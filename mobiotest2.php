<?php

$result = solution("Lorem Ipsum is simply dummy text of the printing and typesetting industry ", 5);

echo '<pre>';
print_r($result);

function solution($str, $x)
{
    $output = explode(" ", $str);
    $j=0;
    for ($i=0;$i<$x;$i++) {
        if (($j+2)==11) {
            $result[] .= $output[$j].' '.$output[$j+1];
            $j=$j+2;
        } else {
            $result[] .= $output[$j].' '.$output[$j+1].' '.$output[$j+2];
            $j=$j+3;
        }
    }

   return $result;
}
