<?php
require __DIR__ . '/vendor/autoload.php';

use Safaricom\Mpesa\Mpesa;

// Set the API credentials
$apiKey = 'your_api_key';
$apiSecret = 'your_api_secret';

// Set the M-Pesa environment
$env = 'sandbox';

// Create an instance of the Mpesa class
$mpesa = new Mpesa($apiKey, $apiSecret, $env);

// Get user input for payment details
$phoneNumber = readline('Enter phone number: '); // Prompt user for phone number
$amount = readline('Enter amount: '); // Prompt user for amount
$accountReference = 'Test Payment';
$transactionDesc = 'Test Payment';

// Make the payment request
$response = $mpesa->sendMoney($phoneNumber, $amount, $accountReference, $transactionDesc);

// Check the response status
if ($response['ResponseCode'] == '0') {
    echo 'Payment successful';
} else {
    echo 'Payment failed';
}
?>