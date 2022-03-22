<?php
function binarySum(string $num1, string $num2): string
{
    $decNum1 = bindec($num1);
    $decNum2 = bindec($num2);
    return decbin($decNum1 + $decNum2);
}

echo binarySum(11010, 101);

