<?php
	if (isset($_POST["submit"]) && $_POST["submit"]=="注册") 
	{
		 $un=$_POST["username"];
		 $pwd=$_POST["password"];
		 $pwdconf=$_POST["confirm"];
		 if ($un=="" || $pwd=="" || $pwdconf=="") 
		{
		 	?>
		 	<script type="text/javascript">
		 		alert("确认填写信息完整！");
		 		history.go(-1);
		 	</script>
		 	<?php
		}
		 else
		{
		 	if ($pwd==$pwdconf) 
		 	{
		 		mysql_connect('localhost','root','');
		 		mysql_select_db('user_information');
		 		mysql_query("set names 'utf8'");
		 		$sql="select user_name from user where user_name='$_POST[username]'";
		 		$result=mysql_query($sql);
		 		$num=mysql_num_rows($result);
		 		if ($num) 
		 		{
		 			?>
		 				<script type="text/javascript">
		 					alert("注册用户已经存在！");
		 					history.go(-1);
		 				</script>
		 			<?php
		 		}
		 		else
		 		{
		 			$sql_insert="insert into user(user_name,passworld) values('$_POST[username]','$_POST[password]')";
		 			$res_insert=mysql_query($sql_insert);
		 			if ($res_insert) 
		 			{
		 				?>
		 					<script type="text/javascript">
		 						alert("注册成功！");
		 						history.go(-1);
		 					</script>
		 				<?php
		 				// sleep(1);
		 				header("Location: http://localhost/login.html");
		 				exit();
		 			}
		 			else
		 			{
		 				?>
		 					<script type="text/javascript">
		 						alert("系统繁忙，请稍后！");
		 						history.go(-1);
		 					</script>
		 				<?php
		 			}
		 		}
		 	}
		 	else
		 	{
		 		?>
		 			<script type="text/javascript">
		 				alert("请确认两次输入的密码一致！");
		 				history.go(-1);
		 			</script>
		 		<?php
		 	}
		}
	}
	else
	{
		?>
		 	<script type="text/javascript">
		 		alert("提交失败！");
		 		history.go(-1);
		 	</script>
		<?php
	}
?>