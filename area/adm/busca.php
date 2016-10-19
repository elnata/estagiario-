<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>busca</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
<table class="tabela">
<tr><td>
<img src="http://www.lourdinas.com.br/default/images/logo.png" class="logo" alt="logo"/>

<h1>
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

<tr><td><b>EMPREGADOR: NOME / EMPRESA </b><br> COLÉGIO NOSSA SENHORA DE LOURDES</td><td><b> CEI / CNPJ Nº </b><br> 09.110.115/0001-03</td></tr>
<table class="tabela">
<tr><td><b>ENDEREÇO:</b><br> Av Epitácio Pessoa, 208 – Torre – João Pessoa/PB</td></tr>
<table class="tabela">
<tr><td><b>EMPREGADO(A):</b><br> <?session_checker(); //Nome

$busca = $_POST['palavra'];// palavra que o usuario digitou
$data = $_POST['data'];

$buscaquery = mysql_query("SELECT * FROM agenda WHERE autor LIKE '%$busca%' AND data LIKE '%$data%'")or die(mysql_error());


while ($dados = mysql_fetch_array($buscaquery)) {
   $nome = $dados[autor];

}

 echo $nome; ?> </td><td><b>CPF:</b><br> <?session_checker(); //CPF



$busca_query = mysql_query("SELECT * FROM usuarios WHERE nome LIKE '%$nome%'")or die(mysql_error());


while ($dados = mysql_fetch_array($busca_query)) {
   $cpf = $dados[cpf];

}

 echo $cpf; ?> </td><td><b>DATA DE INÍCIO:</b><br> <?session_checker(); //Data de inicio



$busca_query = mysql_query("SELECT * FROM usuarios WHERE nome LIKE '%$nome%'")or die(mysql_error());


while ($dados = mysql_fetch_array($busca_query)) {
   $inicio = $dados[inicio];

}

 echo $inicio; ?></td></tr>
<table class="tabela">
<tr><td><b>FUNÇAO:</b><br>Estagiário(a)</td><td><b>HORÁRIO DE TRABALHO DE SEG. A SEXTA FEIRA:</b><br> <?session_checker(); //Horário



$busca_query = mysql_query("SELECT * FROM usuarios WHERE nome LIKE '%$nome%'")or die(mysql_error());


while ($dados = mysql_fetch_array($busca_query)) {
   $horario = $dados[horario];

}

 echo $horario; ?></td></tr>
<table class="tabela">
<tr><td><b>Setor:</b><br><?session_checker(); //Setor



$busca_query = mysql_query("SELECT * FROM usuarios WHERE nome LIKE '%$nome%'")or die(mysql_error());


while ($dados = mysql_fetch_array($busca_query)) {
   $setor = $dados[setor];

}

 echo $setor; ?></td><td><b>DESCANSO SEMANAL:</b><br> -</td><td><b>MÊS:</b><br> <?session_checker();

$busca = $_POST['palavra'];// palavra que o usuario digitou
$data = $_POST['data'];

$buscaquery = mysql_query("SELECT * FROM agenda WHERE autor LIKE '%$busca%' AND data LIKE '%$data%'")or die(mysql_error());


while ($dados = mysql_fetch_array($buscaquery)) {
   $mes = $dados[mes];

}

 echo $mes; ?> </td><td><b>ANO:</b><br><?php echo date('Y')?></td></tr>


<table class="tabela">
<br>

<tr><td ALIGN=MIDDLE WIDTH=412><b>Dias do mês</b></td><td ALIGN=MIDDLE WIDTH=338><b>Entrada</b></td><td ALIGN=MIDDLE WIDTH=340><b>saída</b></td><td ALIGN=MIDDLE><b>Horas trabalhadas</b></td></tr>




<table class="tabela">

<?



  session_checker();





    $autor = $_SESSION['nome'];





$busca = $_POST['palavra'];// palavra que o usuario digitou
$data = $_POST['data'];

//echo $busca;


//echo $data;
//echo "<hr>";

$buscaquery = mysql_query("SELECT * FROM agenda WHERE autor LIKE '%$busca%' AND data LIKE '%$data%' ORDER BY data")or die(mysql_error());//faz a busca com as palavras enviadas

//$sql = mysql_query("UPDATE agenda SET hrsaida='$hrsaida' WHERE data='$data'")or die(mysql_error());

if (empty($buscaquery)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}else{





while ($dados = mysql_fetch_array($buscaquery)) {


//if($dados['aprovado'] == "1"){


/*Escreve cada linha da tabela*/
echo  "<tr>"."<td ALIGN=MIDDLE WIDTH=412>" . $dados['data'] . "</td>"."<td ALIGN=MIDDLE WIDTH=338>" . $dados['hrentrada'] . "</td>"."<td ALIGN=MIDDLE WIDTH=340>" . $dados['hrsaida'] . "</td>"."<td ALIGN=MIDDLE>" . $dados['tempo'] . "</td>"."</tr>";

//}
}

   }







 ?>

</body>
</html>
