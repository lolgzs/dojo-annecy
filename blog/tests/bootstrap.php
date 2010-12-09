<?php
error_reporting( -1 );
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
ini_set('memory_limit', '256M');
date_default_timezone_set('Europe/Paris');

$include_paths = array('../src/models', get_include_path());

set_include_path(implode(PATH_SEPARATOR, $include_paths));
require ('Post.php'); ?>
