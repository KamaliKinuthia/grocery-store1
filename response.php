<?php 
//includeude the Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// fetch the user's number and total price from the database
$sql = "SELECT number, total_price FROM orders WHERE order_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $order_id); // replace $order_id with the actual order ID
$stmt->execute();
$stmt->bind_result($number, $total_price);
$stmt->fetch();
$stmt->close();

// initialize the Africa's Talking API
$username = 'dekut';
$api_key = '8c84dde3af50f5bb25b8db3a060be1d7e408af825812d05711d2268df7354ed6';
$AT = new AfricasTalking\SDK\AfricasTalking($username, $api_key);

// set up the SMS service
$sms = $AT->sms();

// set up the message
$message = "Thank you for your order! Your total price is KES {$total_price}.";
$recipients = [$number];

// send the message
try {
    $result = $sms->send([
        'to' => $recipients,
        'message' => $message
    ]);
    // print_r($result); // uncomment to view the response from the API
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>