<?php
namespace app\filters;

#[\Attribute]
class IsEmployee implements \app\core\AccessFilter
{

	public function redirected()
	{
		//if employee_id doesn't exist
		if (!isset($_SESSION['employee_id'])) {
			$_SESSION['url'] = $_SERVER['REQUEST_URI'];
			header('location:/User/login');
			return true;
		}

		//if admin_id doesn't exist
		if (!isset($_SESSION['isAdmin'])) {
			return false;
		}
		return false;
	}

}