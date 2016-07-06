<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  </head>
  <body>

    <div>


    <div class="alert alert-success">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <?

     require('conexao.php');
     $buscaquery = mysql_query("SELECT * FROM Mensagens order by id desc limit 0,50")or die(mysql_error());
      // Executa a variavel sql.
     while ($exibir = mysql_fetch_array($buscaquery)){; // Função while para mostrar todas as mensagens.
     echo "Mensagem enviada por ";
     echo '<b>Nome: </b>'.$exibir['nome'].' <br> <b>Mensagem:</b> '.$exibir['mensagem']; // echo exibe da forma que voce quer né ^^.
     echo "<br>"; // Função para quebra de linha O/.
     echo "<br>";
     }
     ?>

    </div>
    </div>


  </body>
</html>
