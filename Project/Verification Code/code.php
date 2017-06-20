<?php 
	// 开启session方法
	session_start();

	// 包含验证码生成类文件
	include "vcode.class.php";

	// 创建验证码对象 构造方法
	$vcode = new Vcode(80,25,4);

	// 保存验证码到服务器自己的空间保存一份
	$_SESSION['code'] = $vcode -> getcode();

	// 输出验证码
	$vcode -> outimg();

