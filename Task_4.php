<?php
// Create the multidimensional array $studentGrades
$studentGrades = [
    [
        'Math' => 85,
        'English' => 92,
        'Science' => 78,
    ],
    [
        'Math' => 88,
        'English' => 95,
        'Science' => 90,
    ],
    [
        'Math' => 75,
        'English' => 82,
        'Science' => 70,
    ],
];

// Define the function to calculate and print average grades
function calculateAndPrintAverageGrades($gradesArray) {
    foreach ($gradesArray as $studentIndex => $grades) {
        $total = 0;
        $count = count($grades);

        foreach ($grades as $subject => $grade) {
            $total += $grade;
        }

        $average = $total / $count;

        echo "Student " . ($studentIndex + 1) . " - Average Grade: " . $average . PHP_EOL;
    }
}

// Call the function with $studentGrades as an argument
calculateAndPrintAverageGrades($studentGrades);
?>
