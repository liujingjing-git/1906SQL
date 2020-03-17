<?php

  /*PDO预处理*/
    $user = "root";   //用户名
    $pass = "root";    //密码
    $dbh = new PDO('mysql:host=localhost;dbname=1907',$user,$pass);

    //sql语句
    $sql = "insert into p_users (user_name,email) values (:name,:email)";

    $name = "zhangsan";
    $email = "zhangsan@qq.com";

    //pdo 预处理
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':email',$email);
    //执行sql
    $stmt->execute();

    $id = $dbh->lastInsertId();  //获取自增ID
    var_dump($id);
?>  