<?php 
	session_start();
	if(isset($_POST['dosubmit']))
	{
		if(strtoupper($_SESSION['code']) == strtoupper($_POST['code']))
		{
			echo "输入一致，验证成功！";
		}else
		{
			echo "输入不一致，验证失败！";
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verificatio Code</title>
</head>
<body>
	<form action="reg.php" method="post" accept-charset="utf-8">
		Username: <input type="text" name="username"> <br>
		Password: <input type="password" name="password"> <br>
		Code:  <input type="text" onkeyup = "if(this.value != this.value.tuUpperCase()) this.value = this.value.tuUpperCase()" name="code" size="4"> 
				<img src="code.php" onclick="this.src='code.php?'+Math.random()" />	<br>
		<input type="submit" name="dosubmit" value="登 录"> 
	</form>
</body>
</html>


