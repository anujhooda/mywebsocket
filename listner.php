<!DOCTYPE html>
<html>
<head>
	<title>TCP Test Server</title>
</head>
<body>
		<h1>TCP Data (data may take upto 3-5 seconds to appear)</h1>
<div id="data">

</div>
<script type="text/javascript">
	setInterval(function(){
		var obj;
			if(window.XMLHttpRequest){
			obj=new XMLHttpRequest();
		}else{
			obj=new ActiveXObject("Microsoft.XMLHTTP");
		}
		obj.onreadystatechange=function(){
				if (obj.readyState==3) {
				document.getElementById('data').innerHTML="<h2>Loading data...</h2>";
				
			}
			if(obj.readyState==4){
				document.getElementById('data').innerHTML="<pre style='font-size:20px;'>"+obj.responseText.toString()+"</pre>";
			}
		}
		obj.open('GET','test.txt',true);
		obj.send();
	},1000);
</script>
</body>
</html>