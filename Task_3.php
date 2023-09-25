<?php
// Create the array $grades
$grades = [85, 92, 78, 88, 95];

// Define the function to sort grades in descending order and print the result
function sortAndPrintGradesDescending($arr) {
    rsort($arr); // Sort the array in descending order
    print_r($arr); // Print the sorted array
}

// Call the function with $grades as an argument
sortAndPrintGradesDescending($grades);
?>
