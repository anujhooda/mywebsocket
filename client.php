
<html>
	<body>
	<div align="center">
	<form method="post">
		<table>
			<tr>
				<td>
					<label>Enter message:</label>
					<input type="text" name="textMessage">
					<input type="submit" name="btnSend" value="Send">
				</td>
			</tr>
			<?php 
				$host = '192.168.0.202';
                $port = 5220;
				if(isset($_POST['btnSend'])){
					$msg = $_REQUEST['textMessage'];
					$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create socket\n");
					socket_connect($sock,$host,$port);
					socket_write($sock,$msg,strlen($msg));
				}
			?>
			
		</table>
	</form>
	</div>
	</body>
</html>