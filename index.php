<?php
header('Content-Type: application/json');
#$data = [
#	'cbStatus' => (time() % 10000) * 3;
#	'raStatus' => (time() % 10000) * 3;
#	];
while(true) {
        $cbStatus = rand(0, 1);
		if ($cbStatus == 1) {
			$raStatus = 0;
			} else {
				$raStatus = 1;
			}
        break; // break the loop
        sleep(15);
}

$arr = array('cbStatus' => $cbStatus, 'raStatus' => $raStatus);
echo json_encode($arr);