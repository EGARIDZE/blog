<?php

require dirname(__DIR__) . "/config/config.php";
require CORE . "/funcs.php";
require CORE . "/classess/db.php";


$db_config = require CONFIG . "/db.php";
$db = (DB::getInstance())->getConnection($db_config);

require CORE . '/router.php';
