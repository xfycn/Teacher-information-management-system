<?php
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>教师登录界面</title>
			<link rel="stylesheet" type="text/css" href="http://xfycn.com.cn/css/login.css">
		</head>
		<body>
			<form class="Teacher-login" action="http://xfycn.com.cn/php/teacher/verification.php" method="post">
				教师ID：<input type="text" name="tname" class="Teacher-id" placeholder="请输入您的教师ID" autocomplete="off"><br>
				登录密码：<input type="password" name="tpassword" class="Teacher-password" placeholder="请输入您的登录密码"><br>
				<input type="submit" name="teacher-login-submit" value="登录" class="Teacher-login-submit">
			</form>
		</body>
		</html>
	<?php
?>