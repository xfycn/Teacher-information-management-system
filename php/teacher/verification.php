<?php
header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teacher";

// 创建连接
$con = mysqli_connect($servername, $username, $password, $dbname );
mysqli_query($con, 'set names utf8');

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $con->connect_error);
}


$tid = $_POST["tname"];
$tpassword = $_POST["tpassword"];
$sql = "SELECT tname, tpassword, tid FROM teacher_information";
$result = $con->query($sql);
$f=0;

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        if ( ($tid==$row["tid"]) && ($tpassword==$row["tpassword"]))
        {
            echo $row["tname"]."登入成功";
            setcookie("TidCookie",$row["tid"]);
            header('Location: http://xfycn.com.cn/php/teacher/afterLogin.php');
            $f=1;
        }else {     
        }
    }
    if ($f==0) {
       // header('Location: http://xfycn.com.cn/php/Teacher-login.php'); 

    }

} 



?>


