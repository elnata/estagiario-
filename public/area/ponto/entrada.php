<?

include '../../config.php';

    session_start();


	include "../../functions.php";

	session_checker();





    $autor = $_SESSION['nome'];


    $buscaquery = mysql_query("SELECT * FROM usuarios WHERE nome LIKE '%$autor%'")or die(mysql_error());


    while ($dados = mysql_fetch_array($buscaquery)) {
       $setor = $dados[setor];

    }


    
	date_default_timezone_set('America/Sao_Paulo');
  setlocale(LC_TIME,"pt_BR");
	$hrentrada = date('H:i:s');

    $data = date('d-m-Y');
    $dia = date('D');
    $mes = date('M');








       $sql = mysql_query("INSERT INTO `agenda`(`dia`, `mes`, `autor`, `hrentrada`, `data`, `setor` ) VALUES ('$dia', '$mes','$autor', '$hrentrada', '$data', '$setor')") or die(mysql_error());

            if($sql){

                $erro = "Dados cadastrados com sucesso!";
                header("Location: ../entrada.php");

              } else{

                  $erro = "Não foi possivel cadastrar os dados";

              }

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



 ?>
