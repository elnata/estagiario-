<?

include '../../config.php';

    session_start();


	include "../../functions.php";

	session_checker();





    $autor = $_SESSION['nome'];

//echo $autor;

	date_default_timezone_set('America/Sao_Paulo');

	$hrsaida = date('H:i:s');
  $data = date('d-m-Y');
  echo $data;
echo "<hr>";

$busca_query = mysql_query("SELECT * FROM agenda WHERE data LIKE '%".$data."%' AND autor = '$autor'")or die(mysql_error());//faz a busca com as palavras enviadas

//$sql = mysql_query("UPDATE agenda SET hrsaida='$hrsaida' WHERE data='$data'")or die(mysql_error());

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}


while ($dados = mysql_fetch_array($busca_query)) {
   $id = $dados[id];
   $tempo = $dados[hrentrada];

}


$unix_data1 = strtotime($tempo);
$unix_data2 = strtotime($hrsaida);

$nHoras   = ($unix_data2 - $unix_data1) / 3600;
$nMinutos = (($unix_data2 - $unix_data1) % 3600) / 60;

$tempot = sprintf('%02d:%02d', $nHoras, $nMinutos);


//
$sql = mysql_query("UPDATE agenda SET hrsaida = '$hrsaida', tempo = '$tempot' WHERE id = '$id'")or die(mysql_error());
 if($sql){

                $erro = "Dados cadastrados com sucesso!";
                //header("Location: ../saida.php");

              } else{

                  echo"Não foi possivel cadastrar os dados";

              }

              $buscaquery = mysql_query("SELECT * FROM Mensagens WHERE nome LIKE '%".$autor."%' AND lido ='0'")or die(mysql_error());
              // Executa a variavel sql.
              while ($exibir = mysql_fetch_array($buscaquery)){; // Função while para mostrar todas as mensagens.
                  $id = $dados[id];
}
$sql = mysql_query("UPDATE Mensagens SET lido = '1' WHERE nome LIKE '%".$autor."%'")or die(mysql_error());
 if($sql){

                $erro = "Dados cadastrados com sucesso!";
                header("Location: ../saida.php");

              } else{

                  echo"Não foi possivel cadastrar os dados";

              }



?>
