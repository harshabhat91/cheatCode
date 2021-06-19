<?php
header('Content-Type: application/json');
#$data = [
#	'cbStatus' => (time() % 10000) * 3;
#	'raStatus' => (time() % 10000) * 3;
#	];
while(true) {
    if( time() % 5 == 0 ) { // get time in seconds and check if it is multiple of 5
        $cbStatus = rand(0, 1);
		if ($cbStatus == 1) {
			$raStatus = 0;
			else {
				$raStatus = 1;
			}
		}
        break; // break the loop
    } else {
        sleep(1);
    }
}

$arr = array('a' => $cbStatus, 'b' => $raStatus);
echo json_encode($arr);