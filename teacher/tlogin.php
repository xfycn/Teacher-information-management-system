<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆</title>
    <!-- zui -->
    <link href="dist/css/zui.min.css" rel="stylesheet">
  </head>
  <body>

<form action="verification.php" method="post" class="container-fixed-xs" >

<h1>登陆</h1>
<br>
    <div class="input-group"  >
    <span class="input-group-addon"><i class="icon icon-user"></i></span>
  <input type="text" class="form-control" placeholder="用户名" name="tname" >
  <span class="input-group-addon"><i class="icon icon-heart"></i></span>
</div><br><br>
<div class="input-group"  >
  <span class="input-group-addon"><i class="icon icon-key"></i></span>
  <input type="password" class="form-control" placeholder="密码" name="tpassword" >
   <span class="input-group-addon"><i class="icon icon-heart"></i></span>

</div>
<br>
<div>
<button class="btn btn-primary" type="submit" >登陆</button>
	&nbsp;&nbsp;&nbsp;
<button class="btn" type="submit" formaction="zc.php" >注册</button>
</div>
</form>


    <!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="js/zui.min.js"></script>
  </body>
</html>