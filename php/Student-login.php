<?php
	?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<title>学生登录界面</title>
			<link rel="stylesheet" type="text/css" href="http://xfycn.com.cn/css/login.css">
		</head>
		<body>
			<form class="Student-login" action="Student-homepage.php" method="post" autocomplete="off">
				通行证账号：<input type="text" name="student_id" class="Student-id" placeholder="请输入您的通行证账号" autocomplete="off"><br>
				登录密码：<input type="password" name="student_password" class="Student-password" placeholder="请输入您的登录密码"><br>
				<input type="submit" name="student_login_submit" value="登录" class="Student-login-submit">
			</form>
		</body>
		</html>
	<?php
?>