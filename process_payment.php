<?php
require '../config/config.php';

$rank = $_GET['rank'];
$price = $_GET['price'];
$username = $_GET['username'];  // Get Minecraft username

// Example of handling a fake purchase
echo "Processing payment for $username: $rank - $$price";

// Here, you should integrate PayPal API to handle real payments
?>
