<?php

$counter = 0;

$total = 0;

$i = 3;

while($counter < 117) {

    if($i % 3 === 0 || $i % 7 === 0) {

        $total += $i;
        
        $counter += 1;
    }

    $i += 1;
}

var_dump($total);

// Write some code that var_dumps the sum of the first 117 multiples of either 3 or 7.

// e.g. 3 + 6 + 7 + 9 + 12 + 14 + 15 + 18 + 21 + 24 ...