<?php

	require __DIR__ . '/../app/Film.php';
	$dok = App\Film::all();
	echo json_encode ($dok);
	
?>