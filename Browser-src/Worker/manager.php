<html>
<head><title>HealthKeeper - Manager</title>
</head>
<body>

<?php

if(isset($_POST['ip'])){

	$file = fopen("config.txt", "w+");
	$k = "Master IP : ".$_POST['ip'];
	echo "Master IP Set to : ".$_POST['ip'].PHP_EOL;
	fwrite($file, $k);
	fclose($file);	
	
}
else{
	echo "Set Master IP here".PHP_EOL;
	$file = fopen("config.txt", "r");
	$k = fgets($file);
	echo $k.PHP_EOL;
	echo "
	<form id='ip' method='post'>
	<input type='text' name='ip' id='ip'  maxlength=\"500\" />
	</form>
	";
	echo 	"<form id='Change IP' method='post'>
	<input type='submit' name='Change IP' value='Change IP' />
	</form>";
	fclose($file);

}
?>


</body>
</html>