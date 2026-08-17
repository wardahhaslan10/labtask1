<?php

/*
Full Name: Wardah Haslan 
Student Reg. Number: 18DDT23F1099 
Class: DDT7B 
Track & Group: Software 
Course: DFP50193 - Web Programming 
Assessment: Lab Task 1 
Academic Session: Session II : 2025/2026 
*/

// Function to calculate statistics
function calculateArrayStats($userInputs)
{
    // Largest number of characters
    $largestCharacters = 0;

    foreach ($userInputs as $input) {
        $length = strlen($input);

        if ($length > $largestCharacters) {
            $largestCharacters = $length;
        }
    }

    // 3rd element length
    $thirdElementLength = strlen($userInputs[2]);

    // Total elements
    $totalElements = count($userInputs);

    // Minimum and maximum value
    $minimumValue = min($userInputs);
    $maximumValue = max($userInputs);

    return [
        "largestCharacters" => $largestCharacters,
        "thirdElementLength" => $thirdElementLength,
        "totalElements" => $totalElements,
        "minimumValue" => $minimumValue,
        "maximumValue" => $maximumValue
    ];
}

// Variable untuk simpan array
$userInputs = [];

// Variable untuk tentukan result
$submitted = false;

// Bila user tekan Submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan 8 input ke dalam array
    for ($i = 1; $i <= 8; $i++) {
        $userInputs[] = $_POST["input" . $i];
    }

    // Panggil function
    $stats = calculateArrayStats($userInputs);
    $submitted = true;
}
