<?php
    // fill your database's information here
    $servername = "localhost"; // change it into your database's location
    $username = "root"; // change it into your database's user
    $password = "123456"; // change it into your database's password
    $mydb = "test"; // change it into your database's name

    $conn=new mysqli($servername,$username,$password,$mydb);
    $user=$_POST['name'];
    $passwd=$_POST['passwd'];
    $email=$_POST['email'];
    $query="select * from user where name='$user' and passwd='$passwd'";
    $result=$conn->query($query);

if ($result->num_rows > 0) {//>>> ($result->num_rows > 0) --> True, someone used the name
    echo "<script>alert('Name has been used!');location='./html/insert.html'</script>";
}
else{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];
    $query="insert into user(name, email, passwd) values('{$name}','{$email}','{$passwd}');";
    /*这段其实就是把用户插入的数据用$_POST[]去读出来，拼接到insert语句中去添加数据,目前还只是一个语句，没有执行*/
    if (!$conn->query($query)) {
        echo "用户名已存在！<br/>";
        printf("Error: %s\n", mysqli_error($conn));
    }else{
        echo "恭喜你，已经成功注册账号"; // success
    }

}
