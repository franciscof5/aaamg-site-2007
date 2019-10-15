<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
	<head>
		<title>MZn� 2.0 ADV - Coment�rios da not�cia</title>
<style type="text/css">
<!--
a       {color:#000000; text-decoration:none; }
a:hover {color:#000000; text-decoration:underline; }

body        {color:#000000; background-color:#FFFFFF; }
body, table {font-family:Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:10pt; }

/*

   Estilo do formul�rio
   Observe abaixo os c�digos para a formata��o
   do formul�rio de adi��o de coment�rios.

*/

/* T�tulo do campo | Ex: "Seu nome:" */
.formItem {font-size:8pt; }

/* Tags INPUT de texto */
input.normal {font-family:Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:8pt; }

/* Bot�o de envio */
button.submit {font-family:Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:8pt; font-weight:bold; }

-->
</style>
	</head>
	<body>
		
<?php

// Define as vari�veis iniciais e chama a classe de exibi��o do MZn�
$mzn_path = dirname(__FILE__); $mzn_path = str_replace("/classic:EOF:", "", $mzn_path .":EOF:"); $mzn_path = str_replace("\\classic:EOF:", "", $mzn_path .":EOF:"); $mzn_path = str_replace(":EOF:", "", $mzn_path); require_once($mzn_path ."/mzn2.php"); $mzn_selfpage = $s->req['PHP_SELF'];

// Define $mzn2 como a classe com todas as fun��es de exibi��o do MZn�
$mzn2 = new MZn2_Noticias;

// Define a categoria que ser� usada
$mzn2->categoria = "principal";

// Define $acao como o campo 'acao' da query string
$act = $s->req['act'];

// Se n�o tem $act
if (!$act) {
	echo "<div align=\"center\">";
	$mzn2->porpagina = 0;
	$mzn2->noticia = $s->req['id'];
	
	$mzn2->ordem = "crescente";
	$mzn2->mostrar_comentarios();
	
	echo "<div style=\"font-family:Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:8pt; width:450px; \"><div style=\"text-align:left; margin-bottom:2px; padding:2px; padding-left:4px; color:#FFFFFF; background-color:#808080; \"><b>Adicione o seu!</b></div></div>";
	$mzn2->mostrar_formulario_comentario("act=add");
	
	echo "<a href=\"#\" onclick=\"window.close(); return false; \">Fechar janela</a>";
	echo "</div>";
}

// Ou se $act � igual a "add"
else if ($act == "add") {
	$mzn2->adicionar_comentario();
}

?>
		
	</body>
</html>
