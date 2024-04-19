<?php
session_start();
require('app/core/App.php');
require('app/core/Controller.php');
require('app/core/autoload.php');

?>

<html>
    <li><a href='/User/register'>Register</a></li>
    <li><a href='/User/login'>Login</a></li>
    <li><a href='/Customer/update'>UpdateCustomer</a></li>
    <li><a href='/Customer/logout'>Logout</a></li>
</html>