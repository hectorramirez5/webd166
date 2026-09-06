<?php
$hdr = "<h1>Googleplex</h1>"; //variable for heading and paragraph text
?>

<?php
$strt = "1600 Amphitheatre Parkway"; //variable for street
$cty = "Mountain View"; //variable for city
$ste = "CA"; //variable for state
$cntry = "United States"; //variable for country
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
        <?php print "$hdr"; ?> <!-- displays header -->
    </header>

    <p>The Googleplex is the corporate headquarters
        complex of Google and its parent company
        Alphabet Inc.<br> It is located at:

        <br>
        <?php print "$strt"; ?> <!-- displays street -->
        <br>

        <?php print "$cty, $ste, $cntry"; ?> <!-- //displays city, state, and country -->
    </p>
</body>

</html>