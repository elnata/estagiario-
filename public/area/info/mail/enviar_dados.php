<?
/*
#######################
## #Expl0it - Guia do Hacker ##
## exploit@guiadohacker.com.br ##
## ################## ##
*/

require('conexao.php');

include '../../../config.php';

    session_start();


	include "../../../functions.php";

	session_checker();





    $autor = $_SESSION['nome'];

    $busca_query = mysql_query("SELECT * FROM usuarios WHERE nome = '$autor'")or die(mysql_error());//faz a busca com as palavras enviadas




    while ($dados = mysql_fetch_array($busca_query)) {
       $setor = $dados['setor'];
    }

$data = date('d-m-Y');



$nome = htmlentities($_POST['para']); // A função htmlentities() serve para que o visitante nao execute HTML, assim previnindo XSS também.
$mensagem = htmlentities($_POST['mensagem']); // Coloque a função htmlentities() aqui também.

$inserir = mysql_query("INSERT INTO Mensagens (nome, de, mensagem, setor, data) VALUES ('$nome', '$autor', '$mensagem', '$setor', '$data')"); // Insere os valores Nome e Mensagem no Banco de Dados.


header("Location: confirma.php");
?>
