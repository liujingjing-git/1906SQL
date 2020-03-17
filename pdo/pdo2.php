<?php

  /*mysql*/
    $user = "root";   //用户名
    $pass = "root";    //密码
    $dbh = new PDO('mysql:host=localhost;dbname=1907',$user,$pass);

    //sql语句
    // $sql = "select * from p_users"; //查询表
    $id = $_GET['id'];
    echo "未处理的参数:".$_GET['id'];echo "<br>";

    //pdo 预处理
    $stmt = $dbh->prepare("select * from p_users where id= ?");
    //绑定参数
    $stmt->bindParam(1,$id);
    //执行sql
    $stmt->execute();
    
    //遍历 循环数据
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        echo "<pre>";print_r($row);echo "</pre>";
        echo "<hr>";
    }
?>  