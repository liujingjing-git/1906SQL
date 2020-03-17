<?php
	
	/*原生sql  使用mysqli  链接mysql*/
	$mysqli = new mysqli("localhost","root","root","1907");
	
				//如果连接错误
	if($mysqli->connect_errno) 
	{
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
	}
	echo "链接成功";echo "<br>";echo "<hr>";
	
	echo "未处理前的参数 : ".$_GET['uid'];echo "<br>";
	$uid = intval($_GET['uid']);
	
	echo "接收的参数:".$uid;echo "<br>";
	// $uid = $_GET['uid'];
	$sql = "select * from p_users where id=".$uid;
	
	//执行
	$res = $mysqli->query($sql);
	while($row = $res->fetch_assoc())
	{
		echo "<pre>";print_r($row);echo "</pre>";
	}
?>
