<?php
define('BASE_DIR', './');
define('PUBLIC_DIR', BASE_DIR.'public/');
define('PROTECTED_DIR', BASE_DIR.'protected/');
define('NORMAL_DIR', PROTECTED_DIR.'normal/');
define('USER_DIR', PROTECTED_DIR.'user/');


define('DATABASE_CONTROLLER', PROTECTED_DIR.'database.php');
define('IMAGE_MANAGER', PROTECTED_DIR.'imageManager.php');

define('USER_MANAGER', PROTECTED_DIR.'userManager.php');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'afp1_mnist'); 
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');

?>