<?php $p['tit'] = "error"; if (!defined('WsSys_Token')) {echo "<font face=\"verdana\" size=\"2\" color=\"#CC0000\"><b>[ Erro ]</b> Voc� n�o pode acessar este arquivo!</font>"; exit; }

$err['unknown'] = "Ocorreu um erro desconhecido.";

$err['demo'] = "Esta fun��o n�o est� ativada na vers�o de demonstra��o.|back";
$err['noperms'] = "Voc� n�o tem permiss�o para executar esta a��o!|back";
$err['nodata'] = "Dados faltando!|back";
$err['incform'] = "Preencha todos os campos em <b>negrito</b> do formul�rio.|back";
$err['idinvalid'] = "ID inv�lido!|back";
$err['nosel'] = "Selecione pelo menos um item para esta a��o.|back";
$err['bytesinvalid'] = "Voc� digitou um tamanho inv�lido!<br />Formato esperado: <b>1 KB</b>.|back";
$err['onlynumbers'] = "Voc� usou caracteres onde n�o era permitido.<br />Verifique os campos que s� permitem n�meros.|back";

$err['news_noperms'] = "Voc� n�o tem permiss�o para modificar esta not�cia!|back";

$err['perms_own'] = "Voc� n�o pode alterar as suas pr�prias permiss�es!<br />Pe�a a um administrador para alter�-las para voc�.|back";

$err['id_inuse'] = "A identifica��o digitada j� est� em uso.<br />Por favor escolha outra.|back";
$err['id_system'] = "A identifica��o digitada � de uso exclusivo do sistema.<br />Por favor escolha outra.|back";
$err['id_invalid'] = "A identifica��o digitada � inv�lida!<br />Use apenas letras <b>min�sculas</b>, n�meros ou _.|back";

$err['login_own'] = "Voc� n�o pode alterar a sua conta de usu�rio por esta se��o!<br />Para edit�-lo, clique no seu nome de usu�rio, no menu ao lado.|back";
$err['login_inuse'] = "O login digitado j� est� em uso.<br />Por favor escolha outro.|back";
$err['login_system'] = "O login digitado � de uso exclusivo do sistema.<br />Por favor escolha outro.|back";
$err['login_invalid'] = "O login digitado � inv�lido!<br />Use apenas letras <b>min�sculas</b>, n�meros ou _.|back";

$err['lostpwd_disabled'] = "Este recurso foi bloqueado.<br />Solicite a mudan�a da senha a um administrador.|back";
$err['lostpwd_noemail'] = "Este usu�rio n�o tem um e-mail configurado!<br />Solicite a mudan�a da senha a um administrador.|back";
$err['lostpwd_emailmismatch'] = "Nome de usu�rio ou e-mail inv�lidos!|back";
$err['lostpwd_notsent'] = "Ocorreu um erro ao enviar o e-mail, tente novamente mais tarde.<br />Nenhuma altera��o foi feita.|continue";

$err['pack_invalidurl'] = "A URL informada n�o � suportada pelo MZn�.<br /><br />Um exemplo de URL v�lida:<br /><b>http://www.meusite.com.br/pacote/</b>|back";
$err['pack_nosocket'] = "N�o foi poss�vel estabelecer uma conex�o com o servidor do pacote.<br /><br />� poss�vel que a URL seja inv�lida, o host pode estar fora<br />do ar, ou o PHP n�o pode acessar arquivos externos.|back";
$err['pack_notfound'] = "N�o foi poss�vel localizar a<br />URL especificada no servidor.<br /><br />Verifique se voc� digitou-a corretamente.|back";
$err['pack_noaccess'] = "A URL especificada retornou<br />um erro de acesso negado.<br /><br />Verifique se voc� digitou-a corretamente.|back";
$err['pack_redir'] = "� um redirecionamento para outra URL.<br /><br />Informe a URL verdadeira.|back";
$err['pack_not200'] = "A URL especificada retornou<br />um erro desconhecido.<br /><br />Verifique se voc� digitou-a corretamente.|back";
$err['pack_invalid'] = "A URL especificada retornou um arquivo<br />desconhecido e n�o um pacote de smilies.<br /><br />Verifique se voc� digitou-a corretamente.|back";

$err['logininvalid'] = "Nome de usu�rio ou senha inv�lidos!|back";

$err['passmismatch'] = "As senhas digitadas s�o diferentes!<br />Para uma maior serguran�a voc� deve digitar a mesma senha nos dois campos.|back";

$err['backup_notar'] = "N�o foi poss�vel localizar o arquivo <b>backup.tar</b>|back";
$err['backup_corrupt'] = "O arquivo de backup est� corrompido ou � inv�lido e, por isso, foi removido.|back";
$err['backup_upload_notmp'] = "N�o foi poss�vel localizar o arquivo enviado.<br /><br />Verifique se o seu host suporta envio de arquivos<br />e se voc� selecionou um arquivo do seu computador.|back";
$err['backup_upload_invalid'] = "O tipo de arquivo enviado n�o corresponde a um arquivo de backup!<br />Verifique o arquivo selecionado e tente novamente.|back";

$err['upload_noupload'] = "Nenhum arquivo foi enviado.<br /><br />Verifique se voc� selecionou algum arquivo do seu<br />computador ou se os arquivos n�o ultrapassam o limite.<br /><br /><span class=\"important\">Este erro pode ocorrer se o seu host<br />bloqueia envio de arquivos por PHP.</span>|back";
$err['upload_toobigsys'] = "O tamanho do <b>Arquivo ". $s->req['file'] ."</b> excede<br />o limite imposto pelo PHP.<br /><br />Entre em contato com o administrador do<br />seu host para mais esclarecimentos.<br /><br />Nenhum outro arquivo foi salvo.|back";
$err['upload_toobig'] = "O tamanho do <b>Arquivo ". $s->req['file'] ."</b> excede o<br />limite imposto pelo administrador.<br /><br />Nenhum outro arquivo foi salvo.|back";
$err['upload_broken'] = "O <b>Arquivo ". $s->req['file'] ."</b> n�o foi enviado<br />completamente e est� corrompido.<br /><br />Nenhum outro arquivo foi salvo.|back";
$err['upload_extinvalid'] = "A extens�o do arquivo <b>". $s->req['file'] ."</b> n�o � permitida.<br /><br />Nenhum outro arquivo foi salvo.|back";
$err['upload_noover'] = "O <b>Arquivo ". $s->req['file'] ."</b> j� havia sido enviado por outro usu�rio.<br />Altere o nome deste arquivo ou apague-o e tente novamente.<br /><br />Nenhum outro arquivo foi salvo.|back";
$err['upload_protected'] = "O <b>Arquivo ". $s->req['file'] ."</b> � um arquivo do<br />sistema e n�o pode ser enviado.<br /><br />Altere o nome deste arquivo e tente novamente.<br /><br />Nenhum outro arquivo foi salvo.|back";

if (!$err[$s->req['id']]) {$err[$s->req['id']] = "Ocorreu um erro desconhecido|back"; }

list ($errMsg, $errLnk) = explode("|", $err[$s->req['id']]);

echo $errMsg;
if ($errLnk) {
	echo "<br /><br /><span class=\"small\">";
	if ($errLnk == "continue") {echo "<a href=\"index.php\">Clique aqui para continuar</a>"; }
	else if ($errLnk == "back") {echo "<a href=\"". $s->req['HTTP_REFERER'] ."\" onclick=\"history.back(); return false; \">Clique aqui para voltar</a>"; }
	else if ($errLnk == "retry") {echo "<a href=\"index.php\" onclick=\"location.reload(); return false; \">Clique aqui para tentar novamente</a>"; }
	echo "<br /></span>";
}

?>
