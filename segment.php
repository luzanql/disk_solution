<?php
/*
 * Complete the 'segment' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER x
 *  2. INTEGER_ARRAY space
 */

function segment($x, $space) {

    $space_size = sizeof($space);
    // The space size is at least 1 according to restrictions
    if ($space_size == 1) {
        return $space_size[0];
    }

    $segments = [];
    for ($i=0; $i < $space_size; $i++) {
        $j = $i;
        $count = 0;
        $min = PHP_INT_MAX;
        while ($count < $x) {
            if ($j >= $space_size) {
                $j += 1;
                break;
            }
            if ($min > $space[$j] ) {
                $min = $space[$j];
            }
            $j += 1;
            $count += 1;
        }

        if ($j <= $space_size) {
            $segments[] = $min;
        }

    }

    return max($segments);

}



$x = 3;

$space_count = 3;

$space = [2, 5, 4, 6, 8];

$result = segment($x, $space);
echo $result;