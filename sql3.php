<?php
	
	/*原生sql  使用mysqli  链接mysql*/
	$mysqli = new mysqli("localhost","root","root","1907");
	
				//如果连接错误
	if($mysqli->connect_errno) 
	{
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
	}
	echo "链接成功";echo "<br>";echo "<hr>";
    
    $name1 = $_GET['name'];
    echo "未经处理:".$name;echo "<br>";
    $name2 = htmlentities($name1); //转为html实体
    echo "处理过得:".$name2;echo "<br>";
    
    $sql = "select * from p_users where user_name='{$name2}'";
    $res = $mysqli->query($sql);

    while($row = $res->fetch_assoc())
    {
            var_dump($row);
            echo "<pre>";print_r($row);echo "</pre>";
    } 
?>
