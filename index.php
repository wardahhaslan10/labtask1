<?php

include 'app.php';

$userInputs = [];
$resultArray = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userInputs = [
        $_POST['firstName'] ?? '',
        $_POST['lastName'] ?? '',
        $_POST['city'] ?? '',
        $_POST['country'] ?? '',
        $_POST['favouriteFood'] ?? '',
        $_POST['favouriteColor'] ?? '',
        $_POST['hobby'] ?? '',
        $_POST['course'] ?? ''
    ];

    $resultArray = calculateArrayStats($userInputs);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Array Analysis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    

</head>

<body>

<div class="container py-5">

    <div class="text-center mb-4">

        <h1>String Array Analysis</h1>

        <p class="text-muted">Please enter the following information</p>

    </div>


    <!-- USER INPUT -->

    <div class="card shadow mb-4">

        <div class="card-header bg-primary text-white">

            <h4 class="mb-0">User Information</h4>

        </div>

        <div class="card-body">

            <form method="POST">

                <div class="row">

                    <!-- First Name -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">First Name</label>
                        <input
                            type="text"
                            name="firstName"
                            class="form-control"
                            placeholder="Enter your first name"
                            required>

                    </div>


                    <!-- Last Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>

                        <input
                            type="text"
                            name="lastName"
                            class="form-control"
                            placeholder="Enter your last name"
                            required>

                    </div>


                    <!-- City -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input
                            type="text"
                            name="city"
                            class="form-control"
                            placeholder="Enter your city"
                            required>
                    </div>


                    <!-- Country -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Country</label>

                        <input
                            type="text"
                            name="country"
                            class="form-control"
                            placeholder="Enter your country"
                            required>

                    </div>


                    <!-- Favourite Food -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Favourite Food</label>
                        <input
                            type="text"
                            name="favouriteFood"
                            class="form-control"
                            placeholder="Enter your favourite food"
                            required>
                    </div>


                    <!-- Favourite Color -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">Favourite Color</label>
                        <input
                            type="text"
                            name="favouriteColor"
                            class="form-control"
                            placeholder="Enter your favourite color"
                            required>

                    </div>


                    <!-- Hobby -->
                    <div class="col-md-6 mb-3">

                        <label class="form-label">Hobby</label>
                        <input
                            type="text"
                            name="hobby"
                            class="form-control"
                            placeholder="Enter your hobby"
                            required>
                    </div>


                    <!-- Course -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Course</label>
                        <input
                            type="text"
                            name="course"
                            class="form-control"
                            placeholder="Enter your course"
                            required>
                    </div>

                </div>


                <div class="text-center mt-3">

                    <button
                        type="submit"
                        class="btn btn-primary px-5">
                        Submit

                    </button>

                </div>

            </form>

        </div>

    </div>


    <?php if (!empty($resultArray)) { ?>

    <!-- RESULT -->

    <div class="card shadow mb-4">

        <div class="card-header bg-success text-white">

            <h4 class="mb-0">Array Statistics</h4>

        </div>

        <div class="card-body">

            <div class="row g-3">

                <div class="col-md-4">

                    <div class="result-box">

                        <h6>Largest Number of Characters</h6>

                        <h3><?= $resultArray['largestCharacterCount']; ?></h3>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="result-box">

                        <h6>3rd Element Length</h6>

                        <h3><?= $resultArray['thirdElementLength']; ?></h3>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="result-box">

                        <h6>Total Elements</h6>

                        <h3><?= $resultArray['totalElements']; ?></h3>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="result-box">

                        <h6>Minimum Value</h6>

                        <h3><?= htmlspecialchars($resultArray['minimumValue']); ?></h3>

                    </div>

                </div>


                <div class="col-md-6">

                    <div class="result-box">

                        <h6>Maximum Value</h6>

                        <h3><?= htmlspecialchars($resultArray['maximumValue']); ?></h3>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- INPUT ARRAY -->

    <div class="card shadow">

        <div class="card-header bg-dark text-white">

            <h4 class="mb-0">Input Array and Character Length</h4>

        </div>

        <div class="card-body">

            <div class="row g-3">

                <?php foreach ($userInputs as $index => $userInput) { ?>

                    <div class="col-md-6 col-lg-4">

                        <div class="input-box">

                            <span class="badge bg-primary">Element <?= $index + 1; ?></span>

                            <h5 class="mt-3"><?= htmlspecialchars($userInput); ?></h5>

                            <p class="text-muted mb-0">

                                Character Length:
                                <?= strlen($userInput); ?>

                            </p>

                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>

    </div>

    <?php } ?>

</div>

</body>
</html>