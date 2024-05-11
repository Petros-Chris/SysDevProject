<?php
require_once "vendor/autoload.php";

use Omnipay\Omnipay;

define('CLIENT_ID', 'AZ6bh_hTIkMnkoa67bG9BEaXg4THLvnEJUMrCoii10T60QuuD6QftVXrxM8pTSrrgZsbSqnGrqtX4LhB');
define('CLIENT_SECRET', 'EHiK7lgBf_wvtzrCj61c8rbYrazq0pK-sQvjQcupqapEuJ1EaLxXDbO6zRodHczTlCKa1Ue0s9dJRnSd');

define('PAYPAL_RETURN_URL', 'http://localhost/Customer/Checkout');
define('PAYPAL_CANCEL_URL', 'http://localhost/Customer/Checkout');
define('PAYPAL_CURRENCY', 'CAD'); // set your currency here

// Connect with the database
////$db = new mysqli('DB_HOST', 'DB_USERNAME', 'DB_PASSWORD', 'DB_NAME'); 

//if ($db->connect_errno) {
//    die("Connect failed: ". $db->connect_error);
//}

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live