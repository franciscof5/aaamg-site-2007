<?php

/////////////////////////////////////////////////////////////////////////////
//                                                                         //
//                      __  __   ____           ___                        //
//                     |  \/  | |_  /  _ _ �   |_  )                       //
//                     | |\/| |  / /  | ' \     / /                        //
//                     |_|  |_| /___| |_||_|   /___|                       //
//                                                                         //
//                             ---------------                             //
//                            | 2.0 Build #09 |                            //
//                             ---------------                             //
//                                                                         //
//        Copyright 2003-2004 WsTec - Todos os direitos reservados         //
//                                                                         //
//////////////////////////////////////   by Wesley de Souza - GokuSSJ5   ////
//                                                                         //
//  ----------------                                                       //
// | Licen�a de uso |                                                      //
//  ----------------                                                       //
//     A  fim  de uma melhor aceita��o da comunidade em geral,  trocamos a //
//  licen�a do MZn� para a famosa GNU-GPL.  Por  favor  leia  os  arquivos //
//  licenca_GPL_pt-br.txt e licenca_GPL_oficial_en.txt para mais detalhes. //
//                                                                         //
//  ------------                                                           //
// | Requisitos |                                                          //
//  ------------                                                           //
// M�nimo:                                                                 //
// - PHP 4.2                                                               //
// - Servidor Apache 1.3.x                                                 //
// - Sistema operacional Windows (NT, 2000 ou XP), Linux ou Unix           //
// - 2 MB de espa�o livre                                                  //
//                                                                         //
// Recomendado:                                                            //
// - PHP 4.3 (vers�o mais recente) rodando como m�dulo do Apache           //
// - Servidor Apache 2.0.x (vers�o mais recente)                           //
// - Sistema operacional WindowsNT (NT ou 2000), Linux ou Unix             //
// - 3 MB de espa�o livre                                                  //
//                                                                         //
//  -----------------                                                      //
// | Desenvolvimento |                                                     //
//  -----------------                                                      //
// - Wesley de Souza                                                       //
//   Nickname: Wesley [Goku5]                                              //
//                                                                         //
// - Sistema produzido pela WsTec                                          //
//   WebSite:  www.wstec.net                                               //
//   Contato:  wstec@wstec.net                                             //
//                                                                         //
//  ----------------                                                       //
// | Agradecimentos |                                                      //
//  ----------------                                                       //
// - Design do sistema e do site                                           //
//     H^llz                                                               //
//                                                                         //
// - Beta Testers                                                          //
//     Andre.EXE                                                           //
//     Arthur Helfstein Fragoso                                            //
//     Fuuma.EXE                                                           //
//     Leandro                                                             //
//     Maur�cio Beckert                                                    //
//     Nader                                                               //
//     NightHawk                                                           //
//     Reptile                                                             //
//                                                                         //
//  --------------                                                         //
// | Distribui��o |                                                        //
//  --------------                                                         //
// Oficialmente apenas no site abaixo:                                     //
// - http://www.mznews.kit.net                                             //
//   Visite para informa��es sobre novas vers�es e para obter suporte.     //
//   Se voc� deseja hospedar um mirror do MZn�, entre em contato conosco.  //
//                                                                         //
// Visite!                                                                 //
// - Mundo DBZ - Tudo sobre Dragon Ball!                                   //
//   http://www.mundo-dbz.com.br                                           //
//                                                                         //
/////////////////////////////////////////////////////////////////////////////

// Verifica��es de vers�o
if (false) { ?><!-- MZn2 - Sem suporte --><div style="font-family:Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:10pt; color:#CC0000; background-color:#FFFFFF; padding:8px; padding-left:10px; margin:5px; margin-top:10px; "><h4 style="margin:0px; ">MZn&sup2; - Sem suporte a PHP</h4>O MZn� detectou que o host para o qual que voc� enviou o sistema n�o oferece suporte � tecnologia PHP.<br />O MZn� s� funciona em hosts com suporte � PHP 4.2 no m�nimo.</div><noframes><?php exit; }
$ver = str_replace(".", "", phpversion()); if ($ver < 420) { ?><!-- MZn2 - Vers�o incompat�vel --><div style="font-family:Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size:10pt; color:#CC0000; background-color:#FFFFFF; padding:8px; padding-left:10px; margin:5px; margin-top:10px; "><h4 style="margin:0px; ">MZn&sup2; - Vers�o incompat�vel</h4>O MZn� detectou que o host para o qual que voc� enviou o sistema est� usando uma vers�o n�o suportada da tecnologia PHP.<br />O MZn� s� funciona em hosts com suporte � PHP 4.2 no m�nimo.</div><?php exit; }

error_reporting(7); set_magic_quotes_runtime(0);

define("WsSys_Token", 1);

unset($s); unset($m); unset($p);

$AbsPath = dirname(__FILE__);
require_once $AbsPath ."/inc/g_global.php";
require_once $AbsPath ."/inc/g_config.php";
	$s = new WsSys;
	$s->cfg = $c;
	$s->debug = 1;

require_once $AbsPath ."/inc/g_mzn2.php";
	$m = new MZn2;

require_once $AbsPath ."/inc/g_layout.php";
	$l = new Layout;

if (!@file_exists($s->cfg['file']['mzn2_safe'])) {header("Location: sys_install.php"); exit; }
if (!@is_writable($s->cfg['file']['config'])) {$m->error(__FILE__, __LINE__, "N�o � poss�vel alterar o arquivo de configura��es. � prov�vel que o seu host tenha 'zerado' as permiss�es dos arquivos.<br /><br />Por favor altere as permiss�es de todos os arquivos da pasta <b>data</b> para Leitura e Escrita (CHMOD 666).", 1); }

$m->globalStart();

if (!$s->usr['unique']) {$s->usr['unique'] = substr(md5(time()*rand()), 0, 10); }

if ($s->req['cat']) {$s->usr['cat'] = $s->req['cat']; }
if (!$s->usr['cat'] || !$s->cat[$s->usr['cat']]) {$s->usr['cat'] = "principal"; }
$cat = $s->usr['cat'];

if ($s->usr['user']) {
	if ($s->usr['auth'] == md5("WsSys LOGIN ". $s->users[$s->usr['user']]['pwd'])) {$s->usr['data'] = $s->users[$s->usr['user']]; }
	else {$m->sessionKill(); $m->location(); }
}

if (!$s->req['sec']) {$s->req['sec'] = "index"; }
$sec = $s->req['sec'];
$incFile = $s->cfg['path']['inc'] ."/i_". $sec .".php";
if (!file_exists($incFile)) {$m->error(__FILE__, __LINE__, "Se��o <b>". $sec ."</b> inv�lida!", 1); }

$bodyReplace = array();

$designActive = TRUE;
ob_start();
include($incFile);
$incContents = ob_get_contents();
ob_end_clean();

if ($designActive) {
	ob_start();
	include($s->cfg['path']['inc'] ."/g_html.php");
	$incFinal = ob_get_contents(); $incContents = trim($incContents);
	$incFinal = preg_replace("/{body}/", $incContents, $incFinal);
	ob_end_clean();
}
else {$incFinal = $incContents; }

$m->globalEnd();

// Olha o c�digo "descriptografado" a� embaixo... legal neh? ��

$bodyReplace["session"] = $s->req['s'];
$bodyReplace["skin"] = $s->sys['skin'];
	$bodyReplace["skin|author:name"] = $s->skin['author']['name'];
	$bodyReplace["skin|author:mail"] = $s->skin['author']['mail'];
	$bodyReplace["skin|author:sitename"] = $s->skin['author']['sitename'];
	$bodyReplace["skin|author:siteurl"] = $s->skin['author']['siteurl'];
$bodyReplace["tit"] = $p['tit'];
$bodyReplace["cats"] = ""; $cats = array(); foreach ($s->cat as $k => $v) {$cats[$k] = $v['name']; } asort($cats); $i = 0; foreach ($cats as $k => $v) {$bodyReplace["cats"] .= "<option value=\"". $k ."\""; if ($cat == $k) { $bodyReplace["cats"] .= " selected"; $bodyReplace["cat_num"] = $i; } $bodyReplace["cats"] .= ">". $v ."</option>"; $i++; } unset($i); unset($cats);
$bodyReplace["site"] = $s->sys['site']['name'];

$incFinal = $s->replace_vars($incFinal, $bodyReplace);
$incFinal = str_replace("<br>", "<br />", $incFinal);

echo $incFinal; exit;

?>
