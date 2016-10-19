<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Local do RH</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="../info/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../info/css/freelancer.css" rel="stylesheet">
      <link href="../estilo.css" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="http://www.lourdinas.com.br/default/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="http://www.lourdinas.com.br/default/favicon.ico" rel="icon" type="image/x-icon" />
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
                <a class="revelando" href="#page-top"><h3>Local do RH</h3></a>
          
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

   




    <!-- About Section -->
    <section class="success" id="sobre">
        <br><br>

<div class="container">
<br><br>
  <div class="row">
    <div class="col-lg-12">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="https://image.freepik.com/icones-gratis/usuario-masculino-fechar-se-forma-para-facebook_318-37635.jpg">
                </div>
                <div class="info">
                    <div class="title">
                       
                        <?


session_checker();

echo "Olá <strong>". $_SESSION['nome'] ." </strong>!";

//echo "Seu n&iacute;vel de usu&aacute;rio &eacute; <strong>". $_SESSION['nivel_usuario']."</strong>.<br />
//Com esse n&iacute;vel, voc&ecirc; tem permis&atilde;o de acesso &agrave; algumas &aacute;reas exclusivas do site.<br /><br />";

//if($_SESSION['nivel_usuario'] == 0){

  //echo "- <strong>Estagiário</strong><br /> - Acesso &agrave; &aacute;reas exclusivas do sistema,  ao chegar e sair no local de trabalho você deve registrar o seu ponto.<br />";
//}




?>
                    </div>
                    <div class="desc">Funcionário(a)</div>

                    <div class="desc">Setor: <?
                    include '../../config.php';

                    session_checker(); //Setor

$nome = $_SESSION['nome'];


$busca_query = mysql_query("SELECT * FROM usuarios WHERE nome LIKE '%$nome%'")or die(mysql_error());


while ($dados = mysql_fetch_array($busca_query)) {
   $setor = $dados[setor];

}

 echo $setor;

?> </div>
                    
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://facebook.com/lourdinas">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher" href="https://instagram.com/lourdinas">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>

        </div>

  </div>




        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<img class="img-responsive img-circle" src="img/profile2.jpg" height="180" width="320" alt="">-->
                    <div class="intro-text">
                       <!-- <span class="name">Lourdinas</span>
                        <hr class="star-light"> -->
                        <br>
<br>
<br>
                        <span class="skills">


                        <?


session_checker();


	require('../info/mail/conexao.php');
   $autor = $_SESSION['nome'];

   $data = date('d-m-Y');
   $buscaquery = mysql_query("SELECT * FROM justificativa")or die(mysql_error());
   // Executa a variavel sql.
   while ($exibir = mysql_fetch_array($buscaquery)){; // Função while para mostrar todas as mensagens.
    echo '<table class=\"table table-bordered\" border=1 width=600 height=100 align=center>';
    echo ' <thead>';
    echo '<tr>';
                                                    
    echo '<th><b><h5 style="text-align: center;">jUSTIFICATIVA:</h5></b>  <h5></th></thead>';

   	     echo "<tbody><tr> <td>
        <h6><b>Data:</b>". $exibir['data']. " <b>Setor:</b> ".$exibir['setor']. " </td></tr><tr><td> <b>nome:</b> ".$exibir['nome']."</td></tr><tr><td><b>Justificativa:</b> ".$exibir['justificar']."</td></tr> </h6><tbody></table>
      
";


     
     

     
     

     
     
     
     


   




   }
  
   ?>

</span>






                    </div>
                </div>
            </div>
        </div>
    </header>


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
