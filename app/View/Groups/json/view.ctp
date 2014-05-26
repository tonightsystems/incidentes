<?php
	$res = array();
	foreach ($incidents as $incident) {
		$res[] = $incident['Incident'];
	}
	echo json_encode($res, JSON_PRETTY_PRINT);
?>