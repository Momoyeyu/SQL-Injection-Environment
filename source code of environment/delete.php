<!DOCTYPE html>
<html>
<head>
    <title>用户信息查询结果</title>
</head>
<body>
<h2 align="center">数据已清除</h2>

<?php
    // fill your database's information here
    $servername = "localhost"; // change it into your database's location
    $username = "root"; // change it into your database's user
    $password = "123456"; // change it into your database's password
    $mydb = "test"; // change it into your database's name

    $conn=new mysqli($servername,$username,$password,$mydb); // link to the database
    $user=$_POST['name'];// get username from process.php
    $passwd=&_POST['passwd'];
    $query="select * from user where name='$user' and passwd='$passwd';";


    $result=$conn->query( $query);

    if ($result->num_rows > 0) {
        $query="delete from user where name='$user' and passwd='$passwd';";
        $result=$conn->query( $query);
        if ($result->num_rows > 0){
            echo "<script>alert('删除成功');location='./html/index.html</script>";
        }else{
            echo "<script>alert('删除失败！');location='./html/delete.html</script>";
        }
    } else {
        echo "<script>alert('用户不存在！');location='./html/delete.html</script>";//>>> ($result->num_rows > 0) --> False
    }
    $conn->close();
?>

<h3><a href="html/index.html">返回导航</a></h3> <!-- return to the index -->

</body>
</html>