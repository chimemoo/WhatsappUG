<?php
	$text = $_GET['text'];
	$num = $_GET['num'];
	$message = rawurlencode($text);

	$url = "https://api.whatsapp.com/send?phone=".$num."&text=".$message;
	echo $url;
?>