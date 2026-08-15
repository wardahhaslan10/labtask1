<!--
Full Name: Wardah Haslan
Student Reg. Number: 18DDT23F1099
Class: DDT7B
Track & Group: software development
Course: DFP50193 - Web Programming
Assessment: Lab Task 1
Academic Session: Session II : 2025/2026
-->

<?php
// Function to calculate all required statistics from the input array.
function calculateArrayStats($userInputs)
{
    // Find the total number of elements in the array.
    $totalElements = count($userInputs);

    // Find the largest number of characters among all array elements.
    $largestCharacterCount = 0;

    foreach ($userInputs as $userInput) {
        $characterCount = strlen($userInput);

        if ($characterCount > $largestCharacterCount) {
            $largestCharacterCount = $characterCount;
        }
    }

    // Get the number of characters of the 3rd element.
    // Array index starts from 0, so the 3rd element has index 2.
    $thirdElementLength = strlen($userInputs[2]);

    // Sort the array in lexicographical order.
    $sortedInputs = $userInputs;
    sort($sortedInputs, SORT_STRING);

    // The first value is the minimum value in lexicographical order.
    $minimumValue = $sortedInputs[0];

    // The last value is the maximum value in lexicographical order.
    $maximumValue = $sortedInputs[$totalElements - 1];

    // Return all results as an associative array.
    return [
        'largestCharacterCount' => $largestCharacterCount,
        'thirdElementLength' => $thirdElementLength,
        'totalElements' => $totalElements,
        'minimumValue' => $minimumValue,
        'maximumValue' => $maximumValue
    ];
}

// Input array containing at least eight different string values.
$userInputs = [
    "Apple",
    "Banana",
    "Computer",
    "Database",
    "Bootstrap",
    "Programming",
    "Student",
    "Website"
];


// Store the associative array returned by the function.
$resultArray = calculateArrayStats($userInputs);
?>