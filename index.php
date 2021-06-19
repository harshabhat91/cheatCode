<?php
header('Content-Type: application/json');
#$data = [
#	'cbStatus' => (time() % 10000) * 3;
#	'raStatus' => (time() % 10000) * 3;
#	];
$arr = array('a' => time() % 10000 *3, 'b' => time() % 10000 *3);
echo json_encode($arr);