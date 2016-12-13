<?php

$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('数据库连接失败: ' . mysql_error());
}
else
{
    //open the database
  mysql_select_db("teacher", $con);
  mysql_query("set names 'utf8'"  );
  //echo '<div style="padding:30px; text-align:center"><h2>', "教师详细信息", '</h2></div>';
  $isbn=$_GET['tid'];

  $inf = array();
  $result = mysql_query("SELECT * FROM teacher_information WHERE tid = '".$isbn."'");
  while($row = mysql_fetch_array($result))
  {
    $inf[0] = $row['tid'];
    $inf[1] = $row['tname'];
    $inf[2] = $row['tsex'];
    $inf[3] = $row['tmajor'];
    $inf[4] = $row['tinterest'];
    $inf[5] = $row['temail'];
    $inf[6] = $row['toffice'];
    $inf[7] = $row['tphone'];
    $inf[8] = $row['tbasicinf'];
    $inf[9] = $row['tachieve'];
  }
}
mysql_close($con);
?>


<!--added from partner-->
<?php 
  $sid = $_GET['sid']; 
  $tid = $_GET['tid'];
  
  setcookie("tidCookie",$tid);


?>
<!--end of this part-->


<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <!--copied from partner--> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Make Appiontment</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> 
  <link href="css/zui.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="http://xfycn.com.cn/css/Teacher_detail.css">
  <script>
function open_win() {
  var width1 = (screen.availWidth-1200)/2;
  var height1 = (screen.availHeight-550)/2;
  window.open("http://xfycn.com.cn/php/teacher/svt.php","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=1200, height=550,left="+width1+",top="+height1+"");
}
</script>
<!--end this part-->

  <style type="text/css">
    h1 {color:black; font-size:30px; background-color: white; opacity: 0.8}
    h2 {color:white; font-size:16px; background-color: grey; opacity: 0.8}
    h3 {color:black; font-size:13px; background-color: white; opacity: 0.9}
    h4 {color:grey; font-size:20px}
  </style>
</head>

<body>
<div id="background" style="position:absolute;  top: 0; left: 0; bottom: 0; right: 0; width:100%; height:100%; z-index:-2">    
  <!-- <img src="background.jpeg" height="100%" width="100%" class="bcjpg"/>     -->
</div>



<div style="padding:50px;">
  <h1>
  <div style="padding:20px 20px 20px 50px; ">
  <table border="0">
  <tr>
  <!--照片+姓名-->
     <td>
     <table>
     <img src="<?php echo "http://xfycn.com.cn/pic/".$inf[0].".png";?>" width=200px length=200px align="absbottom"/>
     <span style="margin-left:20px; vertical-align: bottom"><?php echo"$inf[1]" ?></span>
     </table>
     </td>
  <!--学科+办公室-->
     <td>
     <table>
     <h4>
     <span style="margin-left:400px; vertical-align: center"><?php echo"所在学科: ".$inf[3]."<br><br> "?></span>
     <span style="margin-left:400px; vertical-align: center"><?php echo"办公室: ".$inf[6]."" ?></span>    
     </h4> 
     </table>
     </td>
  </tr>
  </table>
  </div>
  </h1>



  <h2>
  <div style="padding:15px; margin: 0 auto; width:800px">
  <span style="text-align:left">
  <?php echo"电话: ".$inf[7]."" ?>
  </span>
  <span style="float:right">
  <?php echo"邮箱: ".$inf[5]."" ?>
  </span>
  </div>
  </h2>



  <h3>
  <div style="padding:30px; text-align:left">
  <h1><?php echo"基本信息: <br />"?></h1>
      <?php echo"$inf[8]" ?>
  </div>
  </h3>

  <h3>
  <div style="padding:30px; text-align:left">
  <h1><?php echo"基本成果: <br />"?></h1>
      <?php echo"$inf[9]" ?>
  </div>
  </h3>
</div>

  
  
  <div style="padding-right:50px; text-align:right">
  <!--进入预约页，对应教师那儿的--> 


  <!--added from partner-->
  <form>
    <input type="button" value="预约" onclick="open_win()">
    </form>
   
    <!--end of this part-->

  <!--返回主页，这里应该是主页，但不知道主页是啥-->
  <!-- <form action="Student-homepage.html" method="post">     
    <p><input type="submit" value="返回"></p>
  </form> -->
 </div>
 </body>
</html>