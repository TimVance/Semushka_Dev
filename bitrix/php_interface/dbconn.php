<?
define("SHORT_INSTALL", true);
define("SHORT_INSTALL_CHECK", true);

define("MYSQL_TABLE_TYPE", "INNODB");
define("BX_UTF", true);

define("DBPersistent", false);
$DBType = "mysql";
$DBHost = "localhost";
$DBName = 'bx39176_bi000';
$DBLogin = 'bx39176_bius000';
$DBPassword = 'aNgoo9et9caRohsh9a';
$DBDebug = false;
$DBDebugToFile = false;

define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
@umask(~BX_DIR_PERMISSIONS);

define("BX_USE_MYSQLI", true);
define("DELAY_DB_CONNECT", true);
define("CACHED_menu", 3600);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
//Cron Added
if(!(defined("CHK_EVENT") && CHK_EVENT===true))
   define("BX_CRONTAB_SUPPORT", true);

// Lang
session_start([
    'LANG_UI',
]);
if(isset($_REQUEST['lang_ui']))
   $_SESSION["LANG_UI"] = ($_REQUEST['lang_ui'] == 'en' ? 'en' : 'ru');

if(!isset($_REQUEST['lang']) && isset($_SESSION["LANG_UI"]))
   define(LANGUAGE_ID, $_SESSION["LANG_UI"]);

?>
