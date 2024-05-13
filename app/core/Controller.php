<?php
namespace app\core;

//Controller superclass from which all controller classes should inherit
class Controller{
	function view($name, $data=null){
		include('app/views/' . $name . '.php');
		//require('app/views/footer.php');
	}
}