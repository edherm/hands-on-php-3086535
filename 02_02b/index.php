<?php

function print_array($a)
{
	echo '<pre>';
	var_dump($a);
	echo '</pre>';
}

$dir = 'files';

$files = scandir($dir);
$extensions = [];

// loop through array and assign variable for current element
// foreach ($files as $file) {
// 	// use built in functionality to grab file extension
// 	$ext = pathinfo($file, PATHINFO_EXTENSION);
// 	if (!empty($ext)) {
// 		// increment count for files with extensions
// 		// if we haven't added the key to the array yet
// 			// then initialize as 0 before adding 1
// 		$extensions[$ext] = ($extensions[$ext] ?? 0) + 1;
// 	}
// }

foreach ($files as $file) {
	$ext = pathinfo($file, PATHINFO_EXTENSION);
	if (!empty($ext)) {
		$extensions[$ext] = ($extensions[$ext] ?? 0) + 1;
	}
}

print_array($extensions);
