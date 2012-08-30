<?php
/**
 * This is a script I use to strip the Drupal cache data from a MySQL dump.
 *
 * php strip_drupal_cache_from_sql.php my_db.sql
 * will produce my_db_process.sql which will be MUCH smaller
 */

$file = $argv[1];
$contents = file_get_contents($file);
echo strlen($contents) . ' bytes' . chr(10);


// remove cache data
echo 'removing cache data' . chr(10);
$foo = explode(chr(10), $contents);
echo count($foo) . ' lines' . chr(10);
$bar = array();
$delete_mode = false;
foreach ($foo as $line) {
	if (begins_with($line, 'INSERT INTO `cache')) {
		$delete_mode = true;
	} else if ($delete_mode && !begins_with($line, '(')) {
		$delete_mode = false;
	}

	if (!$delete_mode) $bar[] = $line;
}
echo count($bar) . ' lines' . chr(10);
$contents = implode(chr(10), $bar);
echo strlen($contents) . ' bytes' . chr(10);


// write to new file
$newf = str_replace(".sql", "_process.sql", $file);
file_put_contents($newf, $contents);


function begins_with($haystack, $needle) {
	$needle_len = strlen($needle);
	return (substr($haystack, 0, $needle_len) == $needle);
}