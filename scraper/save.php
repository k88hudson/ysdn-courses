<?php
header('Content-type: application/json');
$json = $_POST['json'];

$fp = fopen('../data.json', 'w');
fwrite($fp, json_encode($json));
fclose($fp);

echo $json;
?>