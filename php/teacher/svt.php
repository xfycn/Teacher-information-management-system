<?php

header("Content-type: text/html; charset=utf-8");

Function get_data($val,$num){

    if ( $num==0){
        $data = $_POST[ $val ];
    }else{
        $data = $num;
        }
    return $data; }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";
$dbname1 = "student";
$tidd = $_COOKIE["tidCookie"];
$sidd = $_COOKIE["sidCookie"];
echo $tidd.$sidd."asdadqwdqwdqwdq";
//$tidd = $_COOKIE["TidCookie"];

$con=mysqli_connect($servername,$username,$password,$dbname);
$con1=mysqli_connect($servername,$username,$password,$dbname1);
mysqli_query($con, "set names 'utf8'");
mysqli_query($con1, "set names 'utf8'");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM student_information WHERE id=$sidd ");

while($row = mysqli_fetch_array($result))
{
    $sid = $row['id'];
    $sname = $row["name"];
    
}

$result = mysqli_query($con,"SELECT * FROM teacher_information WHERE tid=$tidd ");

while($row = mysqli_fetch_array($result))
{
    $tid = $row['tid'];
    $tdata = $row['tdata'];
    $tsv = $row['tsv'];

}

for ($i=0; $i<25; $i++)
{
    $ttv[$i] = substr($tdata, $i, 1);
}

if( $_POST )
{
    $tdata = get_data('select11',$ttv[0]).get_data('select12',$ttv[1]).get_data('select13',$ttv[2]).get_data('select14',$ttv[3]).get_data('select15',$ttv[4]);
    $tdata = $tdata.get_data('select21',$ttv[5]).get_data('select22',$ttv[6]).get_data('select23',$ttv[7]).get_data('select24',$ttv[8]).get_data('select25',$ttv[9]);
    $tdata = $tdata.get_data('select31',$ttv[10]).get_data('select32',$ttv[11]).get_data('select33',$ttv[12]).get_data('select34',$ttv[13]).get_data('select35',$ttv[14]);
    $tdata = $tdata.get_data('select41',$ttv[15]).get_data('select42',$ttv[12]).get_data('select43',$ttv[17]).get_data('select44',$ttv[18]).get_data('select45',$ttv[19]);
    $tdata = $tdata.get_data('select51',$ttv[20]).get_data('select52',$ttv[13]).get_data('select53',$ttv[22]).get_data('select54',$ttv[23]).get_data('select55',$ttv[24]);

    for ($i=0; $i<25; $i++)
    {
      if( $ttv[$i] != substr($tdata, $i, 1) ){
        $tsv = $tsv.$sidd." ".$i." ";
      }
      
    }

    mysqli_query($con,"UPDATE teacher_information SET tsv='$tsv' WHERE tid='$tid'");
    mysqli_query($con,"UPDATE teacher_information SET tdata='$tdata' WHERE tid='$tid'");




    echo '<script>window.close();</script>'; 

}

for ($i=0; $i<25; $i++)
{
    $ttv[$i] = substr($tdata, $i, 1);
}


mysqli_close($con);
mysqli_close($con1);
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>预约教师</title>
    <link href="dist/css/zui.min.css" rel="stylesheet">
    <link href="teacher.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
    <script>
      function aler() {
        alert("预约成功");
      }</script>
          
  </head>
  <body>
	<img src="image/4.jpg" width="100%" height="200px"  alt="响应式图片测试">
	
   
<form name="form1" enctype="multipart/form-data" method="post" action="">

   <table class="table table-bordered " >
  <thead >
    <tr>
      <th>日期</th>
      <th>周一</th>
      <th>周二</th>
      <th>周三</th>
      <th>周四</th>
      <th>周五</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>一二节</td>
      <td>
      <select class="form-control" name="select11" <?php  if ( $ttv[0]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[0]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[0]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[0]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[0]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select12" <?php  if ( $ttv[1]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[1]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[1]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[1]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[1]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select13" <?php  if ( $ttv[2]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[2]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[2]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[2]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[2]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select14" <?php  if ( $ttv[3]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[3]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[3]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[3]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[3]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select15" <?php  if ( $ttv[4]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[4]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[4]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[4]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[4]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>三四节</td>
      <td>
      <select class="form-control" name="select21" <?php  if ( $ttv[5]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[5]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[5]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[5]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[5]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select22" <?php  if ( $ttv[6]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[6]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[6]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[6]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[6]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select23" <?php  if ( $ttv[7]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[7]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[7]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[7]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[7]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select24" <?php  if ( $ttv[8]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[8]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[8]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[8]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[8]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select25" <?php  if ( $ttv[9]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[9]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[9]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[9]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[9]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>五六节</td>
      <td>
      <select class="form-control" name="select31" <?php  if ( $ttv[10]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[10]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[10]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[10]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[10]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select32" <?php  if ( $ttv[11]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[11]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[11]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[11]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[11]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select33" <?php  if ( $ttv[12]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[12]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[12]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[12]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[12]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select34" <?php  if ( $ttv[13]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[13]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[13]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[13]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[13]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select35" <?php  if ( $ttv[14]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[14]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[14]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[14]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[14]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>七八节</td>
      <td>
      <select class="form-control" name="select41" <?php  if ( $ttv[15]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[15]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[15]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[15]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[15]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select42" <?php  if ( $ttv[16]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[16]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[16]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[16]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[16]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select43" <?php  if ( $ttv[17]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[17]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[17]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[17]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[17]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select44" <?php  if ( $ttv[18]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[18]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[18]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[18]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[18]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select45" <?php  if ( $ttv[19]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[19]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[19]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[19]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[19]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>九十节</td>
      <td>
      <select class="form-control" name="select51" <?php  if ( $ttv[20]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[20]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[20]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[20]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[20]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select52" <?php  if ( $ttv[21]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[21]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[21]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[21]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[21]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select53" <?php  if ( $ttv[22]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[22]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[22]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[22]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[22]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td> 
<td>
      <select class="form-control" name="select54" <?php  if ( $ttv[23]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[23]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[23]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[23]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[23]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select55" <?php  if ( $ttv[24]!=0 ){echo "disabled";}  ?>>
  <option <?php if($ttv[24]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[24]==1) echo("selected");?> value="1" disabled >有预约</option>
  <option <?php if($ttv[24]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[24]==3) echo("selected");?> value="3" disabled >不接受预约</option>
</select>
</td>

    </tr>
  </tbody>

</table>
<br>

<div align="center">
   <input class="btn btn-primary" type="submit" name="Submit" onclick="aler()" value="提交">

   &nbsp;&nbsp;&nbsp;
   <button class="btn" type="reset" >重置</button>
   </div>
   <br><br>
   </form>



    <!-- 在此处编码你的创意 -->

    <!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
    <script src="js/t.jquery.js"></script>
  	<script src="js/index.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="js/zui.min.js"></script>
  </body>
</html>