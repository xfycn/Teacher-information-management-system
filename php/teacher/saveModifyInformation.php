<?php
header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";

//$tidd="6";
$tidd = $_COOKIE["TidCookie"];
$tname = $_POST["tname"];
$tmajor = $_POST["tmajor"];
$tinterest = $_POST["tinterest"];
$toffice = $_POST["toffice"];
$tphone = $_POST["tphone"];
$temail = $_POST["temail"];
$tachieve = $_POST["tachieve"];
$tbasicinf = $_POST["tbasicinf"];

$con=mysqli_connect($servername,$username,$password,$dbname);
mysqli_query($con, "set names 'utf8'");

// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}




echo "$tname";

//(tacnum,tname,tpassword,tsex,tmajor,toffice,tphone,temail,tachieve,tdata)
//mysqli_query($con,"UPDATE teacher_information SET tname='$tname' and tsex='$tsex' and tmajor='$tmajor' and toffice='$toffice' and tphone='$tphone' and temail='$temail' and tachieve='$tachieve' WHERE tid='$tid'");
mysqli_query($con,"UPDATE teacher_information SET tname='$tname'  WHERE tid='$tidd'");
mysqli_query($con,"UPDATE teacher_information SET tmajor='$tmajor'  WHERE tid='$tidd'");
mysqli_query($con,"UPDATE teacher_information SET tinterest='$tinterest'  WHERE tid='$tidd'");
mysqli_query($con,"UPDATE teacher_information SET toffice='$toffice'  WHERE tid='$tidd'");
mysqli_query($con,"UPDATE teacher_information SET tphone='$tphone'  WHERE tid='$tidd'");
mysqli_query($con,"UPDATE teacher_information SET temail='$temail'  WHERE tid='$tidd'");
mysqli_query($con,"UPDATE teacher_information SET tachieve='$tachieve'  WHERE tid='$tidd'");
mysqli_query($con,"UPDATE teacher_information SET tbasicinf='$tbasicinf'  WHERE tid='$tidd'");

mysqli_close($con);

   echo "$tidd";

//echo "$tintroduction";


header('Location: http://xfycn.com.cn/php/teacher/afterLogin.php');
?>