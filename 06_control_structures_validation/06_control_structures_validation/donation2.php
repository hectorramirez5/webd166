<?php

$msg = "";

$okay = true;

$fname = trim($_POST['fname'] ?? '');
$lname = trim($_POST['lname'] ?? '');
$email = trim($_POST['email'] ?? '');
$amount_raw = ($_POST['amount'] ?? '');
$subscription = trim($_POST['subscription'] ?? '');

$subscription_status = '';
$thanks = "Thank you!" . "\n";


if (empty($fname)) {
    $msg .= '<p class="error">Please enter your first name <p>' . "\n";
    $okay = true;
} elseif (!strlen($fname) < 15) {
    $okay = false;
}

if (empty($lname)) {
    $msg .= '<p class="error">Please enter your last name <p>' . "\n";
    $okay = true;
} elseif (!strlen($lname) < 15) {
    $okay = false;
}


if (empty($email)) {
    $msg .= '<p class="error">Please enter a valid email address<p>' . "\n";
    $okay = true;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email .= '<p class="error">Please enter a valid email address<p>' . "\n";
    $okay = false;
}

if ($amount_raw === '') {
    // amount is missing
} elseif (!is_numeric($amount_raw)) {
    // amount is not a number
} elseif ($amount_raw <= 0) {
    // amount is not greater than zero
}

$formatted_amount = number_format((float) $amount_raw, 2);

if (isset($_POST['subscription'])) {
    $subscription = 'Yes';
    echo 'Check box is checked';
} else {
    $subscription = 'No';
    echo "Check box is not checked";
}

if ($subscription !== 'Yes') {
    $msg .= '<p class="error">You have chosen NOT to get a one year subscription.</p>' . "\n";
    $okay = false;
} else {
    $msg .= '<p>You get a one year subscription.</p>';
}

switch ($subscription_status) {
    case 'no_subscription':
        $msg .= 'You have chosen not to subscribe' . "\n";
        break;

    case 'subscription':
        $msg .= 'You have chosen to subscribe' . "\n";
        break;
}

if ($amount_raw >= 100) {
    $msg .= "Your donation level is Gold Supporter" . "\n";

    // Gold Supporter
} elseif ($amount_raw >= 50) {
    $msg .= "Your donation level us Silver Supporter" . "\n";
    // Silver Supporter
} elseif ($amount_raw >= 25) {
    $msg .= "Your donation level is Bronze Supporter" . "\n";
    // Bronze Supporter
} else {
    $msg .= "You're a friend of the animals" . "\n";
    // Friend of the Animals
}

for ($i = 1; $i <= 3; $i++) {
    $msg .= nl2br($thanks);
}

$rand = random_int(1000, 9999);
$last_initial = strtoupper(substr($lname, 0, 1));
$length = strlen($lname);
$conf = $length . $last_initial . $rand;

if ($okay) {
    $nameFirst = htmlspecialchars($fname, ENT_QUOTES, 'ITF-8');
    $nameLast = htmlspecialchars($lname, ENT_QUOTES, 'ITF-8');
    $emailaddress = htmlspecialchars($email, ENT_QUOTES, 'ITF-8');

    $msg = "<p>Thank you $nameFirst $nameLast for your donation of \$$amount_raw</p>" . "\n";
    $msg .= "<p>Your confirmation number is $conf<p>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 6 Control Structures</title>
</head>

<body>
    <h1>Donation Successful</h1>

    <?php echo $msg; ?>

</body>

</html>