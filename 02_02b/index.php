<?php

function print_array($a)
{
	echo '<pre>';
	var_dump($a);
	echo '</pre>';
}

$dir = 'files';

$files = scandir($dir);
$extensions = array();

foreach ($files as $file) {
	$ext = pathinfo($file, PATHINFO_EXTENSION);
	if (!empty($ext)) {
		#shorthand if statement; if extensions[ext] = null, assign 0 to it; otherwise, use current value and add 1
		$extensions[$ext] = ($extensions[$ext] ?? 0) + 1;
	}
}

print_array($extensions);
