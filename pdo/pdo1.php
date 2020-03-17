<?php

  /*mysql*/
    $user = "root";   //用户名
    $pass = "root";    //密码
    $dbh = new PDO('mysql:host=localhost;dbname=1907',$user,$pass);

    //sql语句
    // $sql = "select * from p_users"; //查询表
    $id = $_GET['id'];
    echo "未处理的参数 :".$id;echo "<br>";

    $id = intval($_GET['id']);
    echo "处理过得参数:".$id;echo "<br>";
    $sql = "select * from p_users  where id={$id}"; //指定某个字段
    
    //发送查询
    $res = $dbh->query($sql);

    //遍历 循环数据
    while($row=$res->fetchAll())
    {
        echo "<pre>";print_r($row);echo "</pre>";
        echo "<hr>";
    }
?>  