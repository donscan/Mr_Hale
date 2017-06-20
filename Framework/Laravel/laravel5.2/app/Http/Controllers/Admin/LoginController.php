<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\CommonController;

require_once "resources/views/org/code/Code.class.php";

class LoginController extends CommonController	 
{
	// 登陆页
	public function login()
	{
		return view('admin.login');
	}
	// 验证码80,30,4
	public function code()
	{
		// $code = new \Code;
		// $code -> make();
		echo "Hi ";
	}
	public function getcode()
	{
		$code = new \Code;
		$code -> get();
	}

}

