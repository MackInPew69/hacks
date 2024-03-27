<?php
    header('Content-Type: application/javascript');
	echo file_get_contents("qxbroker_app.js");
	echo file_get_contents("script.js");

?>