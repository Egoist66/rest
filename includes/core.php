<?php

define('APP_NAME', 'RestAPI');
define("DS", defined('DS') ? DS : DIRECTORY_SEPARATOR);
define('APP_ROOT', defined('APP_ROOT') ? APP_ROOT : DS . 'xampp' . DS . 'htdocs' . DS . 'rest');
define('INC_PATH', defined('INC_PATH') ? INC_PATH : APP_ROOT.DS.'includes');
define('CORE_PATH', defined('CORE_PATH') ? INC_PATH : APP_ROOT.DS.'core');


foreach (require'./modules.php' as $module) {
    if (file_exists($module)) {
        require_once $module;
    }
}



$posts = new \App\Models\Posts();
print_r($posts->read());
