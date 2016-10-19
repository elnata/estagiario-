<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>busca</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

<table class="tabela">
<tr><td><h1>
    FOLHA DE PONTO INDIVIDUAL DE ESTÁGIO
</h1>
  </td></tr>

<?

include '../../config.php';
session_start();

include "../../functions.php";

session_checker();

  

    $autor = $_SESSION['nome'];
    ?>

<table class="tabela">

<tr><td>EMPREGADOR: NOME / EMPRESA<br> COLÉGIO NOSSA SENHORA DE LOURDES</td><td>CEI / CNPJ Nº <br> 09.110.115/0001-03</td></tr>
<table class="tabela">
<tr><td>ENDEREÇO:<br> Av Epitácio Pessoa, 208 – Torre – João Pessoa/PB</td></tr>
<table class="tabela">
<tr><td>EMPREGADO(A):<br> <?session_checker();

$busca = $_POST['palavra'];// palavra que o usuario digitou
$data = $_POST['data'];

$buscaquery = mysql_query("SELECT * FROM agenda WHERE autor LIKE '%$busca%' AND data LIKE '%$data%'")or die(mysql_error());


while ($dados = mysql_fetch_array($buscaquery)) {
   $autor = $dados[autor]; 
  
}

 echo $autor; ?> </td><td>CPF:<br> 1293719</td><td>DATA DE INÍCIO:<br> dd/mm//2016</td></tr>
<table class="tabela">
<tr><td>FUNÇAO:<br>Estagiário(a)</td><td>HORÁRIO DE TRABALHO DE SEG. A SEXTA FEIRA:<br> nn às nn horas</td></tr>
<table class="tabela">
<tr><td>Setor:<br>Ens. Fundamental I</td><td>DESCANSO SEMANAL:<br> -</td><td>MÊS:<br> <?session_checker();

$busca = $_POST['palavra'];// palavra que o usuario digitou
$data = $_POST['data'];

$buscaquery = mysql_query("SELECT * FROM agenda WHERE autor LIKE '%$busca%' AND data LIKE '%$data%'")or die(mysql_error());


while ($dados = mysql_fetch_array($buscaquery)) {
   $mes = $dados[mes]; 
  
}

 echo $mes; ?> </td><td>ANO:<br><?php echo date('Y')?></td></tr>


<table class="tabela">
<br>

<tr><td ALIGN=MIDDLE WIDTH=395>Dias do mês</td><td ALIGN=MIDDLE WIDTH=305>Entrada</td><td ALIGN=MIDDLE WIDTH=205>saída</td><td ALIGN=MIDDLE>Nome</td></tr>




<table class="tabela">

<?



  session_checker();



  

    $autor = $_SESSION['nome'];
    




$busca = $_POST['palavra'];// palavra que o usuario digitou
$data = $_POST['data'];

//echo $busca;


//echo $data;
//echo "<hr>";

$buscaquery = mysql_query("SELECT * FROM agenda WHERE autor LIKE '%$busca%' AND data LIKE '%$data%'")or die(mysql_error());//faz a busca com as palavras enviadas

//$sql = mysql_query("UPDATE agenda SET hrsaida='$hrsaida' WHERE data='$data'")or die(mysql_error());

if (empty($buscaquery)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}else{





while ($dados = mysql_fetch_array($buscaquery)) {





/*Escreve cada linha da tabela*/
echo  "<tr>"."<td ALIGN=MIDDLE>" . $dados['data'] . "</td>"."<td ALIGN=MIDDLE>" . $dados['hrentrada'] . "</td>"."<td ALIGN=MIDDLE>" . $dados['hrsaida'] . "</td>"."<td ALIGN=MIDDLE>" . $dados['autor'] . "</td>"."</tr>";

}  

   }


                    
  



 ?>

</body>
</html>