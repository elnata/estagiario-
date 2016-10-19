<?

include '../../config.php';

    session_start();


	include "../../functions.php";

	session_checker();





    $autor = $_SESSION['nome'];


   $busca_query = mysql_query("SELECT * FROM agenda WHERE data LIKE '%".$data."%' AND autor = '$autor'")or die(mysql_error());//faz a busca com as palavras enviadas

//$sql = mysql_query("UPDATE agenda SET hrsaida='$hrsaida' WHERE data='$data'")or die(mysql_error());

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}


while ($dados = mysql_fetch_array($busca_query)) {
   $id = $dados[id];

}


	date_default_timezone_set('America/Sao_Paulo');
  setlocale(LC_TIME,"pt_BR");
	$hrentrada = date('H:i:s');

    $data = date('d-m-Y');
    $dia = date('D');
    $mes = date('M');


$busca_query = mysql_query("SELECT * FROM agenda WHERE data LIKE '%".$data."%' AND autor = '$autor'")or die(mysql_error());//faz a busca com as palavras enviadas

//$sql = mysql_query("UPDATE agenda SET hrsaida='$hrsaida' WHERE data='$data'")or die(mysql_error());

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}


while ($dados = mysql_fetch_array($busca_query)) {
   $id = $dados[id];

}

/*

if ($dia <> "Mon"){
$sql = mysql_query("UPDATE agenda SET hrentrada = '$hrentrada' WHERE id = '$id'")or die(mysql_error());
 if($sql){

                $erro = "Dados cadastrados com sucesso!";
                //header("Location: ../saida.php");

              } else{

                  echo"Não foi possivel cadastrar os dados";

              }

}
*/





    

       $sql = mysql_query("INSERT INTO `agenda`(`dia`, `mes`, `autor`, `hrentrada`, `data`, `setor` ) VALUES ('$dia', '$mes','$autor', '$hrentrada', '$data', '$setor')") or die(mysql_error());

            if($sql){

                $erro = "Dados cadastrados com sucesso!";
                

              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }






 


date_default_timezone_set('America/Sao_Paulo');
  setlocale(LC_TIME,"pt_BR");
  $hrentrada = date('H:i:s');

    $data = date('d-m-Y');
    $dia = date('D');
    $mes = date('M');




if ($dia == "Fri") {
      $datas = date('d-m-Y', strtotime("+1 days",strtotime($data)));
     $sql = mysql_query("INSERT INTO `agenda`(`mes`,`autor`,`hrentrada`,`hrsaida`, `data`, `setor`) VALUES ('$mes','$autor','Sabado', 'Sabado', '$datas', '$setor')") or die(mysql_error());
            if($sql){

                $erro = "Dados cadastrados com sucesso!";


              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }
    }
if ($dia == "Fri") {
      $datas = date('d-m-Y', strtotime("+2 days",strtotime($data)));
     $sql = mysql_query("INSERT INTO `agenda`(`mes`,`autor`,`hrentrada`,`hrsaida`, `data`, `setor`) VALUES ('$mes','$autor','Domingo', 'Domingo', '$datas' , '$setor')") or die(mysql_error());
            if($sql){

                $erro = "Dados cadastrados com sucesso!";


              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }
    }





header("Location: ../entrada.php");

 ?>
