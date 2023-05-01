<!DOCTYPE html>
<html>
<head>
    <title>用户信息查询结果</title>
</head>
<body>
<h2>查询结果如下</h2>

<?php
    // fill your database's information here
    $servername = "localhost"; // change it into your database's location
    $username = "root"; // change it into your database's user
    $password = "123456"; // change it into your database's password
    $mydb = "test"; // change it into your database's name

    $conn = new mysqli($servername, $username, $password, $mydb);//连接数据库
    $user = $_POST['name'];//从process.php提交的表单获取username
    $passwd = $_POST['passwd'];
    $query = "select id, name, email, passwd from user where name='$user' and passwd='$passwd' and visibility = 0;";


    $result = $conn->query($query);

    if ($result->num_rows > 0 && $user != '') {
        // 输出数据
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . "<br>" . " 姓名: " . $row["name"] . "<br>" . "邮箱:" . $row["email"] . "<br>" . "密码: " . $row["passwd"] . "<br>";
        }
    } else {
        echo "0 结果";//>>> ($result->num_rows > 0) --> False, mean no data match the query.
    }
    $conn->close();
?>

<h3><a href="html/index.html">返回导航</a></h3> <!-- return to the index -->

</body>
</html>