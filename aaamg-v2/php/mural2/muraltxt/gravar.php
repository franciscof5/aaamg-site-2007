<?

######################################################
#                                                    #
#                                                    #
#       Desenvolvido por: papito - Erickson -        #
#           erickson@laranjaldojari.net              #
#              MSN: papito@tvsom.com.br              #
#                                                    #
#                                                    #
######################################################

#Busca o caminho do arquivo...
#include "inc_caminho.php";
$caminho = "teste.txt";

#Abre o arquivo para grava��o...
$gravar = fopen($caminho, "a+");

#Grava no arquivo.txt os dados enviados pelo formul�rio...
#O \n � usado para organizar os dados dentro do arquivo.txt para melhor vizualiza��o, mas n�o � obrigat�rio o uso dele...
#Os TAGS HTML servem para formatar o conte�do do arquivo.txt na hora da vizualiza��o do usu�rio...
#fwrite($gravar, "<b>Nome:</b> $nome<br>\n<b>Mensagem:</b> $msg<br>\n<center>---------------------------</center><br>\n");
fwrite($gravar, "oi");

#Abre o arquivo.txt para leitura...
$abre = fopen($caminho, "a+");

#Armazena o conte�do do arquivo.txt na vari�vel $conte�do...
$conteudo = fread($abre, filesize($caminho));

#Exibe o conte�do do arquivo.txt em uma tabela para o usu�rio...
echo "<center>";
echo "<h1>Mural de Recados</h1><br>";
echo "<table width=250 border=1 bordercolor=red cellpadding=0 cellspacing=0>";
echo "<tr><td><font size=2 face=verdana>$conteudo</font></td></tr>";
echo "</table>";
echo "</center>";

#Fecha a conex�o com o arquivo.txt...
fclose($abre);
?>
