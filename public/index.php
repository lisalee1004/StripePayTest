<?php
require('../vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_BQokikJOvBiI2HlWgH4olfQ2",
  "publishable_key" => "pk_test_6pRNASCoBOKtIshFeQd4XMUh"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create a charge: this will charge the user's card
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => $_POST['myamount'];, // Amount in cents
    "currency" => "usd",
    "source" => $token,
    "description" => "AHP Sponsor a child one time payment."
    ));
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
?>