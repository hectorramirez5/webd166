<?php

// Error message variables
$first_name = '';
$last_name = '';
$email_name = '';
$age_checkbox = '';

// Sticky name variables
$nameFirst = '';
$nameLast = '';
$emailName = '';
$checkboxAge = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieved values
    $nameFirst = trim((string)($_POST['fname'] ?? ''));
    $nameLast = trim((string)($_POST['lname'] ?? ''));
    $emailName = trim((string)($_POST['email'] ?? ''));
    $checkboxAge = trim((string)($_POST['age'] ?? ''));

    // Variable for form validation
    $okay = true;

    // IF statement for first name validation
    if ($nameFirst === '') {
        $first_name = "Please enter your first name";
        $okay = false;
    }

    // IF statement for last name validation
    if ($nameLast  === '') {
        $last_name = "Please enter your last name";
        $okay = false;
    }

    // IF statement for email validation
    if (filter_var($emailName, FILTER_VALIDATE_EMAIL)  === '') {
        $email_name = "Please enter your email address";
        $okay = false;
    }

    // IF statement for Checkbox validation
    if ($checkboxAge === '') {
        $age_checkbox = "You must confirm that your are over 18.";
        $okay = false;
    }

    $error = ['fname', 'lname', 'email', 'age'];

    if ($_POST['fname']) {
        echo "Error in submitting your first name";
    }

    if ($_POST['lname']) {
        echo "Error in submitting your last name";
    }

    if ($_POST['email']) {
        echo "Error in submitting your email";
    }

    if ($_POST['age']) {
        echo "Error in submitting your age";
    }

    if ($okay) {
        header('location: subscribed.php');
        return;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Connection</title>

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="coffeeconnection.css" rel="stylesheet">
</head>

<body>

    <!--
        This header and navigation appear on more than one page.
        You will move this shared content into a reusable PHP file.
    -->
    <?php require 'includes/header.php'; ?>

    <figure class="center">
        <img src="images/people.png" alt="People drinking coffee" width="300">
    </figure>

    <main id="content">

        <h2 class="center">Welcome to Coffee Connection!</h2>

        <p>
            We’re not just passionate lovers of coffee, but everything else that goes
            with a full and rewarding coffeehouse experience. We also offer a selection
            of premium teas, fine pastries, and other delectable treats. The music you
            hear in store is chosen for its artistry and appeal. It’s not unusual to see
            people coming to Coffee Connection to chat, meet up, or even work. We’re a
            neighborhood gathering place, a part of the daily routine, and would like
            to be part of your way of life.
        </p>

        <section id="contact">
            <h2 class="center">Sign Up to Receive Our Newsletter</h2>

            <!--
                This will become a self-processing form.

                The form uses POST but does not need a separate processing page.
                After this file is renamed coffeeconnection.php, the same page
                will display the form AND process the submitted information.

                novalidate allows PHP to perform the validation instead of
                allowing the browser to stop the form first.
            -->
            <form method="post" novalidate>

                <div class="flexcontainer">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname" id="fname" value="<?php echo htmlspecialchars($nameFirst, ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <!-- Replace this placeholder with the PHP first-name error message. -->
                <p class="red">
                    <?php if ($first_name !== ''): ?>
                        <span><?php echo $first_name; ?></span>
                    <?php endif ?>
                </p>

                <div class="flexcontainer">
                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname" id="lname" value="<?php echo htmlspecialchars($last_name, ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <!-- Replace this placeholder with the PHP last-name error message. -->
                <p class="red">
                    <?php if ($last_name !== ''): ?>
                        <span><?php echo $last_name; ?></span>
                    <?php endif ?>
                </p>

                <div class="flexcontainer">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email_name, ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <!-- Replace this placeholder with the PHP email error message. -->
                <p class="red">
                    <?php if ($email_name !== ''): ?>
                        <span><?php echo $email_name; ?></span>
                    <?php endif ?>
                </p>

                <div class="flexcontainer2">
                    <label for="age">I am over 18:</label>
                    <input type="checkbox" name="age" id="age" value="yes">
                </div>

                <!-- Replace this placeholder with the PHP checkbox error message. -->
                <p class="red">
                    <?php if ($age_checkbox !== ''): ?>
                        <span><?php echo $age_checkbox; ?></span>
                    <?php endif ?>
                </p>

                <!--
                    The submitted text values will eventually be placed back
                    into the form so they remain visible after an error.
                    This creates a sticky form.
                -->
                <div class="form-actions">
                    <button type="submit">Submit</button>
                    <a class="clear-link" href="coffeeconnection.php">Clear Form</a>
                </div>

            </form>
        </section>

        <section id="products">

            <div class="product center">
                <h3>Espresso</h3>
                <p><img src="images/coffee_espresso.jpg" alt="Espresso coffee"></p>
                <p>Popular espresso beverages — latte, americano, cappuccino, macchiato, and cold espresso drinks</p>
            </div>

            <div class="product center">
                <h3>Blended</h3>
                <p><img src="images/coffee_blended.jpg" alt="Blended coffee drinks"></p>
                <p>Delicious icy blends</p>
            </div>

            <div class="product center">
                <h3>Pastries</h3>
                <p><img src="images/coffee_pastries.jpg" alt="Pastries"></p>
                <p>Muffins, bagels, coffee cakes, and more</p>
            </div>

            <div class="product center">
                <h3>Food</h3>
                <p><img src="images/coffee_food.jpg" alt="Sandwiches, salads, and other food"></p>
                <p>Sandwiches, paninis, salads, and more</p>
            </div>

            <div class="product center">
                <h3>Breakfast</h3>
                <p><img src="images/coffee_breakfast.jpg" alt="Breakfast food"></p>
                <p>Biscuits, muffins, wraps, croissants, oatmeal, and more</p>
            </div>

        </section>

    </main>

    <!--
        This footer also appears on more than one page.
        You will move it into a reusable PHP file.
    -->
    <?php require "includes/footer.php"; ?>

</body>

</html>