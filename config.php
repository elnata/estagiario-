<?
/*Add at the begining of the file*/

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}



error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
define('BD_USER', $connectstr_dbusername); // USE O TEU USUÁRIO DE BANCO DE DADOS
define('BD_PASS', $connectstr_dbpassword); // USE A TUA SENHA DO BANCO DE DADOS
define('BD_NAME', $connectstr_dbname); // USE O NOME DO TEU BANCO DE DADOS

mysql_connect($connectstr_dbhost, BD_USER, BD_PASS);
mysql_select_db(BD_NAME);


?>