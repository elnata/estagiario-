<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Local do responsável</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="http://www.lourdinas.com.br/default/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="http://www.lourdinas.com.br/default/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="revelando" href="#page-top"><h3>Local do responsável</h3></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                         <a href="../../senha/form_senha.php">Mudar senha</a>"
                    </li>
                    <li class="page-scroll">
                                        <?

session_start();

include "../../functions.php";

session_checker();


echo "<a href=\"../../logout.php\">Sair</a>";

?>
                    </li>




                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2>Gerenciador</h2>
                  <hr class="star-primary">
              </div>
          </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--<img class="img-responsive img-circle" src="img/profile2.jpg" height="180" width="320" alt="">-->
                    <div class="intro-text">
                       <!-- <span class="name">Lourdinas</span>
                        <hr class="star-light"> -->
                        <span class="skills">




<?
include '../../config.php';

session_start();


session_checker();

echo "Bem vindo <strong>". $_SESSION['nome'] ." </strong>! <br />
Acesso ao sistema de gerenciamento dos estágiarios do seu setor.<br /><br />";

//echo "Seu n&iacute;vel de usu&aacute;rio &eacute; <strong>". $_SESSION['nivel_usuario']."</strong>.<br />
//Com esse n&iacute;vel, voc&ecirc; tem permis&atilde;o de acesso &agrave; algumas &aacute;reas exclusivas do site.<br /><br />";

if($_SESSION['nivel_usuario'] == 0){

echo "- <strong>Estagiário</strong><br /> - Acesso &agrave; &aacute;reas exclusivas do sistema,  ao chegar e sair no local de trabalho você deve registrar o seu ponto.<br />";
}

if($_SESSION['nivel_usuario'] == 3){

echo "- <strong>Aprove o ponto do estagiário</strong><br />caso esteja correto.<br /><br />";
}



?>
<!--<h3 class="text-center">O Ponto</h3> -->
<table class="tabela">
<?


session_checker();

$data = date('d-m-Y');

$buscaquery = mysql_query("SELECT * FROM usuarios WHERE nome LIKE '%$autor%'")or die(mysql_error());


while ($dados = mysql_fetch_array($buscaquery)) {
$setor = $dados[setor];

}




$buscaquery = mysql_query("SELECT * FROM agenda WHERE setor LIKE '%$setor%' AND data = '$data'")or die(mysql_error());



while ($dados = mysql_fetch_array($buscaquery)) {
if($dados['aprovado'] == "0"){
$id = $dados['id'];
$nome = $dados['autor'];
echo  "<tr>"."<td ALIGN=MIDDLE WIDTH=912>" . $dados['autor'] ."<td ALIGN=MIDDLE WIDTH=412>" . $dados['data'] . "</td>"."<td ALIGN=MIDDLE WIDTH=412>" . $dados['hrentrada'] . "</td>"."<td ALIGN=MIDDLE WIDTH=412>" . $dados['hrsaida'] . "</td>";

echo"<form name=\"button\" method=\"post\" enctype=\"multipart/form-data\" action=\"\">";
echo"<td><input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" id=\"login\" name=\"button\" value=\"Cadastrar\"></td></tr>";
echo"</form>";


if(isset($_POST['button'])){

$sql = mysql_query("UPDATE agenda SET aprovado = '1' WHERE id = '$id' AND autor = '$nome' AND data = '$data'" )or die(mysql_error());
}



}
}


?>
</table>


</span>
                    </div>
                </div>
            </div>
        </div>
    </header>






    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       Desenvolvido por Elnatã Eleale | Copyright &copy;| <a href="http://lourdinas.com.br/">Lourdinas</a> <?php echo date('Y') //pega o ano ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
