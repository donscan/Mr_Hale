<?php

	$str = "ShangHai";

	echo md5($str)."<br>";

	if(md5($str) == "b4f943c9245d90dc198935a34db202e0")
	{
		echo "Hello Hale";
		exit;
	}

 ?>
