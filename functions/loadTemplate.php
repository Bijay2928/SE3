<?php
function loadTemplate($filename, $tempVars){
	extract($tempVars);//functin to load templates
	ob_start();//start phase
	require $filename;//require file name
	$content = ob_get_clean();
	return $content;
}