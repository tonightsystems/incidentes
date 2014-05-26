<?php
	$xmlObject = Xml::fromArray(array(
		'Incidents' => array(
			'Incident' => $incident['Incident']
		)
	));
	echo $xmlObject->asXML();
?>
