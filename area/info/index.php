<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ponto de estágio</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">
    <link href="../estilo.css" rel="stylesheet">

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
                <a class="revelando" href="#page-top"><h3>Local do estagiário</h3></a>

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
        
<div class="container">
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

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Gerenciador</h2>
                    <hr class="star-primary">
                </div>
            </div>
	
	
<?	
	require('mail/conexao.php');
   $autor = $_SESSION['nome'];

   $data = date('d-m-Y');
   $buscaquery = mysql_query("SELECT * FROM Mensagens WHERE nome LIKE '%".$autor."%' AND lido ='0'")or die(mysql_error());
   // Executa a variavel sql.
   while ($exibir = mysql_fetch_array($buscaquery)){; // Função while para mostrar todas as mensagens.



   	     echo "
<!-- Trigger the modal with a button -->
<button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">Você tem uma mensagem</button>

<!-- Modal -->
<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h6 class=\"modal-title\">Mensagem enviada por: <br>". $exibir['de']. "<br>Setor: ".$exibir['setor']." </h6>
      </div>
      <div class=\"modal-body\">
";


     
     

     
     

     
     
     echo '<b><h5>Mensagem:</h5></b>  <h5>'.$exibir['mensagem'] . "</h5>"; // echo exibe da forma que voce quer né ^^.
     


     echo "      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>

  </div>
</div>


   

</div>
</div>
";




   }
  
   ?>



	
            <div>
                <div>
                  <div class="container">
                    <h3 align="center">Cadastro</h3>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#myModal">Cadastro de estagiário e funcionários</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Cadastro de estagiário e funcionários</h4>
                          </div>
                          <div class="modal-body">
                            <a href="../../formulario_cadastro.php" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">Cadastrar estagiário</button></a>
                             <hr>
                            <a href="formulario_cadastro.php" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-block">Cadastrar funcionário</button></a>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                <!--<h3 class="text-center">O Ponto</h3> -->


              </div>


            </div>


            <div>
              <div class="container">
                <h3 align="center">mensagem</h3>
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#Modal">Enviar mensagem para estagiário</button>

                <!-- Modal -->
                <div class="modal fade" id="Modal" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Enviar mensagem para estagiário</h4>
                      </div>
                      <div class="modal-body">
                        <form id="form1" name="form1" method="post" action="mail/enviar_dados.php">

                        <div class="form-group">


<div class="col-md-8">

<label for="sel1">Enviar mensagem para:</label>
      <select class="form-control" id="sel1 para" name="para">

<?

require('mail/conexao.php');

$buscaquery = mysql_query("SELECT * FROM usuarios ORDER BY nome")or die(mysql_error());



   // Executa a variavel sql.
   while ($exibir = mysql_fetch_array($buscaquery)){; // Função while para mostrar todas as mensagens.
        

        echo"<option>".$exibir['nome']."</option>";
        }
?>

      </select>

</div>


                        <div class="form-group">

                          <div class="col-md-8">
                            <h4>Mensagem:</h4>
                          <textarea class="form-control" placeholder="Mensagem" rows="5" id="mensagem" name="mensagem" value="mensagem"></textarea>

                          </div>
                          

                          <div class="enviar">
                          <input name="Enviar" type="submit" class="btn btn-info" value="Enviar">
                          </div>


                        <br>
                          <br>
                            <br>
                              <br>
                                <br>
                                  <br>
                                    <br>
                                    <br>
                                    <br>

                                      <br>
                                        <br>
                                          <br>


                      </div>
                      <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>



            <!--<h3 class="text-center">O Ponto</h3> -->


          </div>




    </section>

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
