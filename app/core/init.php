<?php
ob_start();
require ('app/core/App.php');
require ('app/core/Controller.php');
require ('app/core/autoload.php');
session_start();
require_once ('vendor/autoload.php');
require ('app/core/i18n.php');
require_once ('app/views/nav.php');
