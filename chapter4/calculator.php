<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$milesDriven = $_POST["miles_driven"]; //variable for miles driven
$gallonsUsed = $_POST["gallons_used"]; //variable for gallons used
$priceperGallon = $_POST["price_gallon"]; //variable for price per gallon

$mpg = $milesDriven / $gallonsUsed; //calculate miles per gallon
$totalCost = $gallonsUsed * $priceperGallon; //calculate the total cost

?>

<!DOCTYPE html>
<!-- Hector Ramirez -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trip Calculator Results</title>
</head>

<body>

    <h1>Trip Calculator Results</h1>

    <h2>Values Entered</h2>
    <p>Miles Driven:
        <?php echo number_format($milesDriven); ?> <!-- retrieve the miles driven value from form -->
    </p>

    <p>Gallons Used:
        <?php echo number_format($gallonsUsed, 2); ?> <!-- retrieve the gallons used value from form -->
    </p>

    <p>Price per Gallon:
        <?php echo "$" . number_format($priceperGallon, 2); ?> <!-- retrieve the price per gallon value form form -->
    </p>

    <h2>Your Results</h2>
    <p>Miles per Gallon:
        <?php echo number_format($mpg, 2); ?> <!-- retrieve the miles per gallon value from form -->
    </p>

    <p>Cost of the Trip:
        <?php echo "$" . number_format($totalCost, 2); ?> <!-- retrieve the cost of the trip value from form -->
    </p>

</body>

</html>