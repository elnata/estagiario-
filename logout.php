<?

session_start();



	session_destroy();

//	if(!$_SESSION('nome')){

		echo "<strong>Voc&ecirc; n&atilde;o est&aacute; mais logado no sistema!</strong><br /><br />";
		
		include "index.html";

//	}

?>
