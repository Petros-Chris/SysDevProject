<?php

namespace app\controllers;

use stdClass;

class User extends \app\core\Controller{

function register(){
		//showing the register view
		$this->view('User/register');
	}
}