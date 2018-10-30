<?php
$host = '192.168.0.202';
$port = 5220;
set_time_limit(0);
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create socket\n");
socket_bind($sock,$host,$port) or die("Could not bind to socket\n");
socket_listen($sock) or die("Could not listen to socket\n");
echo "listening for connection";

do{
	$accept =socket_accept($sock);
	$msg = socket_read($accept,1024);
	
	$msg = trim($msg);
	echo "\n".$msg."\n";

	$file = fopen("test.txt","w");
	fwrite($file,$msg);
	fclose($file);

	
}while(true);

socket_close($accept);
socket_close($sock);
?>
