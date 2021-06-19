<?php
header('Content-Type: application/json');
$data = [
	'cbStatus' => (time() % 10000) * 3
	'raStatus' => (time() % 10000) * 3
	];
echo json_encode($data);