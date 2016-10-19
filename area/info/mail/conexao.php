<?
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
define('BD_USER', 'natan'); // USE O TEU USUÁRIO DE BANCO DE DADOS
define('BD_PASS', 'Na@2483365'); // USE A TUA SENHA DO BANCO DE DADOS
define('BD_NAME', 'escola'); // USE O NOME DO TEU BANCO DE DADOS

mysql_connect('MYSQLCONNSTR_localdb', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);


?>