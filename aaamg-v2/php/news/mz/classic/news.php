<?php

/*

== Observa��es ==
Para trocar o n�mero de not�cias exibidas, altere o valor de
$mzn2->porpagina para o n�mero desejado (linha 23).

*/

// Define as vari�veis iniciais e chama a classe de exibi��o do MZn�
$mzn_path = dirname(__FILE__); $mzn_path = str_replace("/classic:EOF:", "", $mzn_path .":EOF:"); $mzn_path = str_replace("\\classic:EOF:", "", $mzn_path .":EOF:"); $mzn_path = str_replace(":EOF:", "", $mzn_path); require_once($mzn_path ."/mzn2.php"); $mzn_selfpage = $s->req['PHP_SELF'];

// Define $mzn2 como a classe com todas as fun��es de exibi��o do MZn�
$mzn2 = new MZn2_Noticias;

// Define a categoria que ser� usada
$mzn2->categoria = "principal";

// == Observa��es ==
// Para trocar o n�mero de not�cias
// exibidas, altere o valor abaixo.
$mzn2->porpagina = 10;

// Mostra as headlines
$mzn2->mostrar_noticias();

?>
