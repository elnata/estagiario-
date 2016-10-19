<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Formul&aacute;rio Nova Senha</title>
</head>

<body>

<form name="form1" method="post" action="mudar_senha.php">

Por favor digite o seu email que est&aacute; cadastrado em nosso banco de dados;<br />

<input name="email" type="text" id="email" />
<br>
Nova senha<br>
<input name="senha" type="password" id="senha" />
<input name="recupera" type="hidden" id="recupera" value="recupera" />
<br>
<input type="submit" name="Submit" value="Mudar senha" />
</form>

</body>
</html>