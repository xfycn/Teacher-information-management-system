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
$password = "qazqaz";
$dbname = "teacherdb";

$tidd = 5;
//$tidd = $_COOKIE["TidCookie"];
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

for ($i=0; $i<25; $i++)
{
    $ttv[$i] = substr($tdata, $i, 1);

    //echo $ttv[$i];
    //echo "<br>";
}

if( $_POST )
{
    $tdata = get_data('select11',$ttv[0]).get_data('select12',$ttv[1]).get_data('select13',$ttv[2]).get_data('select14',$ttv[3]).get_data('select15',$ttv[4]);
    $tdata = $tdata.get_data('select21',$ttv[5]).get_data('select22',$ttv[6]).get_data('select23',$ttv[7]).get_data('select24',$ttv[8]).get_data('select25',$ttv[9]);
    $tdata = $tdata.get_data('select31',$ttv[10]).get_data('select32',$ttv[11]).get_data('select33',$ttv[12]).get_data('select34',$ttv[13]).get_data('select35',$ttv[14]);
    $tdata = $tdata.get_data('select41',$ttv[15]).get_data('select42',$ttv[12]).get_data('select43',$ttv[17]).get_data('select44',$ttv[18]).get_data('select45',$ttv[19]);
    $tdata = $tdata.get_data('select51',$ttv[20]).get_data('select52',$ttv[13]).get_data('select53',$ttv[22]).get_data('select54',$ttv[23]).get_data('select55',$ttv[24]);

    mysqli_query($con,"UPDATE teachers SET tdata=$tdata WHERE tid=$tid");

    echo $tdata;


}

for ($i=0; $i<25; $i++)
{
    $ttv[$i] = substr($tdata, $i, 1);

    //echo $ttv[$i];
    //echo "<br>";
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
	<div  id="afbox5">
   <h3 align="center" > 介绍</h3>

	<ul id="accordion" class="accordion">
		<li>
			<div class="link">基本信息</div>
			<div class="submenu" align="center" >
				<p ><?php echo $tintroduction; ?>吴立刚，男，汉族，1977年7月出生，博士，哈尔滨工业大学航天学院二级教授、博士生导师。从事复杂不确定动态系统的控制与信号处理研究。目前发表论文160余篇，SCI收录120余篇，SCI他引4000余次；共有27篇论文入选为ESI高被引论文，5篇论文入选为ESI热点论文，4篇第一作者论文获自动控制领域权威期刊Automatica Most Cited Article (2009-2012)，4篇论文入选中国百篇最具影响国际学术论文；在Springer和Wiley出版英文专著6部。主持国家自然科学基金、霍英东青年基金等十余项科研项目。国家杰出青年科学基金获得者，首批国家优秀青年科学基金获得者，黑龙江省杰出青年科学基金获得者；入选中组部青年拔尖人才支持计划、教育部新世纪优秀人才支持计划；获中国青年五四奖章、全国优秀博士学位论文提名奖等奖励和荣誉。作为第一完成人获黑龙江省自然科学一等奖；作为第二完成人获国家自然科学二等奖。目前担任IEEE Transactions on Automatic Control、IEEE/ASME Transactions on Mechatronics、《自动化学报》等十余个期刊编委以及担任IEEE CSS Conference Editorial Board编委。IEEE高级会员、中国自动化学会控制理论专业委员会委员。当选2015、2016年全球高被引科学家(Thomson Reuters Highly Cited Researcher)。</p>
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

<br><br><br><br>

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
  <option <?php if($ttv[0]==0) echo("selected");?> value="0" >无预约</option>
  <option <?php if($ttv[0]==1) echo("selected");?> value="1" >有预约</option>
  <option <?php if($ttv[0]==2) echo("selected");?> value="2" disabled >请求预约</option>
  <option <?php if($ttv[0]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select12" <?php  if ( $ttv[1]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[1]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[1]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[1]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[1]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select13" <?php  if ( $ttv[2]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[2]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[2]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[2]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[2]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select14" <?php  if ( $ttv[3]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[3]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[3]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[3]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[3]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select15" <?php  if ( $ttv[4]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[4]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[4]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[4]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[4]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
    </tr>
    <tr>
      <td>三四节</td>
      <td>
      <select class="form-control" name="select21" <?php  if ( $ttv[5]!=0 ){echo "disabled";}  ?>  >
  <option <?php if($ttv[5]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[5]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[5]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[5]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select22" >
  <option <?php if($ttv[6]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[6]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[6]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[6]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select23" >
  <option <?php if($ttv[7]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[7]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[7]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[7]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select24" >
  <option <?php if($ttv[8]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[8]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[8]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[8]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select25" >
  <option <?php if($ttv[9]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[9]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[9]==2) echo("selected");?> value="2">请求预约</option>
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
  <option <?php if($ttv[10]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[10]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select32" >
  <option <?php if($ttv[11]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[11]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[11]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[11]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select33" >
  <option <?php if($ttv[12]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[12]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[12]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[12]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select34" >
  <option <?php if($ttv[13]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[13]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[13]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[13]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select35" >
  <option <?php if($ttv[14]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[14]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[14]==2) echo("selected");?> value="2">请求预约</option>
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
  <option <?php if($ttv[15]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[15]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select42" >
  <option <?php if($ttv[16]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[16]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[16]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[16]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select43" >
  <option <?php if($ttv[17]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[17]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[17]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[17]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select44" >
  <option <?php if($ttv[18]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[18]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[18]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[18]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select45" >
  <option <?php if($ttv[19]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[19]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[19]==2) echo("selected");?> value="2">请求预约</option>
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
  <option <?php if($ttv[20]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[20]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
      <td>
      <select class="form-control" name="select52" >
  <option <?php if($ttv[21]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[21]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[21]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[21]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select53" >
  <option <?php if($ttv[22]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[22]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[22]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[22]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select54" >
  <option <?php if($ttv[23]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[23]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[23]==2) echo("selected");?> value="2">请求预约</option>
  <option <?php if($ttv[23]==3) echo("selected");?> value="3">不接受预约</option>
</select>
</td>
<td>
      <select class="form-control" name="select55" >
  <option <?php if($ttv[24]==0) echo("selected");?> value="0">无预约</option>
  <option <?php if($ttv[24]==1) echo("selected");?> value="1">有预约</option>
  <option <?php if($ttv[24]==2) echo("selected");?> value="2">请求预约</option>
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




    <!-- 在此处编码你的创意 -->

    <!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
    <script src="js/t.jquery.js"></script>
  	<script src="js/index.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="js/zui.min.js"></script>
  </body>
</html>