<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="estilo.css" rel="stylesheet">
<? require "conexao.php"; require "pagamento_funcionarios.php"; ?>
	   <script src="js/bootstrap.min.js"></script>
	   <script src="js/java.js"></script>
</head>
<body>

<?php if(isset($_POST['button'])){

$code = $_POST['code'];
$password = $_POST['password'];

if($code == ''){
    echo "<h2>Por favor, digite o número do cartão ou seu código de acesso!</h2>";
}else if($password == ''){
    echo "<h2>Por favor, digite sua senha!</h2>";
}else{
    
$sql_1 = mysql_query("SELECT * FROM acesso_ao_sistema WHERE code = '$code' AND senha = '$password'");
$conta_sql_1 = mysql_num_rows($sql_1);

if($conta_sql_1 == ''){
    echo "<h2>O código de acesso ou a senha não corresponde!</h2>";
}else{
    
    while($res_1 = mysql_fetch_array($sql_1)){
        
        $status = $res_1['status'];
        $code = $res_1['code'];
        $senha = $res_1['senha'];
        $nome = $res_1['nome'];
        $painel = $res_1['painel'];
   
    if($status == 'Inativo'){
         echo "<h2>Você está inativo, por favor, digiga-se a coordenação da escola para que seu acesso seja liberado!</h2>";
    }else{
        
        session_start();
        $_SESSION['code'] = $code;
        $_SESSION['nome'] = $nome;
        $_SESSION['password'] = $senha;
        $_SESSION['painel'] = $painel;
        
        if($painel == 'admin'){
            echo "<script language='javascript'>window.location='admin';</script>";
        }else if($painel == 'Aluno'){
            echo "<script language='javascript'>window.location='aluno';</script>";
        }else if($painel == 'professor'){
            echo "<script language='javascript'>window.location='professor';</script>"; 
        }else if($painel == 'portaria'){
            echo "<script language='javascript'>window.location='portaria';</script>";  
        }else if($painel == 'tesoureiro'){
            echo "<script language='javascript'>window.location='tesouraria';</script>";            
        }else{
        
         echo "<h2>Seu acesso está correto, porém, não estamos conseguindo acessar o seu painel, por favor, digira-se a coordenação!</h2>";
        
     }
    }
   }
  }
 }
}?> 

	<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                    <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                                    <H3 class="lael">LAELTECH</H3>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" class="form-signin" name="form" method="post" action="" enctype="multipart/form-data">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <input class="form-control" placeholder="Username" id="username" name="code" type="text">
                                        <input class="form-control" placeholder="Password" id="password" name="password" type="password">
                                        <br></br>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" name="button" value="Login »">
                                    </fieldset>
                                </form>
                            </div>
                            <div class="row-fluid user-row">
                                    <p class="lael">LAELTECH</p>
                                    <p class="lael">aqui ficara o texto</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>



            
        </body>
            



</body>
</html>