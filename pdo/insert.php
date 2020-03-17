<?php

  /*mysql 添加*/
    
    $user = "root";   //用户名
    $pass = "root";    //密码
    $dbh = new PDO('mysql:host=localhost;dbname=1907',$user,$pass);

    //sql语句
    $sql = "insert into  p_users ('user_name','email') values ('zhangsan','zhangsan@qq.com')"; 

    //执行sql语句
    $res = $dbh->query($sql);
    var_dump($res);
?>  