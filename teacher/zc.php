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

<form name="forml" id="forml" method="post" action="mtsql.php">
<p align=center>用&nbsp;户&nbsp;名：
<input type="text" class=txt size="20" maxlength="20" name="tname"/>
</p>
<p align=center>电子邮件：
<input type="text" class=txt name="temail"/>
</p>
<p align=center>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:
<input type="text" class=txt name="tpassword"/>
</p>
<p align=center>确认密码：
<input type="text" class=txt name="rpassword"/>
</p>
<p align=center>个人简介：

<textarea class="form-control" rows="3" placeholder="可以输入多行文本" name="tintroduction" ></textarea>
</p>
<p align=center>
<input type="submit" name="submit" value="提交" class=but/>
</p>

    <!-- 在此处编码你的创意 -->

    <!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="js/zui.min.js"></script>
  </body>
</html>