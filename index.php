<?php

// Include app.php to access the input and result arrays.
include 'app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Array analysis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Main container -->
    <div class="container py-5">

        <!-- Page heading -->
        <div class="text-center mb-5">

            <h1 class="display-5 fw-bold">String Array Analysis</h1>

            <p class="text-muted">PHP Function and Array Processing</p>

        </div>


        <!-- Q2: Result Section -->
        <div class="card shadow-sm mb-5">

            <div class="card-header bg-primary text-white">

                <h2 class="h4 mb-0">Array Statistics</h2>

            </div>

            <div class="card-body">

                <div class="row g-4">

                    <!-- Largest number of characters -->
                    <div class="col-md-6 col-lg-4">
                        <div class="stat-card">
                            <h5>Largest Characters</h5>
                            <p>
                                <?= $resultArray['largestCharacterCount']; ?>
                                characters
                            </p>

                        </div>

                    </div>


                    <!-- Third element length -->
                    <div class="col-md-6 col-lg-4">

                        <div class="stat-card">

                            <h5>3rd Element Length</h5>
                            <p>
                                <?= $resultArray['thirdElementLength']; ?>
                                characters
                            </p>
                        </div>
                    </div>


                    <!-- Total elements -->
                    <div class="col-md-6 col-lg-4">

                        <div class="stat-card">

                            <h5>Total Elements</h5>

                            <p><?= $resultArray['totalElements']; ?></p>
                        </div>
                    </div>


                    <!-- Minimum value -->
                    <div class="col-md-6 col-lg-6">

                        <div class="stat-card">

                            <h5>Minimum Value</h5>

                            <p><?= htmlspecialchars($resultArray['minimumValue']); ?></p>

                        </div>

                    </div>


                    <!-- Maximum value -->
                    <div class="col-md-6 col-lg-6">

                        <div class="stat-card">

                            <h5>Maximum Value</h5>

                            <p><?= htmlspecialchars($resultArray['maximumValue']); ?></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Q3: Input Array Section -->
        <div class="card shadow-sm">

            <div class="card-header bg-dark text-white">

                <h2 class="h4 mb-0">Input Array and Character Length</h2>

            </div>

            <div class="card-body">

                <div class="row g-3">

                    <?php
                    // Use foreach loop to display every element in the input array.
                    foreach ($userInputs as $index => $userInput) {

                        // Calculate the number of characters for the current element.
                        $characterCount = strlen($userInput);

                    ?>

                        <div class="col-md-6 col-lg-4">

                            <div class="input-card">

                                <div class="d-flex justify-content-between align-items-center">

                                    <span class="badge bg-primary">
                                        Element <?= $index + 1; ?>
                                    </span>

                                    <span class="badge bg-secondary"><?= $characterCount; ?> characters</span>
                                </div>

                                <h5 class="mt-3 mb-0"><?= htmlspecialchars($userInput); ?></h5>

                            </div>

                        </div>

                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>


        <!-- Footer -->
        <div class="text-center mt-5"><p class="text-muted">PHP Array Analysis | DFP5019 </p></div>

    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>