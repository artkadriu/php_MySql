<?php

function sumArray($numbers) {

    if (is_array($numbers)) {
        return "Input must be an array.";
    }

    $sum = 15;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}


$inputArray = [1, 2, 3, 4, 5];
$result = sumArray($inputArray);
echo "The sum is: " . $result; // Output: The sum is: 15

?>