<?php
	echo '<?xml version="1.0" encoding="UTF-8"?>';
	echo '<Incidents>';
	foreach ($incidents as $incident) {
		echo '<Incident>';
			echo '<uuid>' . $incident['Incident']['uuid'] . '</uuid>';
			echo '<title>' . $incident['Incident']['title'] . '</title>';
			echo '<description>' . $incident['Incident']['description'] . '</description>';
			echo '<requestor>' . $incident['Incident']['requestor'] . '</requestor>';
			echo '<status>' . $incident['Incident']['status'] . '</status>';
			echo '<modified>' . $incident['Incident']['modified'] . '</modified>';
		echo '</Incident>';
	}
	echo '</Incidents>';
?>
