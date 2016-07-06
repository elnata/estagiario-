<?

function session_checker(){

	if(!isset($_SESSION['usuario_id'])){

		header ("Location:formulario_login.html");

		exit(); 
	}
}

function verifica_email($EMAIL){

    list($User, $Domain) = explode("@", $EMAIL);
    $result = @checkdnsrr($Domain, 'MX');

    return($result);

}

  
// Função para calcular horário
function dif_horario($horario1, $horario2) {
    $horario1 = strtotime("1/1/1980 $horario1");
    $horario2 = strtotime("1/1/1980 $horario2");
         
 if ($horario2 < $horario1) {
    $horario2 = $horario2 + 86400;
 }
  
return ($horario2 - $horario1) / 3600;      
}
  


?>
