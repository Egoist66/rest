<?php

use Classes\DB;
require_once APP_ROOT.DS.'functions'.DS.'Classes'.DS.'DB.php';

/** db instance */
$db = DB::getInstance(require APP_ROOT.DS.'config'.DS.'DB'.DS.'db-config.php', 'mysql');

