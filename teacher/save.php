<?php

header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "qazqaz";
$dbname = "teacherdb";


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
    $tname = $row["tname"];
    $tpassword = $row["tpassword"];
    $tsex = $row["tsex"];
    $tmajor = $row["tmajor"];
    $tinterest = $row["tinterest"];
    $toffice = $row["toffice"];
    $tphone = $row["tphone"];
    $temail = $row["temail"];
    $tachieve = $row["tachieve"];
    $tbasicinf = $row["tbasicinf"];
    $tdata = $row['tdata'];

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
			<div class="submenu" align="center">
      <textarea class="form-control" rows="3" name="tbasicinf" ><?php echo $tbasicinf; ?> </textarea>
			</div>
		</li>
		<li>
			<div class="link">教育方向</div>
      <div class="submenu" align="center" >
      姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：<input type="text"  style="width:120px;" name="tname" value=<?php echo $tname; ?>>
      <br>
      性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：<input type="text"  style="width:120px;" name="tsex" value=<?php echo $tsex; ?>>
      <br>
      电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：<input type="text"  style="width:120px;" name="tphone" value=<?php echo $tphone; ?>>
      <br>
      邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：<input type="text"  style="width:120px;" name="temail" value=<?php echo $temail; ?>>
      <br>
      办公地点：<input type="text" style="width:120px;" name="toffice" value=<?php echo $toffice; ?>>
      <br>
      目前就职：<input type="text" style="width:120px;" name="tmajor" value=<?php echo $tmajor; ?>>
      <br>
      所在学科：<input type="text" style="width:120px;" name="tinterest" value=<?php echo $tinterest; ?>>
      <br>
      </div>
		</li>
		<li>
			<div class="link">工作经历</div>
      <div class="submenu"  >
			<textarea class="form-control" rows="3" name="tachieve" ><?php echo $tachieve; ?> </textarea>
      </div>
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