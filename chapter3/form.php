<?php

$name = $_POST["name"]; //retrieved the name entered in the form
$email = $_POST["email"]; //retrieved the email entered in the form
$phone = $_POST["phone"]; //retrieved the phone number entered in the form
$heard = $_POST["heard"]; //retrieved the heard options entered in the form
$comments = $_POST["comments"]; //retrieved the comments entered in the form

?>

<!DOCTYPE html>
<!-- Hector Ramirez -->
<html lang="en">

<head>
    <title>Form Results Hector Ramirez</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>

    <h1>Form Results</h1>

    <p><strong>Name:</strong> <?php print $name ?></p> <!-- prints the name that was provided -->
    <p><strong>Email:</strong> <?php print $email ?></p> <!-- prints the email provided -->
    <p><strong>Phone:</strong> <?php print $phone ?></p> <!-- prints the phone number provided -->
    <p><strong>Heard:</strong> <?php print $heard ?></p> <!-- prints the option the user discovered -->
    <p><strong>Comments:</strong> <?php print $comments ?></p> <!-- prints the comment provided -->

</body>

</html>