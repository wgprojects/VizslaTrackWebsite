<html>
<body>

<?php
$rsFile = "./VTsettings";
$fhRS = fopen($rsFile, 'w') or die("can't open file");

if(array_key_exists('boost', $_GET))
{
	$speedData = $_GET['boost'];
	fwrite($fhRS, $speedData);
}
else
{
	fwrite($fhRS, 6);
}
fwrite($fhRS, "\n");


if(array_key_exists('slow', $_GET))
{
	$speedData = $_GET['slow'];
	fwrite($fhRS, $speedData);
}
else
{
	fwrite($fhRS, 20);
}
fwrite($fhRS, "\n");


if(array_key_exists('fast', $_GET))
{
	$speedData = $_GET['fast'];
	fwrite($fhRS, $speedData);
}
else
{
	fwrite($fhRS, 600);
}
fwrite($fhRS, "\n");


if(array_key_exists('default', $_GET))
{
	$speedData = $_GET['default'];
	fwrite($fhRS, $speedData);
}
else
{
	fwrite($fhRS, 300);
}
fwrite($fhRS, "\n");
fflush($fhRS);
fclose($fhRS);
//sleep(1);
//rename($rsFile, "./VTsettings");
?>

</body>
</html> 