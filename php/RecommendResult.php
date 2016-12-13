<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Search Result</title>
  <link rel="stylesheet" type="text/css" href="http://xfycn.com.cn/css/recommend.css">
</head>
<body>
<div id="background" style="position:absolute;  top: 0; left: 0; bottom: 0; right: 0; width:100%; height:100%; opacity: 0.35; z-index:-2">    
  <img src="background.jpeg" height="100%" width="100%"/>    
</div>

<div style="padding:30px; text-align:center">
<h1>教师查询结果</h1>
</div>



<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('数据库连接失败: ' . mysql_error());
}
else
{
  $id = "123";
    //open the database
  mysql_select_db("teacher", $con);
  mysql_query("set names 'utf8'"  );
  $major = $_POST['Major'];
  $interest = $_POST['Interest'];
  $result = mysql_query("SELECT * FROM teacher_information WHERE tmajor = '".$major."' and tinterest = '".$interest."'");
  $inf = array();
  $i = 0;

  while($row = mysql_fetch_array($result))
  {
    $inf[$i][0] = $row['tid'];
    $inf[$i][1] = $row['tname'];
    $inf[$i][2] = $row['tsex'];
    $inf[$i][3] = $row['tmajor'];
    $i = $i + 1;
  }
  ?>
  <div style="padding:0px 100px">
  <?php
  $j=0;
  if($i > $j + 1){
    for($j=0; $j<$i; $j=$j+2){
      if($i > $j + 1){
        echo "<br><br><br>";
        ?>
        <table border="0">
        <tr>
        <!--奇数的人-->
           <td>
           <table  border="0" align="left" width="450">
           <img src="<?php echo "http://xfycn.com.cn/pic/".$inf[$j][0].".png";?>" width=150px length=150px/>
           <span><?php echo '<br><br>姓名：<a href="TeacherDetail.php?tid=',$inf[$j][0],'&sid=',$id,'">',$inf[$j][1],'</a>' ?></span>
           <span>
           <?php 
           if($inf[$j][2] == 0){
            echo '<br><br>性别：男';
           }
           else{
            echo '<br><br>性别：女';
           }
           ?>
           </span>
           <span><?php echo '<br><br>专业：',$inf[$j][3],'' ?></span>

           </table>
           </td>
        <!--偶数的人-->
           <td>
           <table border="0" align="center" width="450">
          
           <img src="<?php echo "http://xfycn.com.cn/pic/".$inf[$j + 1][0].".png";?>" width=150px length=150px />
           <span><?php echo '<br><br>姓名：<a href="TeacherDetail.php?tid=',$inf[$j + 1][0],'&sid=',$id,'">',$inf[$j + 1][1],'</a>' ?></span>
           <span>
           <?php 
           if($inf[$j + 1][2] == 0){
            echo '<br><br>性别：男';
           }
           else{
            echo '<br><br>性别：女';
           }
           ?>
           </span>
           <span><?php echo '<br><br>专业：',$inf[$j + 1][3],'' ?></span>
        
           </table>
           </td>
        </tr>
        </table>
        <?php
      }
      //有奇数人对应这个名字
      else if ($i > $j){
        echo "<br><br><br>";
        ?>
        <table  border="0" align="left">
           <img src="<?php echo "http://xfycn.com.cn/pic/".$inf[$j][0].".png";?>" width=150px length=150px/>
           <span><?php echo '<br><br>姓名：<a href="TeacherDetail.php?tid=',$inf[$j][0],'&sid=',$id,'">',$inf[$j][1],'</a>' ?></span>
           <span>
           <?php 
           if($inf[$j][2] == 0){
            echo '<br><br>性别：男';
           }
           else{
            echo '<br><br>性别：女';
           }
           ?>
           </span>
           <span><?php echo '<br><br>专业：',$inf[$j][3],'' ?></span>

        </table>
      <?php
      }

    }
  }
  //只有一个人对应这个名字
  else if($i != 0){
    echo "<br><br><br>";
    ?>
    <table  border="0" align="left">
           <img src="<?php echo "http://xfycn.com.cn/pic/".$inf[$j][0].".png";?>" width=150px length=150px/>
           <span><?php echo '<br><br>姓名：<a href="TeacherDetail.php?tid=',$inf[$j][0],'&sid=',$id,'">',$inf[$j][1],'</a>' ?></span>
           <span>
           <?php 
           if($inf[$j][2] == 0){
            echo '<br><br>性别：男';
           }
           else{
            echo '<br><br>性别：女';
           }
           ?>
           </span>
           <span><?php echo '<br><br>专业：',$inf[$j][3],'' ?></span>

           </table>
    <?php
  }
  else{
    echo "<li style='font-size:20px'><font color=ff0000>学校没有该教师，请重新输入</font></li>";
 
  }
}
mysql_close($con);
?>



</div>
</body>
</html>











