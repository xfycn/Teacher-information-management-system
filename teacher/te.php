<?php

	echo "似的发的期待期待无期";
	echo "<br>";
	echo $_POST["tsex"];
	$a = "asq";

  <?php
$str="1|2|3|4|5|";
$var=explode("|",$str);
print_r($var);
?>

?>

<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello world!</title>
    <!-- zui -->
    <link href="css/zui.min.css" rel="stylesheet">
  </head>
  <body>
    <h1 align="center" >Hello, world!</h1>

<form name="forml" id="forml" method="post" action="te.php">

<p align=center> 性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：
<label for="male">Male</label>
<input type="radio" name="tsex" id="male"  value="0" />
<label for="female">Female</label>
<input type="radio" name="tsex" id="female"  value="1" />
</p>
<input type="text" name="tname" value=<?php echo $a ; ?>>


<p align=center>
<input type="submit" name="submit" value="提交" />
</p>

    <!-- 在此处编码你的创意 -->

    <!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="js/zui.min.js"></script>
  </body>
</html>