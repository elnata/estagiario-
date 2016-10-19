<?

include "../config.php";

$recupera = $_POST['recupera'];
$email = $_POST['email'];
$nvsenha = $_POST['senha'];


switch($recupera){

	case "recupera":
		recupera_senha($email, $nvsenha);
		break;

	default:
		include "form_senha.php";
		break;
}

function recupera_senha($email, $nvsenha){

	if(!isset($email)){

        echo "Você esqueceu de preencher seu email.<br />
			<strong>Use o mesmo email que utilizou em seu cadastro.</strong><br /><br />"; 

		include "form_senha.php";

		exit();

	}
	if(!isset($nvsenha)){

        echo "Você esqueceu de preencher a nova senha.<br />"; 
        echo $nvsenha;
		include "form_senha.php";

		exit();

	}





	// Checando se o email informado está cadastrado
		
	$sql_check = mysql_query("SELECT * FROM usuarios WHERE email='{$email}'");
	$sql_check_num = mysql_num_rows($sql_check);

	if($sql_check_num == 0){

		echo "Este email não está cadastrado em nosso banco de dados.<br /><br />";

		include "form_senha.php";

		exit();

	}
	
	// Se tudo OK vamos gerar uma nova senha e enviar para o email do usuário!

	/*
	function makeRandomPassword(){

		$salt = "abchefghjkmnpqrstuvwxyz0123456789";
		srand((double)microtime()*1000000);

		$i = 0;

		while ($i <= 7){

			$num = rand() % 33;
			$tmp = substr($salt, $num, 1);
			$pass = $pass . $tmp;
			$i++;

		}

		return $pass;

	}*/

	//$senha_randomica = makeRandomPassword();

	$senha = md5($nvsenha);

	$sql = mysql_query("UPDATE usuarios SET senha='{$senha}' WHERE email ='{$email}'");

	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "From: informática - Webmaster<elnatan.des@gmail.com>"; //COLOQUE TEU EMAIL

	$subject = "Sua nova senha em lourdianas.hol.es";
	$message = "Olá, redefinimos sua senha.<br /><br />

	<strong>Nova Senha</strong>: {$nvsenha}<br /><br />

	<a href='http://www.lourdinas.hol.es/'>http://www.lourdinas.hol.es/</a><br /><br />

	Obrigado!<br /><br />

	O desenvolvedor<br /><br /><br />


	Esta é uma mensagem automática, por favor não responda!";

	mail($email, $subject, $message, $headers);

	echo "Sua nova senha foi gerada com sucesso e enviada para o seu email!<br />É preciso fazer o login com a nova senha!<br /><br />";

	header("Location: ../index.html");

}

?>