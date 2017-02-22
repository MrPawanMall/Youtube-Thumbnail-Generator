<?php

	header('Content-type: image/png');
	header('Content-Disposition: attachment; filename="' . $_GET['file'] . '"');
	readfile($_GET['file']);

?>