<?php
	if (isset($_POST["submit"]) && $_POST["submit"]=="登录") {
		 $un=$_POST["username"];
		 $pwd=$_POST["password"];
		 if ($un=="" || $pwd=="") 
		 {
		 	?>
		 	<script type="text/javascript">
		 		alert("用户名或者密码为空！");
		 		history.go(-1);
		 	</script>
		 	<?php
		 }
		 else
		 {
		 	mysql_connect('localhost','root','');
		 	mysql_select_db('user_information');
		 	mysql_query("set names 'utf8'");
		 	$sql="select user_name,passworld from user where user_name='$_POST[username]' and passworld='$_POST[password]'";
		 	$result=mysql_query($sql);
		 	$num=mysql_num_rows($result);
		 	if ($num)
		    {
		 		// $row=mysql_fetch_array($result);
		 		// echo $row[0],$row[1];
		 		//重定向浏览器 
				header("Location: http://localhost/Teacher Management.html"); 
				//确保重定向后，后续代码不会被执行 
				//exit;

		 		// <meta http-equiv:"refresh" url="Teacher Management.html">

		 	}
		 	else
		 	{
		 		?>
		 			<script type="text/javascript">
		 				alert("用户名或者密码不正确！");
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
		 		alert("提交未成功！");
		 		history.go(-1);
		 	</script>
		<?php
	}
?>