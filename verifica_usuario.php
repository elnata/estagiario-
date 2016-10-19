<?

session_start();  // Inicia a session

include "config.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if((!$usuario) || (!$senha)){

	echo "Por favor, todos campos devem ser preenchidos! <br /><br />";
	include "index.html";

}
else{

	$senha = md5($senha);

	$sql = mysql_query("SELECT * FROM usuarios WHERE usuario='{$usuario}' AND senha='{$senha}' AND ativado='1'");
	$login_check = mysql_num_rows($sql);

	if($login_check > 0){

		while($row = mysql_fetch_array($sql)){

			foreach( $row AS $key => $val ){

				$$key = stripslashes( $val );

			}

			$_SESSION['usuario_id'] = $usuario_id;
			$_SESSION['nome'] = $nome;
			//$_SESSION['sobrenome'] = $sobrenome;
			$_SESSION['email'] = $email;
			$_SESSION['nivel_usuario'] = $nivel_usuario;
		
			mysql_query("UPDATE usuarios SET data_ultimo_login = now() WHERE usuario_id ='{$usuario_id}'");

			

			if($_SESSION['nivel_usuario'] == 0){
				
				header("Location: area/index.php");
			}

			if($_SESSION['nivel_usuario'] == 1){

			  header("Location: adm/index.php");
			}
			if($_SESSION['nivel_usuario'] == 2){

			  header("Location: info/index.php");
			}
			if($_SESSION['nivel_usuario'] == 3){

			  header("Location: responsavel/index.php");
			}

		}

	}
	else{

		echo "Voc&ecirc; n&atilde;o pode logar-se! Este usu&aacute;rio e/ou senha n&atilde;o s&atilde;o v&aacute;lidos!<br />
			Por favor tente novamente!<br />";

		include "index.html";

	}
}

?>