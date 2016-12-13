<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname1 = "teacher";
    $dbname2 = "student";
    $tidd = $_COOKIE["TidCookie"];
    $con =   mysqli_connect($servername,$username,$password,$dbname1);
     $con1 =   mysqli_connect($servername,$username,$password,$dbname2);
     mysqli_query($con, "set names 'utf8'");
     mysqli_query($con1, "set names 'utf8'");
    // 检测连接
    if (mysqli_connect_errno())
    {
        echo "连接失败: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM teacher_information WHERE tid=$tidd ");
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
        $tsv = $row['tsv'];
        
    }

    if ($tsex == 0 ) {
      $tsex1 = "男";
    }else{
      $tsex1 = "女";
    }

    $data1=array("一","二","三","四","五");
    $data2=array("一二","三四","五六","七八","九十");
    $arr=explode(" ",$tsv);
    for ($i=0; $i<count($arr); $i++,$i++)
    {
        $result = mysqli_query($con1,"SELECT * FROM student_information WHERE id='$arr[$i]' ");

        while($row = mysqli_fetch_array($result))
        {
            $namearr[$i/2] = $row["name"]."在周".$data1[($i+1)/5].$data2[($i+1)%5]."节请求预约";
            
        }
    }
    
    if( $_POST )
    {

        $tdata = $_POST['select11'].$_POST['select12'].$_POST['select13'].$_POST['select14'].$_POST['select15'];
        $tdata = $tdata.$_POST['select21'].$_POST['select22'].$_POST['select23'].$_POST['select24'].$_POST['select25'];
        $tdata = $tdata.$_POST['select31'].$_POST['select32'].$_POST['select33'].$_POST['select34'].$_POST['select35'];
        $tdata = $tdata.$_POST['select41'].$_POST['select42'].$_POST['select43'].$_POST['select44'].$_POST['select45'];
        $tdata = $tdata.$_POST['select51'].$_POST['select52'].$_POST['select53'].$_POST['select54'].$_POST['select55'];

        mysqli_query($con,"UPDATE teacher_information SET tdata='$tdata' WHERE tid='$tidd'");


    }


    for ($i=0; $i<25; $i++)
    {
        $ttv[$i] = substr($tdata, $i, 1);
    }


    mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>教师主页</title>
    <link href="dist/css/zui.min.css" rel="stylesheet">
    <link href="teacher.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
  </head>
  <body>
    <img src="image/4.jpg" width="100%" height="200px"  alt="教师主页背景">
    <h2 align="right" > 欢迎你，<?php echo $tname; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h2>
   <div class="container-fixed-sm" id="afbox3">

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
      <select class="form-control" name="select11" >
  <option <?php if($ttv[0]==0) echo("selected");?> value="0" >无预约</option>
  <option <?php if($ttv[0]==1) echo("selected");?> value="1" >有预约</option>
  <option <?php if($ttv[0]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[0]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select12"  >
  <option <?php if($ttv[1]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[1]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[1]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[1]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select13" >
  <option <?php if($ttv[2]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[2]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[2]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[2]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select14" >
  <option <?php if($ttv[3]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[3]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[3]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[3]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select15" >
  <option <?php if($ttv[4]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[4]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[4]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[4]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>三四节</td>
      <td>
      <select class="form-control" name="select21" >
  <option <?php if($ttv[5]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[5]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[5]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[5]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select22" >
  <option <?php if($ttv[6]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[6]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[6]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[6]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select23" >
  <option <?php if($ttv[7]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[7]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[7]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[7]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select24" >
  <option <?php if($ttv[8]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[8]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[8]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[8]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select25" >
  <option <?php if($ttv[9]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[9]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[9]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[9]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>五六节</td>
      <td>
      <select class="form-control" name="select31" >
  <option <?php if($ttv[10]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[10]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[10]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[10]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select32" >
  <option <?php if($ttv[11]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[11]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[11]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[11]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select33" >
  <option <?php if($ttv[12]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[12]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[12]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[12]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select34" >
  <option <?php if($ttv[13]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[13]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[13]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[13]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select35" >
  <option <?php if($ttv[14]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[14]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[14]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[14]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>七八节</td>
      <td>
      <select class="form-control" name="select41" >
  <option <?php if($ttv[15]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[15]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[15]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[15]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select42" >
  <option <?php if($ttv[16]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[16]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[16]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[16]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select43" >
  <option <?php if($ttv[17]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[17]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[17]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[17]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select44" >
  <option <?php if($ttv[18]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[18]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[18]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[18]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select45" >
  <option <?php if($ttv[19]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[19]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[19]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[19]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>九十节</td>
      <td>
      <select class="form-control" name="select51" >
  <option <?php if($ttv[20]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[20]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[20]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[20]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select52" >
  <option <?php if($ttv[21]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[21]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[21]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[21]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select53" >
  <option <?php if($ttv[22]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[22]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[22]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[22]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select54" >
  <option <?php if($ttv[23]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[23]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[23]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[23]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select55" >
  <option <?php if($ttv[24]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[24]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[24]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[24]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>

    </tr>
  </tbody>

</table>
<br>

  <div align="center">
  <input class="btn btn-primary" type="submit" name="Submit" value="提交">
  &nbsp;&nbsp;&nbsp;
  <button class="btn" type="reset" >重置</button>
  </div>
  <br><br>
  </form>
  </div>

   <div  id="afbox4">
   <h3 align="center" > 介绍</h3>
	<ul id="accordion" class="accordion">
		<li>
			<div class="link">基本信息</div>
			<div class="submenu"  align="center" >
      <br>
      <p ><?php echo $tbasicinf; ?></p>
			</div>
		</li>
		<li>
			<div class="link">个人信息</div>
			<div class="submenu" align="justify" >
      <br>
      <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姓&nbsp;&nbsp;名：<?php echo $tname; ?></p>
      <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;性&nbsp;&nbsp;别：<?php echo $tsex1; ?></p>
      <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电&nbsp;&nbsp;话：<?php echo $tphone; ?></p>
      <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮&nbsp;&nbsp;箱：<?php echo $temail; ?></p>
      <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;办公地点：<?php echo $toffice; ?></p>
      <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目前就职：<?php echo $tmajor; ?></p>
      <p >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;所在学科：<?php echo $tinterest; ?></p>
      </div>
		</li>
		<li>
			<div class="link">成就经历</div>
      <div class="submenu" align="center" >
      <br>
			<p ><?php echo $tachieve; ?></p></div>
		</li>
	</ul>
	<div align="center">
	<a class="btn btn-primary" href="http://xfycn.com.cn/php/teacher/modifyInformation.php">修改</a>
	</div>
</div>

<div id="afbox2">
	<img src="<?php echo "http://xfycn.com.cn/pic/".$tidd.".png";?>" width="100%" height="100%"  alt="响">
</div>
   
<div  id="afbox42">
     <h2> 预约情况 </h2>
     <?php 
      for ($i=0; $i<count($namearr); $i++){ 
        echo $namearr[$i]."<br>"; 
        } 
      ?>
</div>
   
    <script src="js/t.jquery.js"></script>
  	<script src="js/index.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/zui.min.js"></script>
  </body>
</html>

