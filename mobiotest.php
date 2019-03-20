<?php
$result = solution("Lorem Ipsum is simply dummy text of the printing and typesetting industry ", 18);

echo '<pre>';
print_r($result);

function solution($str, $x)
{
    $output = explode("\n", wordwrap($str, $x));
    return $output;
}
