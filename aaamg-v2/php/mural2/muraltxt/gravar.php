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

#Abre o arquivo para gravação...
$gravar = fopen($caminho, "a+");

#Grava no arquivo.txt os dados enviados pelo formulário...
#O \n é usado para organizar os dados dentro do arquivo.txt para melhor vizualização, mas não é obrigatório o uso dele...
#Os TAGS HTML servem para formatar o conteúdo do arquivo.txt na hora da vizualização do usuário...
#fwrite($gravar, "<b>Nome:</b> $nome<br>\n<b>Mensagem:</b> $msg<br>\n<center>---------------------------</center><br>\n");
fwrite($gravar, "oi");

#Abre o arquivo.txt para leitura...
$abre = fopen($caminho, "a+");

#Armazena o conteúdo do arquivo.txt na variável $conteúdo...
$conteudo = fread($abre, filesize($caminho));

#Exibe o conteúdo do arquivo.txt em uma tabela para o usuário...
echo "<center>";
echo "<h1>Mural de Recados</h1><br>";
echo "<table width=250 border=1 bordercolor=red cellpadding=0 cellspacing=0>";
echo "<tr><td><font size=2 face=verdana>$conteudo</font></td></tr>";
echo "</table>";
echo "</center>";

#Fecha a conexão com o arquivo.txt...
fclose($abre);
?>
