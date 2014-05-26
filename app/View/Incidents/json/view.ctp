<?php
	unset($incident['Incident']['id']);
	echo json_encode($incident['Incident'], JSON_PRETTY_PRINT);
?>
