<?php
// Function to generate the hash
function generateHash($key, $txnid, $amount, $productinfo, $firstname, $email, $phone, $surl, $furl, $salt)
{
    // Create a string by concatenating the required parameters
    $hashString = $key . '|' . $txnid . '|' . $amount . '|' . $productinfo . '|' . $firstname . '|' . $email . '||||||||||' . $salt;

    // Generate the hash using SHA-512 algorithm
    $hash = hash('sha512', $hashString);

    return $hash;
}

// Replace the placeholders with your actual PayU credentials
$payuKey = 'FynyY4';
$txnid = 'your_unique_txnid';
$amount = 'your_donation_amount';
$productinfo = 'your_product_info';
$firstname = 'donor_firstname';
$email = 'donor_email';
$phone = 'donor_phone';
$surl = 'success.html';
$furl = 'failure.html';
$salt = 'bCifEsPDGJgOKmlw173OwJ9BmnAXyIRt';

// Generate the hash using the function
$hash = generateHash($payuKey, $txnid, $amount, $productinfo, $firstname, $email, $phone, $surl, $furl, $salt);

// Return the generated hash
echo $hash;
?>
