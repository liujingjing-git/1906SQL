<?php
	
	/*原生sql  使用mysqli  链接mysql*/
	$mysqli = new mysqli("localhost","root","root","1907");
	
				//如果连接错误
	if($mysqli->connect_errno) 
	{
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
	}
	echo "链接成功";echo "<br>";echo "<hr>";
	
	echo "未处理前的参数 : ".$_GET['name'];echo "<br>";
	$name = $_GET['name'];
	
	echo "接收的参数:".$uid;echo "<br>";
	$sql = "select * from p_users where user_name='{$name}'";
    echo $sql;
    
    //执行
	$res = $mysqli->query($sql);
	while($row = $res->fetch_assoc()) //遍历
	{
		echo "<pre>";print_r($row);echo "</pre>";
	}
?>
