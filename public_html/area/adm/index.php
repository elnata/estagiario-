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
    <link href="../info/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../info/css/freelancer.css" rel="stylesheet">

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
                <a class="revelando" href="#page-top"><h3>Ponto de estágio</h3></a>
          
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
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
            
<br>
<br>

<span class="skills">


                        <?
                        include '../../config.php';

    session_start();


session_checker();

echo "<h5>Bem vindo <strong>". $_SESSION['nome'] ." </strong>! <br />
  Você est&aacute; acessando &aacute;rea restrita para usu&aacute;rios do RH!</h5><br /><br />";




?></span>



            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Gerenciador RH</h2>
                    <hr class="star-primary">
                </div>
            </div>







<div class="container">
 <h3 align="center">Pesquisa</h3>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg btn-block" id="myBtn">Pesquisar estágiario para relatório</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-search"></span> Pesquisar</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" role="form" method="post" action="busca.php" target="_blank">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span><p>Nome do estágiario(a):</p></label>            
              <input type="text" name="palavra"  class="form-control" id="usrname name" placeholder="Nome do estágiario(a)">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-eye-open"></span> <p>Mês:</p></label>              
              <input type="text" name="data" class="form-control" id="psw name" placeholder="Mês-Ano - Ex: 06-2016">
            </div>

              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
          </form>
        </div>
        
      
    </div>
  </div>
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>


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
                        <form id="form1" name="form1" method="post" action="../info/mail/enviar_dados.php" target="_blank">

                        <div class="form-group">


<div class="col-md-8">

<p align="center">Enviar mensagem para:</p>
      <select class="form-control" id="sel1 para" name="para">

<?

require('../info/mail/conexao.php');

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
                            <p>Mensagem:</p>
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
