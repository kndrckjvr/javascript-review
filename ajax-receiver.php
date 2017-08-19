<?php
	$text = explode(" ", strtolower($_POST['textValue']));
	sort($text);
	$count = array_count_values($text);
	$text = array_unique($text);
	$ans = array();
	foreach($text as $key => $value) {
		array_push($ans, "$value - ". $count["$value"] );
	}
	$ans = implode("<br>", $ans);
	echo json_encode(array('answer' => $ans));