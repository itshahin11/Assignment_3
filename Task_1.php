<?php


// Define the initial string
$text = "THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG."; 


function modifyText($text) {
    // Convert the string to all lowercase
    $lowercaseText = strtolower($text); //strlower is used to convert all string to lowercase.

    // Replace "brown" with "red" in the string
    $modifiedText = str_replace('brown', 'red', $lowercaseText); //

    // Print the modified text
    echo $modifiedText;
}


// Call the function with the provided $text
modifyText($text);

?>
