<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Initialize the message variable.
$fname = trim($_POST['first_name'] ?? ''); //This variable contains the value for the first name
$lname = trim($_POST['last_name'] ?? ''); //This variable contains the value for the last name
$email = trim($_POST['email'] ?? ''); //This variable contains the value for the email
$damount = trim($_POST['donation'] ?? ''); //This variable contains the value for the donation amount
// Get and clean values from the form.
$safe_fname = htmlspecialchars($fname, ENT_QUOTES, 'UTF-8'); //The first name with a function
$safe_lname = htmlspecialchars($lname, ENT_QUOTES, 'UTF-8'); //The last name with a function
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); //The email with a function
$safe_damount = htmlspecialchars($damount, ENT_QUOTES, 'UTF-8'); //The donation amount with a function
// Format the donation amount to two decimal places.
$donation = $_POST['donation'] ?? 0; //Assigning the variable to the donation amount and the HTML post tag
$donation = number_format($donation, 2); //Formatted donation amount to two decimal places.
// $amount = number_format((float) $amount, 2); Either is acceptable for formatting the amount to two decimal places.

// Create a random confirmation number.
$rand = random_int(1000, 9999); //Variable created to generate a randomized 4-digit number

// Get the first letter of the last name and convert it to uppercase.
$last_initial = strtoupper(substr($lname, 0, 1)); //Variable created to make the first letter uppercase

// Count the number of characters in the last name.
$length = strlen($lname); //Variable created to count the length of the last name

// Combine the values to create the confirmation number.
$conf = $length . $last_initial . $rand; //

// Create the confirmation message.
$msg = "<p>Thank you $safe_fname $safe_lname for your donation of \$$donation.</p>";
$msg .= "<p>Your confirmation number is $conf. We will email your receipt to $safe_email.</p>";
?>

<!DOCTYPE html>
<!--Hector Ramirez -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donation Confirmation</title>

    <style>
        body {
            font-family: arial;
            font-size: 100%;
        }

        #outer {
            width: 960px;
            margin: 50px auto;
            padding: 10px;
            border: 1px solid #a8a8a8;
            box-shadow: 0px 0px 20px #a8a8a8;
            background-color: aliceblue;
        }

        h1,
        h2 {
            font-size: 1.5em;
            color: navy;
            text-align: center;
        }

        .info {
            text-align: left;
        }

        input {
            display: block;
            margin-bottom: 25px;
        }

        input[type=submit] {
            margin-top: 25px;
        }
    </style>

</head>

<body>
    <header>
        <h1>Humane Society Donations</h1>
        <h2>Help the Animals</h2>
    </header>

    <section id="outer">
        <h1 class="info">Your Contribution</h1>

        <?php echo $msg; ?> <!-- PHP GOES HERE --> <!--This displays the inputted values from the form-->

    </section>

</body>

</html>