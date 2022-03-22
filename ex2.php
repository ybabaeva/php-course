<?php
function isPowerOfThree(int $num): bool
{
    while ($num >= 1) {
        if ($num === 1) {
            return true;
        }
        $num /= 3;
    }
    return false;
}

var_dump(isPowerOfThree(9));

