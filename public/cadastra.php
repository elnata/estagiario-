<?

include "config.php";
include "functions.php";

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$usuario = trim($_POST['usuario']);
$setor = trim($_POST['setor']);
$inicio = trim($_POST['inicio']);
$final = trim($_POST['final']);
$cpf = trim($_POST['cpf']);
$registro = trim($_POST['registro']);
$tipo = trim($_POST['tipo']);
$endereco = trim($_POST['endereco']);
$bairro = trim($_POST['bairro']);
$cidade = trim($_POST['cidade']);
$uf = trim($_POST['uf']);
$cep = trim($_POST['cep']);
$instituicao = trim($_POST['instituicao']);
$horario = trim($_POST['horario']);
$chr = trim($_POST['chr']);

/* Vamos checar algum erro nos campos, mas tenha em mente que existem formas bem mais eficientes de tratar os dados que são enviados ou n&atilde;o pelos campos do formulário */

if ((!$nome) || (!$email) || (!$usuario) || (!$setor) || (!$inicio) || (!$final) || (!$cpf) || (!$registro) || (!$tipo) || (!$endereco) || (!$bairro) || (!$cep) || (!$cidade) || (!$uf) || (!$instituicao) || (!$horario) || (!$chr)){

	echo "ERRO: Voc&ecirc; n&atilde;o enviou as seguintes informaç&otilde;es requeridas para o cadastro! <br /> <br />";

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

		echo "Setor é um campo requerido. <br />";

	}

	if (!$inicio){

		echo "Inicio é um campo requerido. <br />";

	}

	if (!$final){

		echo "Final é um campo requerido. <br />";

	}

	if (!$cpf){

		echo "CPF é um campo requerido. <br />";

	}

	if (!$registro){

		echo "Registro é um campo requerido. <br />";

	}

	if (!$tipo){

		echo "Tipo é  um campo requerido. <br />";

	}

	if (!$endereco){

		echo "Endereço é um campo requerido. <br />";

	}

	if (!$bairro){

		echo "Bairro é um campo requerido. <br />";

	}

	if (!$cep){

		echo "CEP é um campo requerido. <br />";

	}

	if (!$cidade){

		echo "Cidade é um campo requerido. <br />";

	}

	if (!$uf){

		echo "UF é um campo requerido. <br />";

	}

	if (!$instituicao){

		echo "Instituição de Ensino é um campo requerido. <br />";

	}

	if (!$chr){

		echo "CHr é um campo requerido. <br />";

	}


	echo "<br />Preencha os campos necess&aacute;rios abaixo: <br /><br />";

	include "formulario_cadastro.php"; 

}
else{

	/* Vamos checar se o nome de Usuário escolhido e/ou Email já existem no banco de dados */

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

                /* Se passarmos por esta verificação ilesos é hora de finalmente cadastrar
	    	    os dados Vamos utilizar uma função para gerar uma senha randômica */ 

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

				$sql = mysql_query("INSERT INTO usuarios (nome, email, usuario, senha, setor, inicio, final, cpf, registro, tipo, endereco, bairro, cidade, uf, cep, instituicao, horario, chr, data_cadastro) 
									VALUES('{$nome}','{$email}', '{$usuario}', '{$senha}', '{$setor}', '{$inicio}', '{$final}', '{$cpf}', '{$registro}', '{$tipo}', '{$endereco}', '{$bairro}', '{$cidade}', '{$uf}', '{$cep}', '{$instituicao}','{$horario}','{$chr}', now())") 
									or die( mysql_error() );


				if (!$sql){

					echo "Ocorreu algum erro ao criar sua conta, por favor entre em contato com o Webmaster.";

				}
				else {

					$usuario_id = mysql_insert_id();

					// Enviar um email ao usu&aacute;rio para confirmação e ativar o cadastro!

					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1\n";
					$headers .= "From: Informatica - Webmaster<elnatan.des@gmail.com>"; // TEU DOMÌNIO E TEU EMAIL 

					$subject = "Confirmação de cadastro - lourdinas.hol.es";
					$mensagem = "Prezado <strong>$nome </strong>,
			
								<br />
			
								Obrigado pelo seu cadastro em nosso site, 
								<a href ='lourdinas.hol.es'>www.lourdinas.hol.es</a>!
						
								<br /><br />

								Para confirmar seu cadastro e ativar sua conta, podendo assim acessar áreas exclusivas, 
								por favor clique no link abaixo ou copie e cole o link na barra de endereço do seu navegador.
						
								<br /><br /> 

								<a href ='http://lourdinas.hol.es/ativar.php?id=$usuario_id&code=$senha'>
								http://lourdinas.hol.es/ativar.php?id=$usuario_id&code=$senha
								</a>

								<br /> <br />

								Após a ativação de sua conta, você poderá ter acesso ao conteúdo exclusivo, 
								efetuando o login com os dados abaixo:
						
								<br /> <br /> 

								<strong>Usuario</strong>: {$usuario}
						
								<br /> 
						
								<strong>Senha</strong>: {$senha_randomica}
						
								<br /><br /> 

								Obrigado!<br /> <br /> 

								Webmaster<br /> <br /> <br /> 

								Esta é uma mensagem automática, por favor não responda!";

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