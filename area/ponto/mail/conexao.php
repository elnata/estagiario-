<?
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
define('BD_USER', 'u963376040_root'); // USE O TEU USU�RIO DE BANCO DE DADOS
define('BD_PASS', '123456'); // USE A TUA SENHA DO BANCO DE DADOS
define('BD_NAME', 'u963376040_escol'); // USE O NOME DO TEU BANCO DE DADOS

mysql_connect('mysql.hostinger.com.br', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);
?>
