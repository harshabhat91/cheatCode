<?php
header('Content-Type: application/json');
$data = [
	'status' => (time() % 10000) * 3
	];
echo json_encode($data);