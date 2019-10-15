<?php

/*

== Observa��es ==
Para trocar o n�mero de headlines ou not�cias exibidas,
altere o valor de $mzn2->porpagina para o n�mero desejado
na sua respectiva linha (headlines: 48, not�cias: 56).

*/

// Define as vari�veis iniciais e chama a classe de exibi��o do MZn�
$mzn_path = dirname(__FILE__); $mzn_path = str_replace("/classic:EOF:", "", $mzn_path .":EOF:"); $mzn_path = str_replace("\\classic:EOF:", "", $mzn_path .":EOF:"); $mzn_path = str_replace(":EOF:", "", $mzn_path); require_once($mzn_path ."/mzn2.php"); $mzn_selfpage = $s->req['PHP_SELF'];

// Define $mzn2 como a classe com todas as fun��es de exibi��o do MZn�
$mzn2 = new MZn2_Noticias;

// Define a categoria que ser� usada
$mzn2->categoria = "principal";

// Redireciona caso esteja usando a estrutura nova
if (isset($s->req['mostrar'])) {header("Location: ../noticias.php?". $s->req['QUERY_STRING']); exit; }


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
	<head>
		<title>MZn� 2.0 ADV - Not�cias</title>
<style type="text/css">
<!--
a       {color:#000000; text-decoration:none; }
a:hover {color:#000000; text-decoration:underline; }

body        {color:#000000; background-color:#FFFFFF; }
body, table {font-family:Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:10pt; }
-->
</style>
	</head>
	<body>
		
<?php

// == Observa��es ==
// Para trocar o n�mero de headlines
// exibidas, altere o valor abaixo.
$mzn2->porpagina = 6;

// Mostra as headlines
$mzn2->mostrar_headlines();

// == Observa��es ==
// Para trocar o n�mero de not�cias
// exibidas, altere o valor abaixo.
$mzn2->porpagina = 10;

// Mostra as headlines
$mzn2->mostrar_noticias();

echo "\n"; ?>
		
	</body>
</html>
