<?

include "config.php";

$usuario_id = $_GET['id'];



$sql = mysql_query("UPDATE usuarios SET ativado='1' WHERE usuario_id='{$usuario_id}'");

$sql_doublecheck = mysql_query("SELECT * FROM usuarios WHERE usuario_id='{$usuario_id}' AND ativado='1'");
$doublecheck = mysql_num_rows($sql_doublecheck);

if($doublecheck == 0){

	echo "<strong>Sua conta n&atide;o pode ser ativada!</strong>";

}
elseif($doublecheck > 0){

	echo "<strong>Seu cadastro foi ativado com sucesso!</strong><br />Voc&ecirc; pode fazer o login logo abaixo!<br /><br />";
	include "index.html";

}

?>