<!--
Full Name: Wardah Haslan
Student Reg. Number: [Your Registration Number]
Class: [Your Class]
Track & Group: [Your Track & Group]
Course: DFP50193 - Web Programming
Assessment: Lab Task 1
Academic Session: Session II : 2025/2026
-->

<?php
// Function to calculate statistics from the user input array
function calculateArrayStats($userInputs)
{
    // Find the total number of elements
    $totalElements = count($userInputs);

    // Set the largest character count to 0
    $largestCharacterCount = 0;

    // Loop through each value to find the largest character count
    foreach ($userInputs as $userInput) {

        // Count the characters of the current value
        $characterCount = strlen($userInput);

        // Compare with the current largest character count
        if ($characterCount > $largestCharacterCount) {
            $largestCharacterCount = $characterCount;
        }
    }

    // Find the character count of the 3rd element
    // Array index starts from 0, so the 3rd element is index 2
    $thirdElementLength = strlen($userInputs[2]);

    // Copy the array before sorting
    $sortedInputs = $userInputs;

    // Sort the values in lexicographical order
    sort($sortedInputs, SORT_STRING);

    // First value after sorting is the minimum value
    $minimumValue = $sortedInputs[0];

    // Last value after sorting is the maximum value
    $maximumValue = $sortedInputs[$totalElements - 1];

    // Return the results as an associative array
    return [
        'largestCharacterCount' => $largestCharacterCount,
        'thirdElementLength' => $thirdElementLength,
        'totalElements' => $totalElements,
        'minimumValue' => $minimumValue,
        'maximumValue' => $maximumValue
    ];
}

?>