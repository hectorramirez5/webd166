<?php
$heading = "Googleplex"; //variable for heading and paragraph text
?>

<?php
$street = "1600 Amphitheatre Parkway"; //variable for street
$city = "Mountain View"; //variable for city
$state = "CA"; //variable for state
$country = "United States"; //variable for country
?>

<!DOCTYPE html> <!-- Hector Ramirez -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
    <title>Variables Hector Ramirez</title>
</head>

<body>

    <header>
        <h1><?php print $heading; ?></h1> <!-- displays header -->
    </header>

    <p>The <?php print $heading; ?> is the corporate headquarters
        complex of Google and its parent company
        Alphabet Inc. It is located at: <br>

        <br>
        <?php print $street; ?> <!-- displays street -->
        <br>

        <?php print $city;
        $state;
        $country;
        ?> <!-- displays city, state, and country -->
    </p>
</body>

</html>