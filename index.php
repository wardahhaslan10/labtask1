<?php

// Variable untuk tentukan sama ada result perlu dipaparkan
$submitted = false;

// Variable kosong
$inputArray = [];
$largestCharacters = 0;
$thirdElementLength = 0;
$totalElements = 0;
$minimumValue = "";
$maximumValue = "";

// Bila user tekan Submit
if (isset($_POST['submit'])) {

    // Simpan 8 input user dalam array
    $inputArray = [
        $_POST['input1'],
        $_POST['input2'],
        $_POST['input3'],
        $_POST['input4'],
        $_POST['input5'],
        $_POST['input6'],
        $_POST['input7'],
        $_POST['input8']
    ];

    // Largest number of characters
    foreach ($inputArray as $value) {

        $length = strlen($value);

        if ($length > $largestCharacters) {
            $largestCharacters = $length;
        }
    }

    // Character length bagi element ke-3
    $thirdElementLength = strlen($inputArray[2]);

    // Jumlah element
    $totalElements = count($inputArray);

    // Minimum value
    $minimumValue = min($inputArray);

    // Maximum value
    $maximumValue = max($inputArray);

    // Tukar kepada TRUE supaya result dipaparkan
    $submitted = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>String Array Analysis</title>

    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5 mb-5">

    <!-- MAIN CARD -->

    <div class="card shadow">

        <!-- HEADER -->

        <div class="card-header bg-primary text-white text-center">

            <h2 class="mb-0">String Array Analysis</h2>
        </div>


        <!-- BODY -->

        <div class="card-body">

            <!-- INPUT FROM USER -->

            <h4 class="mb-4">Input From User</h4>


            <form method="POST" action="index.php">

                <!-- INPUT 1 -->

                <div class="mb-3">

                    <label class="form-label">Input 1</label>

                    <input
                        type="text"
                        name="input1"
                        class="form-control"
                        placeholder="Enter Input 1"
                        required>

                </div>


                <!-- INPUT 2 -->

                <div class="mb-3">

                    <label class="form-label">Input 2</label>

                    <input
                        type="text"
                        name="input2"
                        class="form-control"
                        placeholder="Enter Input 2"
                        required>

                </div>


                <!-- INPUT 3 -->

                <div class="mb-3">

                    <label class="form-label">Input 3</label>

                    <input
                        type="text"
                        name="input3"
                        class="form-control"
                        placeholder="Enter Input 3"
                        required>

                </div>


                <!-- INPUT 4 -->

                <div class="mb-3">

                    <label class="form-label">Input 4</label>

                    <input
                        type="text"
                        name="input4"
                        class="form-control"
                        placeholder="Enter Input 4"
                        required>

                </div>


                <!-- INPUT 5 -->

                <div class="mb-3">

                    <label class="form-label">Input 5</label>

                    <input
                        type="text"
                        name="input5"
                        class="form-control"
                        placeholder="Enter Input 5"
                        required>
                </div>


                <!-- INPUT 6 -->

                <div class="mb-3">

                    <label class="form-label">Input 6</label>

                    <input
                        type="text"
                        name="input6"
                        class="form-control"
                        placeholder="Enter Input 6"
                        required>
                </div>


                <!-- INPUT 7 -->

                <div class="mb-3">

                    <label class="form-label">Input 7</label>

                    <input
                        type="text"
                        name="input7"
                        class="form-control"
                        placeholder="Enter Input 7"
                        required>
                </div>


                <!-- INPUT 8 -->

                <div class="mb-3">
                    <label class="form-label">Input 8</label>

                    <input
                        type="text"
                        name="input8"
                        class="form-control"
                        placeholder="Enter Input 8"
                        required>
                </div>


                <!-- SUBMIT BUTTON -->

                <div class="text-center mt-4">
                    <button
                        type="submit"
                        name="submit"
                        class="btn btn-primary px-5">
                        Submit
                    </button>

                </div>

            </form>


            <?php if ($submitted == true) { ?>

                <hr class="my-5">


                <!-- ARRAY STATISTICS -->

                <h4 class="mb-3">Array Statistics</h4>

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <tr>

                            <th>Largest Characters</th>

                            <td><?php echo $largestCharacters; ?></td>

                        </tr>

                        <tr>

                            <th>3rd Element Length</th>

                            <td><?php echo $thirdElementLength; ?></td>

                        </tr>


                        <tr>
                            <th>Total Elements</th>

                            <td><?php echo $totalElements; ?></td>
                        </tr>


                        <tr>
                            <th>Minimum Value</th>

                            <td><?php echo htmlspecialchars($minimumValue); ?></td>

                        </tr>


                        <tr>

                            <th>Maximum Value</th>

                            <td><?php echo htmlspecialchars($maximumValue); ?></td>

                        </tr>
                    </table>

                </div>


                <!-- INPUT ARRAY AND CHARACTER LENGTH -->

                <h4 class="mt-5 mb-3">Input Array and Character Length</h4>


                <div class="table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead class="table-dark">

                            <tr>

                                <th>Element</th>

                                <th>Input</th>

                                <th>Character Length</th>
                            </tr>

                        </thead>


                        <tbody>

                        <?php

                        foreach ($inputArray as $index => $value) {

                        ?>

                            <tr>

                                <td><?php echo $index + 1; ?></td>

                                <td><?php echo htmlspecialchars($value); ?></td>

                                <td><?php echo strlen($value); ?></td>
                            </tr>

                        <?php

                        }

                        ?>

                        </tbody>

                    </table>

                </div>

            <?php } ?>

        </div>

    </div>

</div>


<!-- Bootstrap JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>