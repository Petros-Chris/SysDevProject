<?php
namespace app\filters;

#[\Attribute]
class IsCustomer implements \app\core\AccessFilter
{
	public function redirected()
	{
		//make sure that the user is logged in
		if (!isset($_SESSION['customer_id'])) {
			header('location:/User/login');
			return true;
		}

		//HOLD ON
		// if ($_SESSION['secret'] != NULL) {
		// 	header('location:/User/check2fa');
		// 	return true;
		// }
		return false;
	}
}