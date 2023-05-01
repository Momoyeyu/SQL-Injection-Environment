<?php
header('Content-type:text/html;charset=utf8');

//连接数据库
$con=mysqli_connect("localhost","root","123456","test");
if (mysqli_connect_errno($con))
{
    echo "连接 MySQL 失败: " . mysqli_connect_error();
} 

// I see some people hook up to their database thought this file, but it doesn't work for me.
// If you know how to use let this file work so that we don't need to link database at every php file, email me (momoyeyu@outlook.com)
// It will be convenient for all people use this environment!


