<?php
if (isset($_POST["student_login_submit"]) && $_POST["student_login_submit"]=="登录") {
		 $un=$_POST["student_id"];
		 $pwd=$_POST["student_password"];
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
		 	mysql_select_db('student');
		 	mysql_query("set names 'utf8'");
		 	$sql="select * from student_information where id='$_POST[student_id]' and password='$_POST[student_password]'";
		 	$result=mysql_query($sql);
		 	$num=mysql_num_rows($result);
		 	$row=mysql_fetch_array($result);
		 	if ($num)
		    {
		    	$inf=array();
		    	$inf[0]=$row['id'];
		    	$inf[1]=$row['name'];
		    	$inf[2]=$row['sex'];
		    	$inf[3]=$row['major'];
		    	$inf[4]=$row['email'];
		    	?>
		    		<!DOCTYPE html>
					<html>
					<head>
						<meta charset="utf-8">
						<title>学生个人主页</title>
						<script>
							function open_win() {
  								var width1 = (screen.availWidth-1200)/2;
  								var height1 = (screen.availHeight-550)/2;
  								window.open("svt2.php","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=1200, height=550,left="+width1+",top="+height1+"");
}
						</script>
						<link rel="stylesheet" type="text/css" href="http://xfycn.com.cn/css/homepage.css">
					</head>
					<body>
						<h2><strong>教师信息管理系统</strong>学生个人主页</h2>
						<img src="http://xfycn.com.cn/pic/HIT.jpg">
						<br><br>
						<form class="Student_homepage_student_information_form">
							<p><?php echo "学号：".$inf[0];?><br><br><br><br></p>
							<p><?php echo "姓名：".$inf[1];?><br><br><br><br></p>
							<p><?php echo "性别：".$inf[2];?><br><br><br><br></p>
							<p><?php echo "专业：".$inf[3];?><br><br><br><br></p>
							<p><?php echo "邮箱：".$inf[4];?><br><br><br><br></p>
						</form>
						<form action="SearchResult.php" method="post" class="Student_homepage_teacher_search_form" autocomplete="off">
							<input type="text" name="Name" placeholder="搜索教师姓名">
							<input type="submit" name="submit" value="检索">
						</form>
						<form action="RecommendResult.php" method="post" class="suggest_form" autocomplete="off">
						<br><br><br><br><br>
	    					专业: <input type="text" name="Major" placeholder="请输入你的专业">
	    					方向: <input type="text" name="Interest" placeholder="请输入你感兴趣的方向">
	    					<input type="submit" value="教师推荐">
						</form>
					</body>
					</html>
		    	<?php
		 		// $row=mysql_fetch_array($result);
		 		// echo $row[0],$row[1];
		 		//重定向浏览器 
				// header("Location: http://localhost/php/Student-homepage.php"); 
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
	setcookie("sidCookie",$inf[0]);
?>
	
<?php
?>