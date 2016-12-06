

<?php
header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "qazqaz";
$dbname = "teacherdb";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname );


// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";

 $tname = $_POST["tname"];
 $tpassword = $_POST["tpassword"];
 $temail = $_POST["temail"];
 $tintroduction = $_POST["tintroduction"];
 $tdata = "0000000000000000000000000";
 //储存教师预定的情况，25位，一周五天，一天五节课
 //“0”无预约 “1”有预约 “2”请求预约 “3”不接受预约

echo '</br>';

echo $tintroduction;

$sql = "INSERT INTO teachers ".
    "(tname,tpassword,temail,tintroduction,tdata) ".
    "VALUES ".
    "('$tname','$tpassword','$temail','$tintroduction','$tdata')";




$retval = mysqli_query($conn , $sql);

 if (!$retval )
 {
   die('Error: ' . mysqli_errno($conn));
 }
 echo "添加一条记录";

mysqli_close($conn);


//$sql = 'DROP DATABASE myDB';
//mysqli_query( $sql, $conn );
//$sql = "DROP TABLE IF EXISTS myDB";


echo '</br>';

echo "注册成功";

header('Location: http://localhost/teacher/tlogin.php');

?>

