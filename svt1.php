
<?php 
  $sid = "2" ;
  $tid = "1" ;
  setcookie("sidCookie",$sid);
  setcookie("tidCookie",$tid);

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
    <script>
function open_win() {
  var width1 = (screen.availWidth-1200)/2;
  var height1 = (screen.availHeight-550)/2;
  window.open("svt2.php","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=1200, height=550,left="+width1+",top="+height1+"");
}
</script>
  </head>
  <body>
    <h1>Hello, world!</h1>
    
    <form>
    <input type="button" value="打开窗口" onclick="open_win()">
    </form>
    <button type="button" class="btn btn-primary" data-remote="zc.php" data-toggle="modal">Ajax对话框</button>
    <button type="button" class="btn btn-primary" data-type="ajax" data-url="partial/remote-modal.html" data-toggle="modal">Ajax对话框</button>

    <!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="js/zui.min.js"></script>
  </body>
</html>