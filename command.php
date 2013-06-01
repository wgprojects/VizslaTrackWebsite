<html>
<body>

<?php
$rsFile = "/tmp/VTsettings";
$fhRS = fopen($rsFile, 'w') or die("can't open file");

if(array_key_exists('speed', $_GET))
{
	$speedData = $_GET['speed'];
	if($speedData =="1")
	{
	  fwrite($fhRS, "1");
	  fwrite($fhRS, "\n");
	  fwrite($fhRS, "0");
	}
	elseif($speedData == "2")
	{
	  fwrite($fhRS, "2");
	  fwrite($fhRS, "\n");
	  fwrite($fhRS, "0");
	}
	elseif($speedData == "3")
	{
	  	fwrite($fhRS, "3");
	  	fwrite($fhRS, "\n");
		
		if(array_key_exists('boost', $_GET))
	        {                                   
	                $boostData = $_GET['boost'];
	                fwrite($fhRS, $boostData);
	        }                                
	        else                             
	        {                                
	                fwrite($fhRS, "0");      
	        } 
	}
	else
	{
	  fwrite($fhRS, "0");
	  fwrite($fhRS, "\n");
	  fwrite($fhRS, "0");
	}
}
else if(array_key_exists('boost', $_GET))
{
  	fwrite($fhRS, "3");
	fwrite($fhRS, "\n");
        $boostData = $_GET['boost'];
        fwrite($fhRS, $boostData);
}
else
{
	fwrite($fhRS, "0");
	fwrite($fhRS, "\n");
	fwrite($fhRS, "0");
}


fwrite($fhRS, "\n");
fclose($fhRS);
?>

</body>
</html> 