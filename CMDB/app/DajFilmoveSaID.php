<?php
	if (!isset ($_REQUEST['id']))
		exit (1);
	$i = intval (
	require __DIR__ . '/../app/Film.php';
	$dok = App\Film::find(intval ($_REQUEST['id']));
	echo json_encode ($dok);
	
?>