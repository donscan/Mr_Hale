<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Model\User;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Crypt;

class IndexController extends CommonController
{
	// 渲染主页视图
 	public function index()
 	{
 		return view('admin.index');
 	}   
 	// 渲染系统基本信息视图
 	public function info()
 	{
 		return view('admin.info');
 	}
 	// 退出功能，实现方法为 把 session 赋值为 null
 	public function quit()
	{
		session(['user' => null]);
		return redirect('admin/login');
	}
	// 修改密码功能的实现
	public function pass()
	{
		// 利用 $input::all() 方法来获取post 传递过来的数据
		if($input = Input::all())
		{
			// 自定义规则 必填 在6-20位之间 确认密码
			$rules = [
				'password' => 'required|between:6,20|confirmed',

			];
			// 对错误信息的自定义
			$message = [
				'password.required' => 'Password Must Write',
				'password.between' => 'Password Must between 6-20 Num',
				'password.confirmed' => 'Password is not confirmed'
			];
			// 通过 Validator 的 Make 方法对 输入的数据，规则和信息进行验证和设置
			$validator = Validator::make($input,$rules,$message);
			// 通过 passes 方法对 用户获取的信息进行验证， 新密码和旧密码的验证
			if($validator -> passes())
			{
				$user = User::first();
				// 对原始密码进行解密
				$_password = Crypt::decrypt($user -> user_pass);
				// 对输入的旧密码进行验证和替换
				if($input['password_o'] == $_password)
				{
					$user -> user_pass = Crypt::encrypt($input['password']);
					$user -> update();
					return view('admin/info');
				}else{
					// 返回信息时，对原始密码进行报错处理
					return back() -> with('errors','Old Password is not right');
				}
			}else{
				// 传递验证错误信息
				return back() -> withErrors($validator);
			}
		}else{
			return view('admin/pass');
		}

	}
}
