<?php
	$text = explode(" ", strtolower($_POST['textValue']));
	sort($text);
	$text = array_unique($text);
	$text = implode("<br>", $text);
	echo json_encode(array('revstring' => $text));