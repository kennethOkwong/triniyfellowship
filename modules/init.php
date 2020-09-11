<?php

session_start();

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Config.php');

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'Database.php');

$db = new Database($config['database']['host'], $config['database']['username'], $config['database']['password'], $config['database']['db_name']);