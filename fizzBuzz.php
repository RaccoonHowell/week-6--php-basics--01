<?php

// for($i = 1; $i <= 100; $i += 1) {

//     if($i % 3 === 0 && $i % 5 === 0) {

//         echo "FizzBuzz" . "\n";

//     } else if($i % 3 === 0) {

//         echo "Fizz" . "\n";

//     } else if ($i % 5 === 0) {

//         echo "Buzz" . "\n";

//     } else {

//         echo $i . "\n";
//     }
// }

for($i = 1; $i <= 100; $i += 1) {

    $output = "";

    if($i % 3 === 0) {

        $output .= "Fizz";
    }

    if($i % 5 === 0) {

        $output .= "Buzz";
    }

    echo $output === "" ? $i . "\n" : $output . "\n";
}