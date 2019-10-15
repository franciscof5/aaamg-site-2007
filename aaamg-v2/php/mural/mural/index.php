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

<SCRIPT src="valida.js" type=text/javascript></SCRIPT>
<FORM name=email2 onsubmit="return checkemail()" action=enviar_msg.php?a=confirma method=post>
<TABLE style="WIDTH: 471px; HEIGHT: 200px" cellSpacing=0 cellPadding=0 width=471 
align=center border=0>
  <TBODY>
  <TR>
    <TD width=104>
      <P align=center><FONT face=Arial color=#000000 size=1>Nome:</FONT></P></TD>
    <TD width=369><INPUT id=nome 
      style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana" 
      size=30 name=nome> </TD></TR>
  <TR>
    <TD>
      <P align=left><FONT 
      color=#990099>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </FONT><FONT 
      face=Arial color=#000000 size=1>E-mail:</FONT></P></TD>
    <TD><INPUT id=email 
      style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana" 
      size=30 name=email> </TD></TR>
  <TR>
    <TD vAlign=top><FONT color=#990099>&nbsp; &nbsp;</FONT><FONT face=Arial 
      color=#000000 size=1>Mensagem:</FONT></TD>
    <TD><TEXTAREA id=mensagem style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; WIDTH: 228px; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana; HEIGHT: 134px" name=mensagem rows=10 cols=34></TEXTAREA> 
    </TD></TR>
  <TR>
    <TD vAlign=top><INPUT type=hidden value=ok name=send_status></TD>
    <TD><INPUT style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; WIDTH: 117px; CURSOR: hand; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana; HEIGHT: 18px; BACKGROUND-COLOR: #ffffff" type=submit size=15 value="Enviar Mensagem" name=submit> 
<INPUT style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; WIDTH: 108px; CURSOR: hand; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana; HEIGHT: 18px; BACKGROUND-COLOR: #ffffff" type=reset value="Limpar tudo"> 
    </TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=449 align=center border=0>
  <TBODY>
  <TR>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD></TR>
  <TR>
    <TD><BR>
      <CENTER><FONT color=#000000><FONT face=arial>Veja as mensagem 
      abaixo:</FONT></CENTER><BR><?php include "mensagens.txt"; ?></FONT></TD>
    <TD>&nbsp;</TD></TR></TBODY></TABLE>
<DIV align=left><BR></DIV></FORM></CENTER>
<CENTER>&nbsp;</CENTER>
<CENTER>&nbsp;</CENTER></TD><TD width="150" valign="top"></BODY></HTML>
