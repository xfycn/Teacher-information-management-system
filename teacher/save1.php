<?php
header("Content-type: text/html; charset=utf-8");

$servername = "localhost";
$username = "root";
$password = "qazqaz";
$dbname = "teacherdb";

//$tidd="6";
$tidd = $_COOKIE["TidCookie"];
$tintroduction = $_POST["tintroduction"];
$con=mysqli_connect($servername,$username,$password,$dbname);

// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT * FROM teachers WHERE tid='$tidd' ");

while($row = mysqli_fetch_array($result))
{
    $tid = $row['tid'];
    $tname = $row['tname'];
    $tdata = $row['tdata'];
    //$tintroduction= $row['tintroduction'];
}

echo "$tname";

mysqli_query($con,"UPDATE teachers SET tintroduction='$tintroduction' WHERE tid='$tid'");


mysqli_close($con);

   echo "$tidd";

echo "$tintroduction";


header('Location: http://localhost/teacher/afterlog.php');
?>