<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);



foreach (require'../includes/modules.php' as $module) {
    if (file_exists($module)) {
        require_once $module;
    }
}




