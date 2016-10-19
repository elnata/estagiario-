<?

include "../../config.php";
include "../../functions.php";

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$usuario = trim($_POST['usuario']);
$setor = trim($_POST['setor']);

/* Vamos checar algum erro nos campos, mas tenha em mente que existem formas bem mais eficientes de tratar os dados que s�o enviados ou n&atilde;o pelos campos do formul�rio */

if ((!$nome) || (!$email) || (!$usuario) || (!$setor)){

	echo "ERRO: Voc&ecirc; n&atilde;o enviou as seguintes informa�&otilde;es requeridas para o cadastro! <br /> <br />";

	if (!$nome){

		echo "Nome &eacute; um campo requerido. <br />";

	}

//	if (!$sobrenome){

//		echo "Sobrenome &eacute; um campo requerido. <br />";

//	}

	if (!$email){

		echo "Email &eacute; um campo requerido.<br />";

	}

	if (!$usuario){

		echo "Nome de Usu&aacute;rio &eacute; um campo requerido. <br />";

	}

if (!$setor){

		echo "Setor � um campo requerido. <br />";

	}

	echo "<br />Preencha os campos necess&aacute;rios abaixo: <br /><br />";

	include "formulario_cadastro.php";

}
else{

	/* Vamos checar se o nome de Usu�rio escolhido e/ou Email j� existem no banco de dados */

	$sql_email_check = mysql_query("SELECT COUNT(usuario_id) FROM usuarios WHERE email='{$email}'");
	$sql_usuario_check = mysql_query("SELECT COUNT(usuario_id) FROM usuarios WHERE usuario='{$usuario}'");

	$eReg = mysql_fetch_array($sql_email_check);
	$uReg = mysql_fetch_array($sql_usuario_check);

	$email_check = $eReg[0];
	$usuario_check = $uReg[0];

	if (($email_check > 0) || ($usuario_check > 0)){

		echo "<strong>ERRO </strong>- Por favor corrija os seguintes erros abaixo: <br /> <br />";

		if ($email_check > 0){

		    echo "Este email ( <strong>".$email."</strong> ) j&aacute; est&aacute; sendo utilizado.<br />Por favor utilize outra conta de email! <br />";

		    unset($email);

		}

		if ($usuario_check > 0){

			echo "Este nome de usu&aacute;rio ( <strong>".$usuario."</strong> ) j&aacute; est&aacute; sendo utilizado.<br />Por favor utilize outro nome de usu&aacute;rio!<br />";

			unset($usuario);

		}

		echo "<br />";
		include "formulario_cadastro.php";

	}
	else
	{

		$email = strtolower(trim($_POST['email']));
		$char = "@";
		$pos = strpos($email, $char);

        if ($pos === false){

			echo "<strong>ERRO:</strong><br />";
			echo "O endere&ccedil;o de email [ <strong><em>".$email."</em></strong> ] que est&aacute; tentando utilizar n&atilde;o &eacute; v&aacute;lido.<br />";
			echo "Por favor, utilize um email v&aacute;lido.<br /><br />";
			include "formulario_cadastro.php";

        }else{

            $v_mail = verifica_email($email);

            if ($v_mail){

                /* Se passarmos por esta verifica��o ilesos � hora de finalmente cadastrar
	    	    os dados Vamos utilizar uma fun��o para gerar uma senha rand�mica�*/

				function makeRandomPassword(){

					$salt = "abchefghjkmnpqrstuvwxyz0123456789";
					srand((double)microtime()*1000000);

					$i = 0;

					while($i <= 7){

						$num = rand() % 33;
						$tmp = substr($salt, $num, 1);
						$pass = $pass . $tmp;
						$i++;

					}

					return $pass;

				}

				$senha_randomica = makeRandomPassword();

				$senha = md5($senha_randomica);

				// Inserindo os dados no banco de dados

				$info = htmlspecialchars($info);

				$sql = mysql_query("INSERT INTO usuarios (nome, email, usuario, senha, setor, data_cadastro)
									VALUES('{$nome}','{$email}', '{$usuario}', '{$senha}', '{$setor}', now())")
									or die( mysql_error() );


				if (!$sql){

					echo "Ocorreu algum erro ao criar sua conta, por favor entre em contato com o Webmaster.";

				}
				else {

					$usuario_id = mysql_insert_id();

					// Enviar um email ao usu&aacute;rio para confirma��o e ativar o cadastro!

					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$headers .= "From: Informatica - Webmaster<elnatan.des@gmail.com>"; // TEU DOM�NIO E TEU EMAIL

					$subject = "Confirma��o de cadastro - lourdinas.hol.es";
					$mensagem = "Prezado <strong>$nome </strong>,

								<br />

								Obrigado pelo seu cadastro em nosso site,
								<a href ='lourdinas.hol.es'>www.lourdinas.hol.es</a>!

								<br /><br />

								Para confirmar seu cadastro e ativar sua conta, podendo assim acessar �reas exclusivas,
								por favor clique no link abaixo ou copie e cole o link na barra de endere�o do seu navegador.

								<br /><br />

								<a href ='http://lourdinas.hol.es/ativar.php?id=$usuario_id&code=$senha'>
								http://lourdinas.hol.es/ativar.php?id=$usuario_id&code=$senha
								</a>

								<br /> <br />

								Ap�s a ativa��o de sua conta, voc� poder� ter acesso ao conte�do exclusivo,
								efetuando o login com os dados abaixo:

								<br /> <br />

								<strong>Usuario</strong>: {$usuario}

								<br />

								<strong>Senha</strong>: {$senha_randomica}

								<br /><br />

								Obrigado!<br /> <br />

								Webmaster<br /> <br /> <br />

								Esta � uma mensagem autom�tica, por favor n�o responda!";

					mail($email, $subject, $mensagem, $headers);

					echo "Foi enviado para seu email - ( ".$email." ) um pedido de confirma&ccedil;&atilde;o de cadastro,
							por favor verifique e sigas as instru&ccedil;&otilde;es!";

				}

            }else{

                echo "<strong>ERRO:</strong><br />";
                echo "O endere&ccedil;o de email [ <strong><em>".$email."</em></strong> ] que est&aacute; tentando utilizar n&atilde;o &eacute; v&aacute;lido.<br />";
                echo "Por favor, utilize um email v&aacute;lido.<br /><br />";
				include "formulario_cadastro.php";

            }

        }

    }

}

?>
