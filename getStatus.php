<?php


function json_encode($data) {
        switch ($type = gettype($data)) {
            case 'NULL':
                return 'null';
            case 'boolean':
                return ($data ? 'true' : 'false');
            case 'integer':
            case 'double':
            case 'float':
                return $data;
            case 'string':
                return '"' . addslashes($data) . '"';
            case 'object':
                $data = get_object_vars($data);
            case 'array':
                $output_index_count = 0;
                $output_indexed = array();
                $output_associative = array();
                foreach ($data as $key => $value) {
                    $output_indexed[] = json_encode($value);
                    $output_associative[] = json_encode($key) . ':' . json_encode($value);
                    if ($output_index_count !== NULL && $output_index_count++ !== $key) {
                        $output_index_count = NULL;
                    }
                }
                if ($output_index_count !== NULL) {
                    return '[' . implode(',', $output_indexed) . ']';
                } else {
                    return '{' . implode(',', $output_associative) . '}';
                }
            default:
              return ''; // Not supported
        }
    }

$stFile = "/tmp/status";
$fhST = fopen($stFile, 'r') or die("can't open file");

$txt = fread($fhST, filesize($stFile)); 
//echo $txt;
//$status = fscanf($fhST, "%u %u %u %u %u %f %f %f %u %f %f %u %u %u %u");
$status = sscanf($txt, "%u %u %u %u %u %f %f %f %f %u %f %f %u %u %u %u");

header('Content-Type: application/json');
echo json_encode($status);

/*
if($status)
	echo implode("|", $status);
else
	echo "error reading status";
*/

fclose($fhST);
?>
