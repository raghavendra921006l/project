<?php 
$coredir =substr(dirname(__FILE__),0,-strlen(basename(__DIR__)));
$coredir= str_replace('\\', '/', $coredir);
 
defined("SITE_ROOT") || define("SITE_ROOT", $coredir);

require_once(SITE_ROOT.'_config/config.php');
require_once(SITE_ROOT.'_util/common_util.php');
require_once(SITE_ROOT.'_util/db_util.php');
require_once(SITE_ROOT.'_util/format_util.php');
 
function __autoload($class_name)
{	
    require_once(SITE_ROOT.'_lib/'.$class_name.'.php');
}
session_start();
