<?php
	/*原生sql  使用mysqli  链接mysql*/
	$mysqli = new $mysqli("localhost","root","root","1907");
	if($mysqli -> connect_error) 
	{
		echo ""
	}

?>
