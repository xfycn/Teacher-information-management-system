<?php

header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "qazqaz";
$dbname = "teacherdb";
$image_name = "1.jpg";

echo  " <img  src= \"image/1.jpg/\"  alt=\"响\"> ";


$tidd = $_COOKIE["TidCookie"];
$con=mysqli_connect($servername,$username,$password,$dbname);
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM teachers WHERE tid=$tidd ");

while($row = mysqli_fetch_array($result))
{
    $tid = $row['tid'];
    $tname = $row['tname'];
    $tdata = $row['tdata'];
    $tintroduction= $row['tintroduction'];

}

mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello world!</title>
    <!-- zui -->
    <link href="dist/css/zui.min.css" rel="stylesheet">
    <link href="teacher.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
  </head>
  <body>
    <h1>Hello, world!</h1>
	<img src="http://zui.sexy/docs/img/img1.jpg" width="100%" height="200px"  alt="响应式图片测试">
    <h2 align="right" > 欢迎你，<?php echo $tname; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h2>
	<div  id="afbox6">
   <h3 align="center" > 介绍</h3>
   <form name="form1" enctype="multipart/form-data" method="post" action="save1.php">
	<ul id="accordion" class="accordion">
		<li>
			<div class="link">基本信息</div>
			<div class="submenu" align="center" >
				<textarea class="form-control" rows="3" name="tintroduction" ><?php echo $tintroduction; ?>吴立刚，男，汉族，1977年7月出生，博士，哈尔滨工业大学航天学院二级教授、博士生导师。从事复杂不确定动态系统的控制与信号处理研究。目前发表论文160余篇，SCI收录120余篇，SCI他引4000余次；共有27篇论文入选为ESI高被引论" </textarea>
			</div>
		</li>
		<li>
			<div class="link">教育经历</div>
			<p class="submenu" >爱实打实的地区</p>
		</li>
		<li>
			<div class="link">工作经历</div>
			<p class="submenu" >爱实打实的地区</p>
		</li>
		<li><div class="link">荣誉奖励</div>
			<p class="submenu" >爱实打实的地区</p>
		</li>
	</ul>

	<div align="center">

	<button class="btn btn-primary" type="submit" >保存修改</button>
	&nbsp;&nbsp;&nbsp;
   <button class="btn" type="reset" >重置</button>

	</div>
  



   </div>

   </form>

    
    <script src="js/t.jquery.js"></script>
  	<script src="js/index.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="js/zui.min.js"></script>
  </body>
</html>