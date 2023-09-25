<?php
function removeEvenNumbers($numbers) {
    return array_filter($numbers, fn($num) => $num % 2 !== 0);
}

$numbers = range(1, 10);
$result = removeEvenNumbers($numbers);

print_r($result);
?>
