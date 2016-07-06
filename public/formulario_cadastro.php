<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>



<link href="http://www.lourdinas.com.br/default/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="http://www.lourdinas.com.br/default/favicon.ico" rel="icon" type="image/x-icon" />
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link href="estilo.css" rel="stylesheet">

	   <script src="js/bootstrap.min.js"></script>
	   <script src="js/java.js"></script>
</head>
<body>


	<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <body>
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <div class="row-fluid user-row">
                                   <!-- <img src="http://s11.postimg.org/7kzgji28v/logo_sm_2_mr_1.png" class="img-responsive" alt="Conxole Admin"/>
                                        -->
                                       
                                    <H3 class="lael">Cadastro de usuário</H3>
                                </div>
                            </div>
                            <div class="panel-body">
                            
                                <form accept-charset="UTF-8" role="form" class="form-signin" name="cadastro" method="post" action="cadastra.php" enctype="multipart/form-data">
                                    <fieldset>
                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <label>
                                            Nome completo
                                        </label>                                        
                                        <input class="form-control" placeholder="usuario" id="username nome" name="nome" type="text">

                                        <label>
                                            Email
                                        </label>                                        
                                        <input class="form-control" placeholder="email" id="email" name="email" type="text" >
                                        
                                        <label>
                                            Usuário
                                        </label>                                        
                                        <input class="form-control" placeholder="usuario" id="usuario" name="usuario" type="text" >
                                        
                                        <label>
                                            setor
                                        </label>                                        
                                        <input class="form-control" placeholder="setor" id="setor" name="setor" type="text" >
                                                        
                                        <label>
                                            Início
                                        </label>                                        
                                        <input class="form-control" placeholder="Início" id="inicio" name="inicio" type="text" >                

                                        <label>
                                            Final
                                        </label>                                        
                                        <input class="form-control" placeholder="Final" id="final" name="final" type="text" >

                                        <label>
                                            CPF
                                        </label>                                        
                                        <input class="form-control" placeholder="CPF" id="cpf" name="cpf" type="text" >


                                        <label>
                                            Registro Geral
                                        </label>                                        
                                        <input class="form-control" placeholder="Registro Geral" id="registro" name="registro" type="text" >

                                        <label>
                                            Tipo
                                        </label>                                        
                                        <input class="form-control" placeholder="Tipo" id="tipo" name="tipo" type="text" >

                                        <label>
                                            Endereço
                                        </label>                                        
                                        <input class="form-control" placeholder="Endereço" id="endereco" name="endereco" type="text" >

                                        <label>
                                            Bairro
                                        </label>                                        
                                        <input class="form-control" placeholder="Bairro" id="bairro" name="bairro" type="text" >

                                        <label>
                                            CEP
                                        </label>                                        
                                        <input class="form-control" placeholder="CEP" id="cep" name="cep" type="text" >

                                        <label>
                                            Cidade
                                        </label>                                        
                                        <input class="form-control" placeholder="Cidade" id="cidade" name="cidade" type="text" >

                                        <label>
                                            UF
                                        </label>                                        
                                        <input class="form-control" placeholder="UF" id="uf" name="uf" type="text" >

                                        <label>
                                            Instituição de Ensino
                                        </label>                                        
                                        <input class="form-control" placeholder="Instituição de Ensino" id="instituicao" name="instituicao" type="text" >

                                        <label>
                                            Horário do estágio - 00 às 00 horas
                                        </label>                                        
                                        <input class="form-control" placeholder="Horário do estágio" id="horario" name="horario" type="text" >

                                        <label>
                                            CHr
                                        </label>                                        
                                        <input class="form-control" placeholder="CHr" id="chr" name="chr" type="text" >

                                        
                                        <br></br>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" id="login" name="Submit" value="Cadastrar">
                                    </fieldset>
                                </form>
                            </div>
                            <div class="row-fluid user-row">
                                    <p class="lael">Informática Lourdinas</p>                                 
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>



            
        </body>
            



</body>
</html>

<!--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Formul&aacute;rio Cadastro</title>
<style type="text/css">

body {
	background-color: #CCCCCC;
}



</style></head>

<body>
Formul&aacute;rio de Cadastro <br /><br />
<form name="cadastro" method="post" action="cadastra.php">
Nome<br /> 
<input name="nome" type="text" id="nome" value="<? echo $_POST['nome']; ?>" /><br />
<br />
Sobrenome<br /> 
<input name="sobrenome" type="text" id="sobrenome" value="<? echo $_POST['sobrenome']; ?>" /><br />
<br /> 


Email<br /> 
<input name="email" type="text" id="email" value="<? echo $_POST['email']; ?>" /><br />
<br />
Nome de Usu&aacute;rio<br /> 
<input name="usuario" type="text" id="usuario" value="<? echo $_POST['usuario']; ?>" /><br />
<br />
+ informa&ccedil;&otilde;es  sobre voc&ecirc;<br />
<textarea name="info" id="info"><? echo $_POST['info']; ?></textarea>
<br />
<br />
<input type="submit" name="Submit" value="Enviar" />

</form>
</body>
</html>
-->