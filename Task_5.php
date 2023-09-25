<?php
// Function to generate a random password
function generatePassword($length) {
    // Define character sets for different types of characters
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numericChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all character sets
    $allChars = $lowercaseChars . $uppercaseChars . $numericChars . $specialChars;

    // Get the total number of characters available
    $charSetLength = strlen($allChars);

    // Initialize the password
    $password = '';

    // Generate random characters for the password
    for ($i = 0; $i < $length; $i++) {
        // Use random index to pick a character from the combined set
        $randomIndex = mt_rand(0, $charSetLength - 1);
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

// Generate and print a password with a length of 12 characters
$password = generatePassword(12);
echo "Generated Password: " . $password . PHP_EOL;
?>
