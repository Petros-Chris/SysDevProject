<?php
require('app/core/App.php');
require('app/core/Controller.php');
require('app/core/autoload.php');
session_start();
require('app/views/nav.php');
?>

<html>
    <li><a href='/User/register'>Register</a></li>
    <li><a href='/User/login'>Login</a></li>
    <li><a href='/Customer/update'>UpdateCustomer</a></li>
    <li><a href='/User/logout'>Logout</a></li>
    <li><a href='/contact'>Contact Us</a></li>
    <li><a href='/Product/listing'>View All Products</a></li>
    <li><a href='/Admin/index'>Admin Side</a></li>
    <li><a href='/Customer/checkout'>Checkout</a></li>
    <br>
</html>