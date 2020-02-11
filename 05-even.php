<?php

for($i = 2; $i <= 50; $i += 2) {

    if($i % 3 === 0) {
        
        var_dump($i);
    }
}

// Write some code that outputs any even numbers between 1 and 50 that are also divisible by 3

// Example output:

// int(6)
// int(12)
// int(18)
// int(24)
// …
// int(48)