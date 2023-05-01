<?php
    // fill your database's information here
    $servername = "localhost"; // change it into your database's location
    $username = "root"; // change it into your database's user
    $password = "123456"; // change it into your database's password
    $mydb = "test"; // change it into your database's name

    $conn = new mysqli($servername, $username, $password, $mydb);
    /*上面这段是去连接数据库*/
    $name = $_POST['name'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];


    $usernamecheck = $_POST['name'];// get userid from process.php

    if (!$name || !$passwd || !$email) {
        echo "<script>alert('数据不能为空!');location='./html/insert.html</script>";
    }
    $query = "select * from user where name='$usernamecheck'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {//>>> ($result->num_rows > 0) --> True, someone used the name
        echo "<script>alert('Name existed or illegal!');location='./html/insert.html'</script>";
    } else {

        $query = "insert into user(name, email, passwd, visibility) values('{$name}','{$email}','{$passwd}', 0);";
        /*这段其实就是把用户插入的数据用$_POST[]去读出来，拼接到insert语句中去添加数据,目前还只是一个语句，没有执行*/
        if (!$conn->query($query)) {
            echo "数据库发生错误！</br>"; // database has an error, it may happen if network f--ked
            printf("Error: %s\n", mysqli_error($conn));
        } else {
            echo "<script>alert('填写顺利完成!');location='./html/index.html'</script>";
        }

    }

?>

<html>
<body>
</br>
<a href="html/insert.html">再次尝试</a> <!-- try again -->
</br>
<a href="html/index.html">返回首页</a> <!-- return to the index -->
</body>
</html>
