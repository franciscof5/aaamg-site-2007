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

?>

<?php
		$nome     = $_POST["nome"];
		$email    = $_POST["email"];
		$mensagem = $_POST["mensagem"];
		$msg =  "<br><font color=#000000> <b>Nome: </b>$nome</font><br>";
		$msg .= "<font color=#000000><b>E-mail: </b>$email</font><br>";
		$msg .= "<font color=#000000><b>Mensagem:</b> $mensagem</font><br>";
		$msg .= "<br>";
		$msg .= "<font color=#000000>............................................................................................</font>";
		$ponteiro = fopen ("mensagens.txt", "a");
		fwrite($ponteiro, "$msg\n\n");
		fclose ($ponteiro); ?>

<br><br><br><br><BR>
<font face="arial"><center><h4>	Sua mensagem foi enviada com sucesso!
<BR>Agradecemos sua visita.		</h3><p>

<a href="javascript:history.back(1)"> Voltar </a>

