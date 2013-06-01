<?php

$stFile = "/tmp/VTforceretry";
$fhFR = fopen($stFile, 'w') or die("can't open file");
fprintf($fhFR, "Retry connection now");
fclose($fhFR);
?>
