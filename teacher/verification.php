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
echo "连接成功";

$sql = "SELECT tname, tpassword, tid FROM teachers";
$result = $conn->query($sql);
echo "连接成功";

if ($result->num_rows > 0) {
    // 输出每行数据
    echo "连接成功1";
    while($row = $result->fetch_assoc()) {
        echo "连接成功1";
        if ( ($tname==$row["tname"]) && ($tpassword==$row["tpassword"]))
        {
            echo "登入成功";
            setcookie("TidCookie",$row["tid"]);
            header('Location: http://localhost/teacher/afterlog.php');
            //printf("<a href=\"afterlog.php?id=%s\">登入成功 </a>\n",
              //  $row["username"],$row["userpassword"]);
        }

    }
} else {
    echo "0 个结果";
}
?>


