<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\CommonController;
use Illuminate\Support\Facades\Input;
use App\Http\Model\User;
use Illuminate\Support\Facades\Crypt;

require_once './resources/org/code/Code.class.php';

class LoginController extends CommonController
{
	public function login()
	{
		if($input = Input::all())
		{	
			// 验证码功能的实现： 通过判断输入的验证码和存在Session 中的验证码进行比较
			$code = new \Code;
			$_code = $code -> get();
			if(strtoupper($_code) != strtoupper($input['code']))
			{
				return back() -> with('message','Code Error!');
			}
			// 判断用户名或者密码是否正确， 使用 || 
			$user = User::first();
			if($user->user_name != $input['user_name'] || Crypt::decrypt($user->user_pass) != $input['user_pass'])
			{
				return back() -> with('message','User_Name Error Or User_Pass Error !');
			}else{
				session(['user' => $user]);
				return redirect('admin/index');
			}
		}else{
			// session(['user' => null]);
			return view('admin.login');
		}
	}


	public function code()
	{
		$code = new \Code;
		$code -> make();
	}
	
	public function crypt()
	{
		$i = 'eyJpdiI6IjVyT01zYnhRMDU1UHlmZWxHaVVDb3c9PSIsInZhbHVlIjoiRFQyUVVsZHFiOXpOdnUwSG9ZMCtNZz09IiwibWFjIjoiMjA3M2Y1MmRkNGEzMjhlZDA2MDcxZmE4ZTE3Zjk1MzI1M2Q2NTg4MzZlYWYyMjA1ZTY1MTlhMWQxMjBiYWI2NCJ9';
		echo Crypt::decrypt($i);
	}

	
	
}
