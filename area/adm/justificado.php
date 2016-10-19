 <?php 


 include '../../config.php';

    session_start();


    include "../../functions.php";

    session_checker();





    $autor = $_SESSION['nome'];

    

$busca = $_POST['palavra'];// palavra que o usuario digitou
$data = $_POST['data'];


$busca_query = mysql_query("SELECT * FROM agenda WHERE data LIKE '%".$data."%' AND autor = '$busca'")or die(mysql_error());//faz a busca com as palavras enviadas



if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}


while ($dados = mysql_fetch_array($busca_query)) {
   $id = $dados[id];

}




$sql = mysql_query("UPDATE agenda SET hrentrada = 'JUSTIFICADO', hrsaida = 'JUSTIFICADO' WHERE id = '$id'")or die(mysql_error());
 if($sql){

                $erro = "Dados cadastrados com sucesso!";
                header("Location: ../saida.php");

              } else{

                  echo"Não foi possivel cadastrar os dados";

              }




 ?>
                    