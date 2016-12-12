

<?php
header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "qazqaz";
$dbname = "teacherdb";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname );
mysqli_query($conn, "set names 'utf8'");


// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}


$tname = $_POST["tname"];
$tpassword = $_POST["tpassword"];
$tsex = $_POST["tsex"];
$tmajor = $_POST["tmajor"];
$tinterest = $_POST["tinterest"];
$toffice = $_POST["toffice"];
$tphone = $_POST["tphone"];
$temail = $_POST["temail"];
$tachieve = $_POST["tachieve"];
$tbasicinf = $_POST["tbasicinf"];
$tdata = "0000000000000000000000000";
$tsv = "";
 //储存教师预定的情况，25位，一周五天，一天五节课
 //“0”无预约 “1”有预约 “2”请求预约 “3”不接受预约



$sql = "INSERT INTO teachers ".
    "(tname,tpassword,tsex,tmajor,tinterest,toffice,tphone,temail,tachieve,tbasicinf,tdata,tsv) ".
    "VALUES ".
    "('$tname','$tpassword','$tsex','$tmajor','$tinterest','$toffice','$tphone','$temail','$tachieve','$tbasicinf','$tdata','$tsv')";




$retval = mysqli_query($conn , $sql);

 if (!$retval )
 {
   die('Error: ' . mysqli_errno($conn));
 }


mysqli_close($conn);

header('Location: http://localhost/teacher/tlogin.php');

?>

