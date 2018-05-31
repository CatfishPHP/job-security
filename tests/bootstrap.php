<?php
require __DIR__.'/../vendor/autoload.php';

define('ROOT_DIR', dirname(__DIR__));

// Copy our sacrificial file into place for testing the JobSecurity behavior
$source      = ROOT_DIR.'/tests/fixtures/ImportantClass.txt';
$destination = ROOT_DIR.'/src/ImportantClass.php';
file_exists($destination) || copy($source, $destination);

/* End of file bootstrap.php */
