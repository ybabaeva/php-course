<?php
function fib(int $num): int
{
    if (($num === 0) || ($num === 1)) {
        $res = $num;
    }
    else {
        $res = fib($num - 1) + fib($num - 2);
    }
    return $res;
}

echo fib(10);