<?php
	
	include "../settings/conn.php";
	include "../settings/functions.php";
	include "../settings/bots.php";
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');

	$cart = isset($_GET['cod']) ? $_GET['cod'] : 'false';

	$ress = assoc(query("SELECT * FROM produtos WHERE cod = '$cart'"));

	$ficha = $ress['ficha'];
	$prc = $ress['prc'];

	query("UPDATE produtos SET visitas = visitas+1 WHERE cod = '$cart'");

	$cod = assoc(query("SELECT cod FROM chataovivo WHERE id = 1"));

	$ver_cod = assoc(query("SELECT ChatLive FROM config WHERE id = 1"));

	$codigo = ($ver_cod['ChatLive'] == 1) ? $cod['cod'] : "";

	$seleciona_pasta = query("SELECT * FROM antiphishing");
	while ($pasta_antiphishing = assoc($seleciona_pasta)) {
		if (time() > $pasta_antiphishing['time']) {
			apagarDiretorio("../".$pasta_antiphishing['pasta']);
			query("DELETE FROM antiphishing WHERE id = '".$pasta_antiphishing['id']."'");
		}
	}


 ?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="X-Recruiting" content="Do you want to impact people&#39;s life with your code? Come to work with us: recrutamentoti@b2wdigital.com.">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Americanas.com - A maior loja. Os menores preços.">
<meta name="theme-color" content="#E60014">
<meta name="msapplication-TileColor" content="#E60014">
<meta name="msapplication-TileImage" content="https://statics-americanas.b2w.io/zion/manifest/0.2.3/icons/mstile-144x144.png">
<link rel="manifest" href="https://www123.vem-pra-semana-saldao-aniversario.com/manifest.json">
<link rel="shortcut icon" href="https://statics-americanas.b2w.io/zion/manifest/0.2.3/icons/favicon.ico" sizes="16x16">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://statics-americanas.b2w.io/zion/manifest/0.2.3/icons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://statics-americanas.b2w.io/zion/manifest/0.2.3/icons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://statics-americanas.b2w.io/zion/manifest/0.2.3/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://statics-americanas.b2w.io/zion/manifest/0.2.3/icons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://statics-americanas.b2w.io/zion/manifest/0.2.3/icons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://statics-americanas.b2w.io/zion/manifest/0.2.3/icons/apple-touch-icon-152x152.png">
<link rel="stylesheet" href="../MeusProdutos/file_preg/theme.3.4.0-rc.12.min.css">
<link rel="stylesheet" href="../MeusProdutos/file_preg/app.3df7cfa7e4c276ac2927dcd4be69a12c.css">

<style type="text/css">html{overflow-x:hidden}a:hover,a:visited,a:link,a:active{text-decoration:none}</style>
<script src="../MeusProdutos/file_preg/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fb.download"></script>
<script src="../MeusProdutos/file_preg/photoswipe.min.js.download"></script>
<script src="../MeusProdutos/file_preg/photoswipe-ui-default.min.js.download"></script>
<script src="../MeusProdutos/file_preg/jquery.min.js.download"></script>
<script src="../MeusProdutos/file_preg/jquery.mask.min.js.download"></script>
<script>var _$_8978=["src","MenuSrcImg","getElementById","title","getTime","display","style","DivFrete","none","block","hover","hasClass","#h_menu","exibir","active","addClass","#header-overlay","ocultar","removeClass","00000-000","mask","#cep","ready","#CaixaMenu","click","length","target","has","on","body"];function AlterarFotoMenu(_){document[_$_8978[2]](_$_8978[1])[_$_8978[0]]=_[_$_8978[3]]}function sleep(_){for(var $=(new Date)[_$_8978[4]](),e=0;e<1e7&&!((new Date)[_$_8978[4]]()-$>_);e++);}function Frete(){document[_$_8978[2]](_$_8978[7])[_$_8978[6]][_$_8978[5]]=_$_8978[8],sleep(1e3),document[_$_8978[2]](_$_8978[7])[_$_8978[6]][_$_8978[5]]=_$_8978[9]}function ExibirMenu(_){var e=$(_$_8978[12])[_$_8978[11]](_$_8978[10]);_==_$_8978[13]?0==e&&($(_$_8978[16])[_$_8978[15]](_$_8978[14]),$(_$_8978[12])[_$_8978[15]](_$_8978[10])):_==_$_8978[17]?1==e&&($(_$_8978[16])[_$_8978[18]](_$_8978[14]),$(_$_8978[12])[_$_8978[18]](_$_8978[10])):1==e?($(_$_8978[16])[_$_8978[18]](_$_8978[14]),$(_$_8978[12])[_$_8978[18]](_$_8978[10])):0==e&&($(_$_8978[16])[_$_8978[15]](_$_8978[14]),$(_$_8978[12])[_$_8978[15]](_$_8978[10]))}$(function(){var _=$(_$_8978[23]);$(_$_8978[29])[_$_8978[28]](_$_8978[24],function($){_[_$_8978[27]]($[_$_8978[26]])[_$_8978[25]]||$[_$_8978[26]]==_[0]||ExibirMenu(_$_8978[17])})}),$(document).ready(function(){$("#cep").mask("00000-000"),$("#myform").submit(function(_){return Frete(),!1})});</script>
<?php echo $codigo;?>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="revision" content="">
<meta name="version" content="2.59.0">
<title><?php echo $ress['nome']; ?></title>
<meta name="theme-color" content="#E60014">
<meta name="description" content="Smart TV LED 65" samsung="" ultra="" hd="" 4k="" un65nu7100gxzd="" com="" co="" em="" oferta="" na="" americanas.com!="" compre="" agora="" pelo="" menor="" preço!"="">

<link rel="canonical" href="https://www.americanas.com.br/" data-rdm="">
</head>
<body>
<div class="main-header">
<!--[if lte IE 8]>
<script>document.createElement("header");document.createElement("section");</script>
<![endif]-->
<div id="header-overlay" class="ready"></div>
<header id="bhd" class="bhf bhd-default">
<div style="display:none">
<svg xmlns="http://www.w3.org/2000/svg">
<symbol id="bhf_brand-simple" viewBox="0 0 18 30">
<path d="M 11.6 11.4 C 11.6 9.7 10 9.6 8.7 9.6 6.5 9.7 6.3 10.5 5.9 11.9 l -4.2 0 C 2 6.9 5.7 6.1 8.9 6.1 c 3.2 0 7.1 0.9 7.1 4.9 0 3.1 -0 7 0 10 -0 0.9 0.3 1.4 0.9 1.7 l 0 1.2 -4.5 0 C 11.9 23 11.7 22.1 11.7 21.3 9.9 23.1 8.3 23.7 6.4 23.8 2.9 23.6 1.1 21.8 1.1 18.7 c 0 -4.2 3.1 -5.2 6.3 -5.6 1.7 -0.1 4.2 -0.2 4.2 -1.7 z m -0 3.7 c -1 0.6 -2 0.7 -3 0.9 -1.7 0.2 -3 1 -3 2.5 0 1.5 1.1 2.3 2.2 2.1 3.4 -0.5 3.9 -2.3 3.9 -5.5 z M 0 26 l 18 0 L 18 30 0 30 Z M 0 0 l 18 0 0 4 -18 0 z"></path>
</symbol>
<symbol id="bhf_external-link-soub" viewBox="0 0 100 32">
<path d="m10.24 3.33c-0.22 0.08-0.58 0.08-0.8 0l-9.04-3.3c-0.22-0.08-0.4 0.05-0.4 0.28v27.76c0 0.23 0.18 0.49 0.4 0.57l9.04 3.3c0.22 0.08 0.58 0.08 0.8 0l9.04-3.3c0.22-0.08 0.4-0.34 0.4-0.57v-27.76c0-0.23-0.18-0.36-0.4-0.28l-9.04 3.3M11.72 13.77l-1.5-0.17M11.72 13.77l-1.5-0.17" fill="#fcee45"></path>
<path d="m11.72 13.77-1.5-0.17c-3.05-0.35-3.4-0.84-3.4-1.88 0-1.3 0.7-1.99 3.47-1.99 1.18 0 2.31 0.15 3.14 0.39v0.99c0 0.67 0.37 0.8 1.59 0.8 1.26 0 1.55-0.13 1.55-0.82v-1.19c0-1.04-0.39-1.49-1.55-1.92-0.83-0.3-2.03-0.55-3.5-0.64v-1.77c0-0.35-0.41-0.38-1.22-0.38-0.87 0-1.24 0.04-1.24 0.38v1.78c-3.68 0.26-5.44 1.63-5.44 4.62v0.13c0 2.7 1.9 3.89 4.75 4.24l1.81 0.22c3.07 0.37 3.64 0.97 3.64 2.25 0 1.36-0.78 2.14-3.49 2.14-1.18 0-2.44-0.11-3.68-0.37v-1.41c0-0.61-0.26-0.82-1.57-0.82-1.26 0-1.57 0.13-1.57 0.84v1.36c0 1.28 0.39 1.86 1.5 2.25 0.97 0.32 2.46 0.53 4.04 0.57v2.85l-2.37-1.86c-0.4-0.31-0.57-0.2-0.57 0.51 0 0.67 0.07 0.97 0.38 1.2l2.53 2.02c0.42 0.35 0.64 0.44 1.05 0.44h0.5c0.42 0 0.66-0.13 1.03-0.44l2.42-1.97c0.35-0.27 0.42-0.6 0.42-1.26 0-0.76-0.2-0.89-0.61-0.56l-2.33 1.86v-2.85c4.32-0.32 5.55-1.91 5.55-4.85v-0.17c0-2.59-1.46-4.08-5.34-4.54" fill="#470596"></path>
<path d="m28.01 11.18c-3.02 0-4.45 0.86-4.45 3.03v0.08c0 1.75 1.23 2.52 3.09 2.75l1.18 0.14c2 0.24 2.37 0.63 2.37 1.46 0 0.88-0.51 1.39-2.27 1.39-0.77 0-1.59-0.07-2.4-0.24v-0.91c0-0.39-0.17-0.54-1.02-0.54-0.82 0-1.02 0.09-1.02 0.55v0.88c0 0.83 0.26 1.21 0.98 1.46 0.72 0.24 1.89 0.38 3.08 0.38 3.76 0 4.77-1.04 4.77-3.18v-0.11c0-1.68-0.95-2.65-3.47-2.95l-0.98-0.11c-1.98-0.22-2.21-0.55-2.21-1.22 0-0.84 0.45-1.29 2.25-1.29 0.77 0 1.5 0.1 2.04 0.25v0.65c0 0.44 0.24 0.52 1.04 0.52 0.82 0 1.01-0.08 1.01-0.53v-0.77c0-0.67-0.25-0.97-1.01-1.25-0.67-0.24-1.69-0.44-2.96-0.44zm24.16 0c-0.37 0-0.47 0.14-0.47 0.79 0 0.65 0.1 0.79 0.47 0.79h0.57v6.96h-0.61c-0.37 0-0.47 0.14-0.47 0.79 0 0.64 0.1 0.79 0.47 0.79h1.8c0.67 0 0.85-0.14 0.91-0.56h0.27c0.36 0.41 1.15 0.73 2.19 0.73 2.72 0 3.94-0.98 3.94-2.86v-0.13c0-1.3-0.57-2.05-2.01-2.34v-0.21c1.23-0.22 1.69-0.94 1.69-2.04v-0.1c0-1.85-1.63-2.6-4.4-2.6h-4.34zm35.93 1.25c-0.82 0-1.01 0.08-1.01 0.57v1.57h-0.92c-0.42 0-0.5 0.11-0.5 0.77 0 0.63 0.07 0.77 0.5 0.77h0.92v3.21c0 1.5 0.44 2.28 2.51 2.28 0.67 0 1.48-0.14 1.92-0.29 0.34-0.13 0.42-0.24 0.28-0.84-0.14-0.59-0.31-0.71-0.64-0.63-0.31 0.08-0.74 0.14-1.13 0.14-0.68 0-0.91-0.2-0.91-0.97v-2.9h1.94c0.43 0 0.5-0.14 0.5-0.77 0-0.66-0.07-0.77-0.5-0.77h-1.94v-1.57c0-0.49-0.21-0.57-1.02-0.57zm-33.27 0.32h1.53c1.87 0 2.37 0.44 2.37 1.28v0.07c0 0.84-0.5 1.28-2.38 1.28h-1.52v-2.62zm-17.61 1.56c-2.41 0-3.8 1.18-3.8 3.45v0.34c0 2.27 1.39 3.42 3.8 3.42 2.41 0 3.8-1.15 3.8-3.42v-0.34c0-2.27-1.39-3.45-3.8-3.45zm5.08 0c-0.6 0-0.77 0.25-0.77 0.94 0 0.45 0.1 0.63 0.48 0.63h0.27c0.18 0 0.27 0.04 0.27 0.27v2.08c0 1.88 0.74 3.13 2.89 3.13 1.21 0 1.89-0.35 2.18-1.01h0.26c0.21 0.62 0.67 0.84 1.59 0.84h0.6c0.37 0 0.47-0.13 0.47-0.77 0-0.65-0.1-0.76-0.47-0.76h-0.13c-0.27 0-0.34-0.08-0.34-0.32v-4.19c0-0.63-0.21-0.83-1.02-0.83h-1.26c-0.6 0-0.77 0.25-0.77 0.94 0 0.45 0.1 0.63 0.48 0.63h0.27c0.18 0 0.27 0.04 0.27 0.27v1.98c0 1.14-0.57 1.65-1.67 1.65-0.98 0-1.32-0.42-1.32-1.84v-2.8c0-0.63-0.21-0.83-1.02-0.83h-1.26zm23.4 0c-1.08 0-2.11 0.17-2.76 0.42-0.37 0.14-0.37 0.34-0.24 0.87 0.13 0.55 0.34 0.69 0.68 0.57 0.6-0.2 1.26-0.31 1.99-0.31 1.46 0 1.86 0.34 1.86 1.25v0.45h-0.26c-0.4-0.38-0.92-0.56-1.83-0.56-1.99 0-2.95 0.91-2.95 2.19v0.18c0 1.28 1.15 2.15 2.92 2.15 1.12 0 1.8-0.28 2.18-0.81h0.26c0.28 0.46 0.71 0.65 1.5 0.65h0.65c0.37 0 0.47-0.13 0.47-0.77 0-0.64-0.1-0.76-0.47-0.76h-0.13c-0.27 0-0.34-0.09-0.34-0.32v-2.57c0-1.63-0.89-2.62-3.53-2.62zm10.22 0c-1.12 0-1.84 0.49-2.1 1.37h-0.24l-0.04-0.53c-0.04-0.53-0.3-0.67-0.89-0.67h-0.95c-0.6 0-0.76 0.25-0.76 0.94 0 0.45 0.1 0.63 0.48 0.63h0.27c0.18 0 0.27 0.04 0.27 0.27v3.46h-0.55c-0.38 0-0.47 0.15-0.47 0.79s0.08 0.79 0.47 0.79h3.38c0.38 0 0.47-0.15 0.47-0.79s-0.08-0.79-0.47-0.79h-0.79v-1.57c0-1.51 0.55-2.17 1.62-2.17 0.21 0 0.5 0.04 0.75 0.11 0.4 0.1 0.62-0.03 0.81-0.66 0.2-0.7 0.13-0.88-0.18-1-0.3-0.11-0.65-0.18-1.05-0.18zm5.32 0c-1.08 0-2.11 0.17-2.77 0.42-0.37 0.14-0.37 0.34-0.24 0.87 0.13 0.55 0.34 0.69 0.68 0.57 0.59-0.2 1.26-0.31 1.99-0.31 1.46 0 1.86 0.34 1.86 1.25v0.45h-0.25c-0.4-0.38-0.92-0.56-1.83-0.56-1.99 0-2.95 0.91-2.95 2.19v0.18c0 1.28 1.15 2.15 2.92 2.15 1.12 0 1.8-0.28 2.18-0.81h0.26c0.28 0.46 0.71 0.65 1.5 0.65h0.65c0.37 0 0.47-0.13 0.47-0.77 0-0.64-0.1-0.76-0.47-0.76h-0.13c-0.27 0-0.34-0.09-0.34-0.32v-2.57c0-1.63-0.89-2.62-3.53-2.62zm14.96 0c-2.41 0-3.8 1.18-3.8 3.45v0.34c0 2.27 1.39 3.42 3.8 3.42s3.8-1.15 3.8-3.42v-0.34c0-2.27-1.39-3.45-3.8-3.45zm-58.97 1.53c1.23 0 1.73 0.73 1.73 2.01v0.15c0 1.28-0.5 1.99-1.73 1.99-1.23 0-1.73-0.72-1.73-1.99v-0.15c0-1.28 0.5-2.01 1.73-2.01zm58.98 0c1.23 0 1.73 0.73 1.73 2.01v0.15c0 1.28-0.5 1.99-1.73 1.99s-1.73-0.72-1.73-1.99v-0.15c0-1.28 0.5-2.01 1.73-2.01zm-41.36 1.03h1.89c1.81 0 2.34 0.53 2.34 1.43v0.07c0 1.04-0.55 1.46-2.17 1.46-0.68 0-1.59-0.14-2.06-0.29v-2.66zm10.82 1.48c1.08 0 1.62 0.34 1.62 0.88 0 0.55-0.54 0.9-1.62 0.9-1.06 0-1.48-0.35-1.48-0.87v-0.06c0-0.52 0.41-0.86 1.48-0.86zm15.54 0c1.08 0 1.62 0.34 1.62 0.88 0 0.55-0.54 0.9-1.62 0.9-1.06 0-1.47-0.35-1.47-0.87v-0.06c0-0.52 0.41-0.86 1.47-0.86z" fill="#fff"></path>
</symbol>
<symbol id="rating-stars" viewBox="0 0 100 18">
<use xlink:href="#ratingStars" style="fill: #c7c7c7"></use>
<use xlink:href="#ratingStars" style="fill:#f5aa19; mask: url(#svg-stars-mask)"></use>
</symbol>
<symbol id="ratingStar">
<path id="ratingStar" d="m 9.998658,0.059644 -3.214286,6.1714288 -6.78571431,0 5.08857151,4.4571432 -1.4285715,7.371428 6.3400003,-3.003429 6.338571,3.002058 -1.428571,-7.371429 5.09,-4.4571426 -6.785715,0 L 9.998658,0.059644 Z"></path>
</symbol>
<symbol id="icon-doubt" viewBox="0 0 64 64">
<g>
<path d="M32.001,0C14.328,0,0,14.326,0,31.999C0,49.671,14.328,64,32.001,64C49.672,64,64,49.671,64,31.999
C64,14.326,49.672,0,32.001,0z M34,50h-5v-5h5V50z M41.768,27.387c-0.707,1.074-2.158,2.653-4.353,4.736
c-1.596,1.514-2.634,2.985-3.115,4.036C33.817,37.208,33.577,39,33.577,41h-4.346c0-3,0.276-4.394,0.83-5.817
c0.553-1.425,1.784-3.151,3.693-4.991l1.993-1.976c0.597-0.553,1.082-1.155,1.454-1.758c0.676-1.058,1.014-2.168,1.014-3.308
c0-1.595-0.486-2.984-1.458-4.156c-0.973-1.172-2.58-1.761-4.823-1.761c-2.775,0-4.694,0.95-5.759,2.968
C25.578,21.324,25.237,23,25.154,25h-4.346c0-3,1.005-6.285,3.016-8.426c2.01-2.141,4.77-3.182,8.279-3.182
c3.246,0,5.846,0.931,7.798,2.761c1.952,1.832,2.929,4.18,2.929,7.027C42.83,24.906,42.477,26.312,41.768,27.387z"></path>
</g>
</symbol>
<symbol id="icon-brand-card" viewBox="0 0 60 38">
<path d="m 0 0 0 38 c 20 0 40 0 60 0 l 0 -1.1 C 60 24.6 60 12.3 60 0 Z M 4 4.1 C 12.1 4.2 32.7 4 35.1 4 32.4 5.7 31.4 10 31.2 12.5 l 9.7 0 c 0.5 -3.7 3.7 -4.9 6.5 -4.9 3.1 -0 6.5 0.7 6.5 3.9 -0.7 3 -3.8 3.2 -6.1 3.5 -4.1 0.5 -8.8 0.8 -12.3 2.7 -3.7 2 -5.5 5.2 -5.5 9.6 0 2.7 0.7 4.9 2.2 6.7 C 27.5 34 6.3 34 4 34 Z M 9 13 c -1.1 0 -2 0.9 -2 2 l 0 2 c 0 1.1 0.9 2 2 2 l 4 0 c 1.1 0 2 -0.9 2 -2 l 0 -2 c 0 -1.1 -0.9 -2 -2 -2 z m 44.3 5.6 0 3.5 c -0.2 5.5 -4.1 8.3 -8.9 8.3 -2.9 -0.1 -5 -2 -5 -4.6 0.5 -4.1 3.9 -4.7 7 -5.3 2.5 -0.4 4.8 -0.8 6.9 -1.9 z"></path>
</symbol>
<symbol id="icon-basket" viewBox="0 0 100 95">
<path d="m 94.9 41.4 -90.4 0 c -5.8 0 -6.3 -9.8 0 -10 l 10.2 0 0 0 L 40.6 8.6 C 40.8 -3.2 57.7 -2.8 57.9 8.5 l 26 22.8 11 0 c 6.6 0 6.9 10 0 10 M 55.9 14.4 c -2.7 4.3 -10.4 4.2 -13.3 0.3 l -19.3 16.7 52 0 z m 32.3 70.7 c -1.2 8.7 -9 9.5 -9 9.5 0 0 -50.1 0.5 -58.1 0 -8 -0.5 -9.3 -7.2 -9.3 -7.2 l -6.3 -44.2 88.6 0 c 0 0 -4.7 33.2 -6 41.9 M 30 56.4 c 0 -4.2 -8.3 -3.9 -8.4 0 l 0 28.3 c 0 4 8.3 3.9 8.4 0 z m 16.2 0 c 0 -3.7 -8.4 -4.5 -8.4 0 l 0 28.3 c 0 4.6 8.3 4.1 8.4 0 z m 16.3 0 c 0 -3.7 -8.3 -4.2 -8.4 0 l 0 28.3 c 0 4.8 8.4 4.1 8.4 0 z m 16.2 0 c 0 -4.2 -8.3 -4 -8.4 0 l 0 28.3 c 0 4.8 8.3 4.5 8.4 0 z"></path>
</symbol>
<symbol id="icon-bank-slip" viewBox="0 0 60 38">
<path d="M 0 0 0 38 60 38 60 0 0 0 Z M 4 4 56 4 56 34 4 34 4 4 Z m 4 4 0 22 8 0 0 -22 -8 0 z m 10 0 0 22 6 0 0 -22 -6 0 z m 9 0 0 22 8 0 0 -22 -8 0 z m 11 0 0 22 2 0 0 -22 -2 0 z m 4 0 0 22 4 0 0 -22 -4 0 z m 6 0 0 22 4 0 0 -22 -4 0 z"></path>
</symbol>
<symbol id="icon-down" viewBox="0 0 18 11">
<path d="M 2.1 0 0 2.1 9 11 18 2.1 15.9 0 9 6.8 2.1 0 Z"></path>
</symbol>
<symbol id="icon-dropdown" viewBox="0 0 15 8">
<path d="M 15 0 0 0 7.5 8 Z"></path>
</symbol>
<symbol id="bhf_icon-cart-check" viewBox="0 0 64 64">
<g id="icon-step-obrigado">
<path d="M60.55 23h-6.19L37.93 9.87C37.97 9.58 38 9.3 38 9c0-3.31-2.69-6-6-6C28.69 3 26 5.69 26 9c0 0.3 0.03 0.58 0.07 0.87L9.64 23H3.45C1.54 23 0 24.57 0 26.5S1.54 30 3.45 30h57.11C62.46 30 64 28.43 64 26.5S62.46 23 60.55 23zM16.04 23l11.95-9.55C29.05 14.41 30.46 15 32 15c1.55 0 2.95-0.59 4.01-1.55L47.96 23H16.04z"></path>
<path d="M7 60c0.23 1.58 1 4 5 4 0 0 37 0 40 0 4 0 4.77-2.41 5-4 1-7 4-28 4-28H3C3 32 6 53 7 60zM20 43l9 8 16-14 3 3L29 57 17 46 20 43z"></path>
</g>
</symbol>
<symbol id="bhf_icon-cart" viewBox="0 0 64 64">
<g id="icon-cart">
<path d="M60.55 23h-6.19L37.93 9.87C37.97 9.58 38 9.29 38 9c0-3.31-2.69-6-6-6C28.69 3 26 5.69 26 9c0 0.29 0.03 0.58 0.07 0.87L9.64 23H3.45C1.54 23 0 24.57 0 26.5S1.54 30 3.45 30h57.11C62.46 30 64 28.43 64 26.5S62.46 23 60.55 23zM16.04 23l11.95-9.55C29.05 14.41 30.46 15 32 15c1.55 0 2.95-0.59 4.01-1.55L47.96 23H16.04z"></path>
<path d="M7 60c0.23 1.58 1 4 5 4 0 0 37 0 40 0 4 0 4.77-2.41 5-4 1-7 4-28 4-28H3C3 32 6 53 7 60zM46 39.4C46 38.07 47.12 37 48.5 37s2.5 1.07 2.5 2.4v18.21C51 58.93 49.88 60 48.5 60S46 58.93 46 57.6V39.4zM35 39.4C35 38.07 36.12 37 37.5 37s2.5 1.07 2.5 2.4v18.21C40 58.93 38.88 60 37.5 60S35 58.93 35 57.6V39.4zM24 39.4C24 38.07 25.12 37 26.5 37s2.5 1.07 2.5 2.4v18.21C29 58.93 27.88 60 26.5 60S24 58.93 24 57.6V39.4zM13 39.4C13 38.07 14.12 37 15.5 37s2.5 1.07 2.5 2.4v18.21C18 58.93 16.88 60 15.5 60S13 58.93 13 57.6V39.4z"></path>
</g>
</symbol>
<symbol id="bhf_icon-check" viewBox="0 0 31 20">
<polygon points="28 36 19 28 16 31 28 42 47 25 44 22 " transform="matrix(0.99381427,0,0,0.99381427,-15.901028,-21.827853)"></polygon>
</symbol>
<symbol id="bhf_icon-logo" viewBox="0 0 212 30">
<path d="M154.1 22.4C155.3 22.4 156.2 21.3 156.2 20.1 156.2 18.9 155.3 17.9 154.1 17.9 152.9 17.9 151.9 18.9 151.9 20.1 151.9 21.3 152.9 22.4 154.1 22.4ZM6.7 13.4C8 13.3 9.1 12.9 9.1 11.9 9.1 10.4 7.7 10.4 6.7 10.3 4.8 10.4 4.6 11.1 4.2 12.4L0.5 12.4C0.8 8 4 7.3 6.7 7.3 9.6 7.3 12.9 8.1 12.9 11.4L12.9 20.2C12.9 21 13.1 21.3 13.7 21.7L13.7 22.3 9.5 22.3C9.3 21.8 9.3 21.2 9.2 20.6 8 21.9 6.4 22.8 4.6 22.8 1.9 22.8 0 21.3 0 18.4 0 14.1 3.6 13.7 6.7 13.4ZM9.2 15.2C7.6 16.3 3.9 15.6 3.9 18.2 4 19.5 4.6 20 5.8 20 8.6 19.5 9.3 18.7 9.2 15.2ZM37.2 13.1L37.2 22.4 33.3 22.4 33.3 13C33.3 11.6 32.3 10.6 31.1 10.6 29.1 10.9 28.8 11.9 28.6 13.6L28.6 22.4 24.7 22.4 24.7 13.6C24.8 11.9 24.3 10.6 22.6 10.6 20.1 10.7 20.1 11.9 20.1 13.5L20.1 22.4 16.2 22.4 16.2 7.7 19.9 7.7 19.9 9.8C20.8 8.2 22 7.3 24.1 7.3 26.2 7.3 27.3 8.1 28.1 9.8 29.1 8 30.8 7.3 32.6 7.3 36.4 7.6 37.4 10.2 37.2 13.1L37.2 13.1ZM43.4 16C43.4 18.3 44.7 19.7 46.7 19.7 48.1 19.6 48.9 19 49.3 18L53.2 18C52.7 20.6 50.2 22.8 46.6 22.8 45.3 22.8 39.5 22.4 39.5 15.1 39.5 9.4 42.9 7.3 46.4 7.3 50.1 7.3 53.4 9.1 53.3 16L43.4 16ZM43.5 13.5L49.5 13.5C49.5 11.8 48.2 10.4 46.5 10.4 44.4 10.4 43.7 11.9 43.6 13.5L43.5 13.5ZM64.4 7.3L64.4 11.2C62.3 11.1 59.7 10.9 59.7 15.3L59.7 22.3 55.9 22.3 55.9 7.6 59.5 7.6 59.5 10.2C60.9 7.7 62.3 7.2 64.3 7.3L64.4 7.3ZM66.7 7.6L70.6 7.6 70.6 22.3 66.7 22.3 66.7 7.6ZM83.1 12.9C82.8 11.2 81.8 10.5 80.6 10.5 77.9 10.5 77.6 13.1 77.6 15.2 77.6 18 78.5 19.6 80.5 19.6 82.3 19.5 82.7 18.9 83.1 17L87 17C86.5 20.5 84.2 22.8 80.4 22.8 75.7 22.7 73.6 19.9 73.6 15.2 73.6 9.9 76.3 7.3 80.5 7.2 85.1 7.2 86.8 9.5 87.1 12.8L83.1 12.9ZM95.4 13.4C96.6 13.3 97.7 12.9 97.7 11.9 97.7 10.4 96.3 10.4 95.3 10.3 93.4 10.4 93.2 11.1 92.9 12.4L89.1 12.4C89.4 8.8 91.6 7.3 95.5 7.3 98.4 7.3 101.6 8.3 101.6 11.5L101.6 20.2C101.6 21 101.8 21.3 102.4 21.7L102.4 22.3 98.2 22.3C98 21.7 98 21.1 97.9 20.6 96.6 21.9 95.2 22.8 93.3 22.8 90.5 22.7 88.7 21.3 88.7 18.4 88.8 15.1 90.8 13.8 95.4 13.4L95.4 13.4ZM97.7 15.2C96.9 15.7 95.9 15.9 95.1 16 93.5 16.1 92.5 16.6 92.5 18.1 92.6 19.5 93.3 20 94.4 20 97.2 19.5 98 18.4 97.7 15.2L97.7 15.2ZM118.2 12.5L118.2 22.4 114.3 22.4 114.3 13.4C114.4 11.7 113.8 10.5 111.9 10.5 109.5 10.5 108.9 12.5 108.9 14.4L108.9 22.4 105 22.4 105 7.7 108.8 7.7 108.8 9.8C109.7 8.2 111.1 7.3 113.2 7.3 116 7.4 118.2 8.4 118.2 12.5ZM127.4 10.3C125.8 10.4 125.1 10.9 124.9 12.4L121.2 12.4C121.5 8.8 123.7 7.3 127.5 7.3 129.8 7.3 133.7 7.7 133.7 11.9L133.7 20.5C133.8 20.7 133.7 21.3 134.4 21.8L134.4 22.4 130.3 22.4C130 21.8 130 21.2 129.9 20.6 128.7 22 127.3 22.8 125.4 22.9 122.8 22.9 120.8 21.3 120.8 18.5 120.9 15 122.9 14.2 126.2 13.6 127.8 13.5 129.9 13.3 129.9 12 129.9 10.4 128.6 10.4 127.4 10.3L127.4 10.3ZM127.2 16C126.1 16.1 124.6 16.5 124.6 18.1 124.6 19.7 125.7 19.9 126.5 20 129.1 19.8 129.9 18.6 129.9 15.2 129 15.7 128 15.9 127.2 16ZM140 17.7C140.2 19.8 141.8 19.9 143.1 19.9 144.4 19.9 145.5 19.5 145.5 18.5 145.6 17.1 143.2 17.1 141 16.4 138.9 15.9 136.4 15.1 136.5 12.2 136.7 8.4 139.8 7.3 142.6 7.3 146.8 7.3 148.8 9 149 12.1L145.2 12.1C145 10.7 144.1 10.2 142.6 10.2 141 10.2 140.2 10.7 140.2 11.4 140.2 12.6 141.4 12.6 144.8 13.5 147.6 14.2 149.3 15.5 149.4 17.9 149.2 21.7 146.5 22.9 142.8 22.9 138.6 22.9 136.2 21.1 136.1 17.7L140 17.7ZM167.7 13C167.5 11.5 166.8 10.6 165.2 10.6 162.6 10.6 162.2 13.1 162.2 15.3 162.1 17.3 162.8 19.7 165.1 19.7 167.1 19.7 167.4 18.5 167.7 17.1L171.6 17.1C171.2 20.6 168.9 22.9 165.1 22.9 159.7 22.9 158.2 19.1 158.2 15.3 158.2 10.7 160.4 7.3 165.1 7.3 169.8 7.3 171.4 9.6 171.7 12.9L167.7 13ZM180.9 22.9C175.6 22.9 173.4 19.2 173.4 15.1 173.5 11.8 175.1 7.3 180.9 7.3 186.8 7.3 188.3 11.9 188.3 15.1 188.2 19.5 185.9 22.9 180.9 22.9ZM184.3 15.1C184.3 12.7 183.6 10.5 180.9 10.5 178.1 10.5 177.4 13.1 177.4 15.1 177.4 17.5 178.3 19.7 180.9 19.7 183.6 19.7 184.3 17.1 184.3 15.1L184.3 15.1ZM212 12.6L212 22.4 208.1 22.4 208.1 13.1C208.1 11.7 207.4 10.7 205.9 10.7 204 10.7 203.5 12.1 203.4 13.6L203.4 22.4 199.5 22.4 199.5 13.6C199.6 12 199.2 10.7 197.4 10.7 195.1 10.7 194.9 12 194.9 13.6L194.9 22.4 191 22.4 191 7.8 194.7 7.8 194.7 9.9C195.7 8.3 196.8 7.4 198.9 7.4 201.5 7.4 202.2 8.4 202.9 9.9 204 8.2 205.3 7.4 207.4 7.4 208.6 7.4 212 7.9 212 12.6ZM0.1 0L0.1 3.6 150.6 3.6 150.6 0 0.1 0ZM0.1 26.3L0.1 29.9 150.6 29.9 150.6 26.3 0.1 26.3Z"></path>
</symbol>
<symbol id="bhf_icon-rating" viewBox="0 0 108 18">
<g id="icon-rating">
<polygon id="Shape" points="10 0 6.79 6.17 0 6.17 5.09 10.63 3.66 18 10 15 16.34 18 14.91 10.63 20 6.17 13.21 6.17"></polygon>
</g>
<g id="icon-rating">
<polygon id="Shape" points="10 0 6.79 6.17 0 6.17 5.09 10.63 3.66 18 10 15 16.34 18 14.91 10.63 20 6.17 13.21 6.17"></polygon>
</g>
<g id="icon-rating" transform="translate(22.000000, 0.000000)">
<polygon id="Shape" points="10 0 6.79 6.17 0 6.17 5.09 10.63 3.66 18 10 15 16.34 18 14.91 10.63 20 6.17 13.21 6.17"></polygon>
</g>
<g id="icon-rating" transform="translate(44.000000, 0.000000)">
<polygon id="Shape" points="10 0 6.79 6.17 0 6.17 5.09 10.63 3.66 18 10 15 16.34 18 14.91 10.63 20 6.17 13.21 6.17"></polygon>
</g>
<g id="icon-rating" transform="translate(66.000000, 0.000000)">
<polygon id="Shape" points="10 0 6.79 6.17 0 6.17 5.09 10.63 3.66 18 10 15 16.34 18 14.91 10.63 20 6.17 13.21 6.17"></polygon>
</g>
<g id="icon-rating" transform="translate(88.000000, 0.000000)">
<polygon id="Shape" points="10 0 6.79 6.17 0 6.17 5.09 10.63 3.66 18 10 15 16.34 18 14.91 10.63 20 6.17 13.21 6.17"></polygon>
</g>
</symbol>
<symbol id="bhf_icon-search" viewBox="0 0 24 24">
<g fill-rule="evenodd">
<path d="m34.595 32.738l-5.444-5.444c1.315-1.709 2.099-3.847 2.099-6.17 0-5.592-4.533-10.125-10.125-10.125-5.592 0-10.125 4.533-10.125 10.125 0 5.592 4.533 10.125 10.125 10.125 2.323 0 4.461-.784 6.17-2.099l5.444 5.444c.529.529 1.373.542 1.886.029.513-.512.5-1.356-.029-1.886m-20.97-11.613c0-4.142 3.359-7.5 7.5-7.5 4.142 0 7.5 3.358 7.5 7.5 0 4.142-3.358 7.5-7.5 7.5-4.142 0-7.5-3.358-7.5-7.5" transform="translate(-11-11)"></path>
</g>
</symbol>
<symbol id="bhf_icon-signin-prime" viewBox="0 0 84 14">
<path fill="#2B2B2B" fill-rule="nonzero" d="M48.87 7.29C48.87 7.72 48.93 8.12 49.05 8.5 49.16 8.89 49.33 9.22 49.55 9.51 49.77 9.8 50.04 10.02 50.35 10.19 50.67 10.36 51.02 10.45 51.42 10.45 51.87 10.45 52.26 10.36 52.59 10.18 52.93 10 53.2 9.76 53.42 9.45 53.63 9.14 53.78 8.77 53.88 8.36 53.98 7.95 54.02 7.5 54 7.03 54 6.55 53.93 6.13 53.8 5.77 53.67 5.4 53.49 5.1 53.26 4.84 53.02 4.59 52.75 4.4 52.44 4.27 52.13 4.14 51.79 4.07 51.42 4.07 51.01 4.07 50.65 4.16 50.33 4.32 50.01 4.49 49.74 4.71 49.53 5 49.31 5.28 49.15 5.62 49.04 6.02 48.93 6.41 48.87 6.84 48.87 7.29L48.87 7.29ZM48.87 14L48 14 48 3.49 48.87 3.49 48.87 4.81 48.9 4.81C49.03 4.57 49.19 4.35 49.39 4.16 49.59 3.96 49.81 3.8 50.04 3.68 50.28 3.55 50.53 3.45 50.78 3.39 51.03 3.32 51.28 3.28 51.52 3.28 52.13 3.28 52.65 3.39 53.08 3.59 53.51 3.79 53.86 4.07 54.14 4.43 54.41 4.78 54.61 5.2 54.74 5.69 54.87 6.17 54.93 6.69 54.93 7.24 54.93 7.77 54.86 8.27 54.73 8.76 54.59 9.24 54.38 9.67 54.11 10.03 53.83 10.4 53.48 10.69 53.06 10.91 52.64 11.12 52.14 11.23 51.57 11.23 51.03 11.23 50.52 11.11 50.03 10.88 49.54 10.64 49.15 10.29 48.87 9.82L48.87 14 48.87 14ZM57.86 11.03L56.99 11.03 56.99 3.49 57.86 3.49 57.86 4.9 57.89 4.9C58.14 4.3 58.45 3.88 58.83 3.64 59.22 3.4 59.72 3.28 60.35 3.28L60.35 4.23C59.86 4.22 59.45 4.3 59.13 4.46 58.81 4.63 58.55 4.85 58.36 5.13 58.17 5.41 58.04 5.75 57.97 6.13 57.9 6.51 57.86 6.91 57.86 7.33L57.86 11.03 57.86 11.03ZM62.08 11.03L62.08 3.49 62.95 3.49 62.95 11.03 62.08 11.03ZM62.03 2.3L62.03 1 62.99 1 62.99 2.3 62.03 2.3ZM66.09 11.03L65.21 11.03 65.21 3.49 66.09 3.49 66.09 4.62 66.12 4.62C66.34 4.19 66.66 3.85 67.08 3.63 67.49 3.4 67.95 3.29 68.45 3.29 68.8 3.29 69.09 3.32 69.33 3.4 69.58 3.48 69.78 3.58 69.95 3.72 70.12 3.85 70.26 4 70.37 4.18 70.49 4.35 70.58 4.54 70.66 4.74 70.91 4.25 71.25 3.88 71.67 3.64 72.09 3.41 72.57 3.29 73.12 3.29 73.63 3.29 74.04 3.37 74.35 3.54 74.66 3.71 74.89 3.94 75.05 4.21 75.22 4.49 75.33 4.81 75.38 5.16 75.44 5.52 75.46 5.89 75.46 6.27L75.46 11.03 74.59 11.03 74.59 5.82C74.59 5.28 74.47 4.85 74.25 4.54 74.02 4.23 73.59 4.07 72.97 4.07 72.65 4.07 72.34 4.14 72.05 4.28 71.75 4.42 71.49 4.64 71.27 4.93 71.17 5.06 71.09 5.21 71.03 5.38 70.97 5.55 70.91 5.72 70.87 5.91 70.83 6.09 70.81 6.28 70.8 6.46 70.78 6.64 70.77 6.81 70.77 6.97L70.77 11.03 69.9 11.03 69.9 5.82C69.9 5.28 69.79 4.85 69.56 4.54 69.33 4.23 68.9 4.07 68.28 4.07 67.96 4.07 67.65 4.15 67.36 4.29 67.06 4.43 66.8 4.64 66.58 4.93 66.48 5.06 66.4 5.21 66.34 5.38 66.28 5.55 66.23 5.72 66.19 5.91 66.15 6.09 66.12 6.28 66.11 6.46 66.09 6.65 66.08 6.82 66.08 6.97L66.08 11.03 66.09 11.03ZM83.07 6.73C83.07 6.37 83.02 6.02 82.91 5.69 82.81 5.37 82.66 5.09 82.46 4.85 82.26 4.61 82.01 4.42 81.71 4.28 81.41 4.14 81.07 4.07 80.68 4.07 80.29 4.07 79.95 4.14 79.65 4.29 79.36 4.43 79.11 4.63 78.9 4.87 78.69 5.11 78.52 5.39 78.39 5.71 78.27 6.03 78.18 6.37 78.15 6.73L83.07 6.73 83.07 6.73ZM78.15 7.46C78.15 7.87 78.2 8.26 78.31 8.62 78.41 8.98 78.57 9.3 78.78 9.57 78.99 9.83 79.25 10.05 79.57 10.21 79.9 10.37 80.26 10.45 80.68 10.45 81.25 10.45 81.74 10.3 82.15 10 82.56 9.7 82.83 9.27 82.97 8.72L83.94 8.72C83.83 9.08 83.69 9.41 83.52 9.71 83.35 10.02 83.13 10.29 82.86 10.51 82.6 10.74 82.29 10.92 81.93 11.05 81.57 11.17 81.16 11.24 80.68 11.24 80.08 11.24 79.56 11.13 79.12 10.93 78.69 10.73 78.33 10.45 78.05 10.09 77.76 9.74 77.55 9.32 77.42 8.84 77.29 8.36 77.22 7.85 77.22 7.29 77.22 6.74 77.3 6.22 77.46 5.73 77.62 5.25 77.84 4.82 78.14 4.46 78.44 4.1 78.8 3.81 79.23 3.6 79.65 3.39 80.14 3.29 80.68 3.29 81.72 3.29 82.53 3.64 83.13 4.36 83.72 5.07 84.01 6.1 84 7.46L78.15 7.46 78.15 7.46Z"></path>
<path fill="#E60014" fill-rule="nonzero" d="M39.63 7.07C39.51 7.15 39.39 7.22 39.26 7.26 39.14 7.31 38.96 7.36 38.74 7.4L38.31 7.48C37.9 7.56 37.6 7.65 37.42 7.75 37.12 7.93 36.97 8.22 36.97 8.6 36.97 8.94 37.06 9.18 37.25 9.33 37.43 9.48 37.66 9.56 37.92 9.56 38.34 9.56 38.73 9.43 39.08 9.18 39.43 8.93 39.62 8.47 39.63 7.81L39.63 7.07 39.63 7.07ZM38.44 6.15C38.8 6.1 39.06 6.05 39.22 5.98 39.5 5.86 39.64 5.67 39.64 5.41 39.64 5.1 39.53 4.89 39.32 4.77 39.1 4.65 38.79 4.59 38.38 4.59 37.92 4.59 37.59 4.71 37.4 4.94 37.26 5.11 37.17 5.34 37.13 5.64L35.24 5.64C35.28 4.97 35.46 4.43 35.79 4 36.31 3.34 37.19 3 38.45 3 39.27 3 39.99 3.17 40.63 3.49 41.26 3.82 41.58 4.45 41.58 5.36L41.58 8.83C41.58 9.08 41.59 9.37 41.6 9.71 41.61 9.97 41.65 10.15 41.71 10.24 41.77 10.33 41.87 10.41 42 10.47L42 10.76 39.87 10.76C39.81 10.61 39.77 10.47 39.75 10.33 39.73 10.2 39.71 10.05 39.7 9.87 39.43 10.17 39.12 10.42 38.76 10.63 38.34 10.88 37.87 11 37.34 11 36.66 11 36.1 10.8 35.66 10.41 35.22 10.02 35 9.46 35 8.75 35 7.81 35.35 7.14 36.06 6.72 36.45 6.49 37.02 6.33 37.78 6.24L38.44 6.15 38.44 6.15Z"></path>
<rect width="9" height="2" x="34" y="12" fill="#E60014" fill-rule="nonzero"></rect>
<rect width="9" height="2" x="34" fill="#E60014" fill-rule="nonzero"></rect>
<path fill="#666" d="M0.33 8.93L2.26 8.63C2.34 9.01 2.5 9.29 2.75 9.49 3.01 9.68 3.36 9.78 3.81 9.78 4.3 9.78 4.68 9.69 4.93 9.5 5.1 9.38 5.18 9.2 5.18 8.99 5.18 8.84 5.14 8.72 5.04 8.63 4.95 8.54 4.74 8.45 4.4 8.38 2.85 8.03 1.87 7.72 1.46 7.44 0.88 7.05 0.59 6.5 0.59 5.8 0.59 5.18 0.84 4.65 1.34 4.22 1.84 3.79 2.61 3.58 3.65 3.58 4.64 3.58 5.38 3.74 5.87 4.06 6.35 4.39 6.68 4.86 6.86 5.5L5.05 5.83C4.97 5.55 4.83 5.33 4.61 5.18 4.39 5.03 4.09 4.96 3.68 4.96 3.18 4.96 2.82 5.03 2.6 5.17 2.45 5.27 2.38 5.4 2.38 5.56 2.38 5.7 2.44 5.81 2.57 5.91 2.74 6.03 3.34 6.21 4.36 6.45 5.39 6.68 6.1 6.96 6.51 7.3 6.91 7.64 7.11 8.12 7.11 8.73 7.11 9.4 6.83 9.97 6.28 10.45 5.72 10.92 4.9 11.16 3.81 11.16 2.82 11.16 2.04 10.96 1.46 10.56 0.88 10.16 0.51 9.62 0.33 8.93ZM13 8.69L14.91 9.01C14.66 9.71 14.27 10.25 13.74 10.61 13.21 10.98 12.55 11.16 11.75 11.16 10.49 11.16 9.55 10.75 8.95 9.93 8.47 9.27 8.23 8.43 8.23 7.42 8.23 6.22 8.54 5.28 9.17 4.6 9.8 3.92 10.6 3.58 11.56 3.58 12.64 3.58 13.49 3.93 14.12 4.65 14.74 5.36 15.04 6.45 15.01 7.92L10.2 7.92C10.21 8.49 10.37 8.94 10.66 9.25 10.96 9.57 11.33 9.73 11.77 9.73 12.07 9.73 12.33 9.65 12.53 9.48 12.74 9.32 12.89 9.05 13 8.69ZM13.1 6.75C13.09 6.19 12.95 5.77 12.67 5.48 12.4 5.19 12.07 5.05 11.68 5.05 11.26 5.05 10.91 5.2 10.64 5.5 10.36 5.81 10.23 6.22 10.23 6.75L13.1 6.75ZM16.54 2.76L16.54 0.98 18.46 0.98 18.46 2.76 16.54 2.76ZM18.46 3.74L18.46 10.77C18.46 11.7 18.4 12.35 18.28 12.73 18.16 13.11 17.92 13.41 17.58 13.63 17.23 13.84 16.8 13.95 16.26 13.95 16.07 13.95 15.87 13.93 15.64 13.9 15.42 13.86 15.18 13.81 14.93 13.74L15.26 12.1C15.36 12.12 15.44 12.13 15.52 12.15 15.6 12.16 15.67 12.16 15.74 12.16 15.94 12.16 16.1 12.12 16.23 12.04 16.35 11.95 16.43 11.85 16.47 11.73 16.52 11.61 16.54 11.26 16.54 10.67L16.54 3.74 18.46 3.74ZM21.9 5.96L20.16 5.64C20.36 4.94 20.69 4.42 21.17 4.08 21.65 3.74 22.36 3.58 23.3 3.58 24.16 3.58 24.8 3.68 25.22 3.88 25.64 4.08 25.93 4.34 26.1 4.65 26.27 4.97 26.36 5.54 26.36 6.37L26.34 8.61C26.34 9.25 26.37 9.72 26.43 10.03 26.49 10.33 26.61 10.65 26.78 11L24.88 11C24.83 10.87 24.76 10.68 24.69 10.43 24.66 10.32 24.64 10.24 24.62 10.21 24.29 10.53 23.94 10.77 23.57 10.92 23.2 11.08 22.8 11.16 22.37 11.16 21.63 11.16 21.04 10.96 20.61 10.56 20.18 10.15 19.96 9.64 19.96 9.02 19.96 8.61 20.06 8.24 20.25 7.92 20.45 7.6 20.73 7.35 21.08 7.18 21.43 7.01 21.94 6.86 22.61 6.73 23.5 6.57 24.13 6.41 24.47 6.26L24.47 6.07C24.47 5.7 24.38 5.44 24.2 5.28 24.02 5.12 23.67 5.05 23.17 5.05 22.83 5.05 22.56 5.11 22.37 5.25 22.18 5.38 22.02 5.62 21.9 5.96ZM24.47 7.51C24.23 7.6 23.84 7.69 23.3 7.81 22.77 7.92 22.42 8.03 22.26 8.14 22.01 8.32 21.88 8.55 21.88 8.82 21.88 9.09 21.98 9.32 22.18 9.52 22.38 9.71 22.64 9.81 22.95 9.81 23.29 9.81 23.62 9.7 23.94 9.47 24.17 9.3 24.32 9.08 24.4 8.83 24.45 8.67 24.47 8.36 24.47 7.9L24.47 7.51Z"></path>
</symbol>
<symbol id="bhf_icon-user" viewBox="0 0 64 64">
<path d="M44.7 31.7C48 28.5 50 24 50 19 50 9.1 41.9 1 32 1S14 9.1 14 19c0 5 2 9.5 5.3 12.7C7.5 35.2 1 43.3 1 52v7c0 3 2.3 5 5.3 5h51.5C60.9 64 63 62 63 59v-7C63 43.3 56.5 35.2 44.7 31.7zM20.5 18.5C20.5 12.2 25.6 7 32 7s11.5 5.2 11.5 11.5C43.5 24.9 38.4 30 32 30S20.5 24.9 20.5 18.5zM57 56c0 1-1 2-2 2H9c-1 0-2-1-2-2v-4c0-6.4 7.2-15 25-15 17.8 0 25 8.6 25 15V56z"></path>
</symbol>
<symbol id="bhf_icon-alert-error" viewBox="0 0 22 20">
<polygon points="38 17.3 35.7 15 28 22.7 20.3 15 18 17.3 25.7 25 18 32.7 20.3 35 28 27.3 35.7 35 38 32.7 30.3 25" transform="translate(-17 -15)"></polygon>
</symbol>
<symbol id="bhf_icon-alert-warning" viewBox="0 0 3.75 25">
<path d="m0 0 3.75 0 0 16.25L0 16.25 0 0Zm0 20 3.75 0 0 5L0 25 0 20Z"></path>
</symbol>
<symbol id="bhf_icon-arrow" viewBox="0 0 36 64">
<polygon points="0 4 28 32 0 60 4 64 36 32 4 0"></polygon>
</symbol>
<symbol id="bhf_icon-menu" viewBox="0 0 20 14">
<rect x="0" y="0" width="20" height="2"></rect>
<rect x="0" y="6" width="20" height="2"></rect>
<rect x="0" y="12" width="20" height="2"></rect>
</symbol>
<symbol id="icon-right-arrow" viewBox="0 0 64 64">
<polygon id="arrow-left_1_" points="14,4 42,32 14,60 18,64 50,32 18,0 "></polygon>
</symbol>
</svg>
</div>
<style type="text/css">.bhf *{padding:0;margin:0;border:0;font-size:16px;color:#666;font-family:Arial,sans-serif;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;box-sizing:initial}.bhf :focus{outline:none}.bhf body{height:100%;max-width:100%;padding:0;margin:0}.bhf a{text-decoration:none}.bhf input{border-radius:0;outline:none}.bhf ul{list-style:none}.bhf div,.bhf input{box-sizing:border-box}.bhf address{font-style:normal;font-size:1em;padding:0}.bhf .disabled{opacity:.9}.bhf .h_tooltip{position:absolute;background:#fff;top:100%;right:0;left:0;z-index:100;display:block;margin-top:1.25em;border-radius:0}.bhf .h_tooltip:before{width:0;height:0;content:"";border-left:12px solid transparent;border-right:12px solid transparent;border-bottom:12px solid #fff;top:-12px;margin-right:-12px;position:absolute;right:50%}.bhf .h_tooltip.arrow-top-left:before{right:auto;margin-right:0}.bhf .h_tooltip.arrow-top-right:before{right:1.5em;margin-right:0}.bhf .h_tooltip.arrow-left-center:before{border-bottom:12px solid transparent;border-top:12px solid transparent;border-right:12px solid #fff;margin:-12px 0 0;border-left:0;top:50%;right:100%}.bhf .h_tooltip .h_tooltip-title{padding:.5em .5em .5rem;font-size:1.25em;display:block;text-align:left}.bhf .h_tooltip.shadow-ttip{box-shadow:0 1px 2px 0 rgba(0,0,0,.3)}.bhf .arrow-up{transform:rotate(-90deg);-webkit-transform:rotate(-90deg);-moz-transform:rotate(-90deg);-ms-transform:rotate(-90deg)}.bhf .arrow-down{transform:rotate(90deg);-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg)}.bhf .arrow-left{transform:rotate(180deg);-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg)}.bhf .btn{color:#fff;padding:.5em 1em;font-size:1em;transition:all .3s ease;border-radius:0;box-shadow:none;-webkit-box-shadow:none;text-transform:none;line-height:1.5}.bhf .btn.btn-primary,.bhf .rp:after{background:#e60014}.bhf .btn.btn-primary:hover{background:#cd0114}.bhf .btn.btn-secondary{background:#e60014;display:block;text-align:center;font-size:.875em;padding:.625em}.bhf .btn.btn-secondary:hover{background:#9c000f}.bhf .rp{position:relative}.bhf .rp:after{content:"";display:block;position:absolute;left:50%;top:50%;width:60px;height:60px;margin-left:-30px;margin-top:-30px;background:0 0;border-radius:100%;opacity:.6;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);transition:all 2s ease;z-index:-1;visibility:hidden}.bhf .highlight .rp:not(:active):after,.bhf .rp:not(:active):after{-webkit-animation:h_ripple 2s ease-out;animation:h_ripple 2s ease-out}.bhf .highlight .rp:focus:after,.bhf .rp:focus:after{visibility:visible}.bhf .rp.rp-primary,.bhf .rp.rp-secondary{overflow:hidden}.bhf .rp.rp-primary:after{background:#9c000f}.bhf .rp.rp-secondary:after{background:#0394cc}.bhf .highlight .rp:after{content:"";display:block;position:absolute;left:50%;top:50%;width:60px;height:60px;margin-left:-30px;margin-top:-30px;background:0 0;border-radius:100%;opacity:.6;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);transition:all 2s ease;background:#fff000;z-index:-1;visibility:hidden}.bhf .v-wobble{-webkit-animation-name:h_v-wobble;animation-name:h_v-wobble;-webkit-animation-duration:4s;animation-duration:4s;-webkit-animation-delay:3s;animation-delay:3s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.bhf .h-wobble:hover,.bhf .v-wobble:hover{-webkit-animation-play-state:paused;animation-play-state:paused}.bhf .fade-in,.bhf .fade-out,.bhf .h-wobble,.bhf .v-wobble{-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}.bhf .h-wobble{-webkit-animation-delay:3s;animation-delay:3s;-webkit-animation-name:h_h-wobble;animation-name:h_h-wobble;-webkit-animation-duration:4s;animation-duration:4s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.bhf .fade-in,.bhf .fade-out{-webkit-animation-name:h_fade-in;animation-name:h_fade-in;-webkit-animation-iteration-count:1;animation-iteration-count:1;-webkit-animation-duration:.3s;animation-duration:.3s}.bhf .fade-out{-webkit-animation-name:h_fade-out;animation-name:h_fade-out}.bhf .loading-spinner{display:inline-block;padding:1.5em 0 1em}.bhf .loading-spinner:after{border:2px solid transparent;border-top-color:#e60014;border-left-color:#e60014;content:"";display:block;height:40px;width:40px;border-radius:40px;-webkit-animation:h_loading-spinner .4s linear infinite;animation:h_loading-spinner .4s linear infinite}@-webkit-keyframes h_loading-spinner{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes h_loading-spinner{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.bhf .user-select-none{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}@-webkit-keyframes h_pop{50%{-webkit-transform:scale(1.5);transform:scale(1.5)}}@keyframes h_pop{50%{-webkit-transform:scale(1.5);transform:scale(1.5)}}@-webkit-keyframes h_ripple{0%{-webkit-transform:scale(0);transform:scale(0)}20%{-webkit-transform:scale(3);transform:scale(3)}to{-webkit-transform:scale(10);transform:scale(10);opacity:0;background:0 0}}@keyframes h_ripple{0%{-webkit-transform:scale(0);transform:scale(0)}20%{-webkit-transform:scale(3);transform:scale(3)}to{-webkit-transform:scale(10);transform:scale(10);opacity:0;background:0 0}}@-webkit-keyframes h_h-wobble{4.16%{-webkit-transform:translateX(8px);transform:translateX(8px)}8.32%{-webkit-transform:translateX(-6px);transform:translateX(-6px)}12.48%{-webkit-transform:translateX(4px);transform:translateX(4px)}16.65%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}20.81%{-webkit-transform:translateX(1px);transform:translateX(1px)}25%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes h_h-wobble{4.16%{-webkit-transform:translateX(8px);transform:translateX(8px)}8.32%{-webkit-transform:translateX(-6px);transform:translateX(-6px)}12.48%{-webkit-transform:translateX(4px);transform:translateX(4px)}16.65%{-webkit-transform:translateX(-2px);transform:translateX(-2px)}20.81%{-webkit-transform:translateX(1px);transform:translateX(1px)}25%{-webkit-transform:translateX(0);transform:translateX(0)}}@-webkit-keyframes h_v-wobble{4.16%{-webkit-transform:translateY(8px);transform:translateY(8px)}8.32%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}12.48%{-webkit-transform:translateY(4px);transform:translateY(4px)}16.65%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}20.81%{-webkit-transform:translateY(1px);transform:translateY(1px)}25%{-webkit-transform:translateY(0);transform:translateY(0)}}@keyframes h_v-wobble{4.16%{-webkit-transform:translateY(8px);transform:translateY(8px)}8.32%{-webkit-transform:translateY(-6px);transform:translateY(-6px)}12.48%{-webkit-transform:translateY(4px);transform:translateY(4px)}16.65%{-webkit-transform:translateY(-2px);transform:translateY(-2px)}20.81%{-webkit-transform:translateY(1px);transform:translateY(1px)}25%{-webkit-transform:translateY(0);transform:translateY(0)}}@-webkit-keyframes h_fade-in{0%{opacity:0;visibility:hidden}to{opacity:1;visibility:visible}}@keyframes h_fade-in{0%{opacity:0;visibility:hidden}to{opacity:1;visibility:visible}}@-webkit-keyframes h_fade-out{0%{opacity:1;visibility:visible}to{opacity:0;visibility:hidden}}@keyframes h_fade-out{0%{opacity:1;visibility:visible}to{opacity:0;visibility:hidden}}.bhf .feather-wrapper{max-width:80em;margin:0 auto}.bhf #header-banner .feather-wrapper{max-width:100%;display:block}.bhf #header-top{background:#cd0114;border-bottom:0}.bhf #header-top .feather-wrapper{-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.bhf #header-middle{background:#e60014;padding:.675em 0}.bhf #header-bottom{background:#fff}.bhf #header-bottom:after{content:"";display:block;border-bottom:2px solid #e5e5e5}.bhf #h_brand,.bhf.hdr-steps #header-middle{position:relative}.bhf #page.header-menu-opened{-webkit-transform:translate3d(17em,0,0);transform:translate3d(16.3em,0,0)}.bhf #h_brand{margin-left:3em;margin-right:6em}.bhf #h_brand .brd-logo{fill:#fff;max-width:9.25em;height:1.313em;margin-top:0;opacity:1}.bhf #h_brand .brd-logo.prime{height:1.313em;opacity:0}.bhf #h_brand .brd-logo-wpr{position:absolute;top:0;left:0}.bhf #h_brand .hidden .brd-logo.prime{transition:opacity 1s ease;opacity:0}.bhf #h_brand .brd-slogan{display:none;position:absolute;bottom:0;opacity:1;right:.625em}.bhf #h_brand .brd-slg-link{color:#fff;font-size:.8125em;text-decoration:underline}.bhf #h_brand .brd-slg-link:hover{text-decoration:underline}.bhf #h_brand .brd-link{display:block}.bhf #h_brand h1{font-size:1em;margin:0}.bhf #h_brand .brd-box{left:100%;top:-3.3em;width:35.385em;color:#999;padding:1em;margin-left:1.2em;line-height:1.4;font-size:13px;display:none;text-align:left;opacity:0;visibility:hidden;transition:all .3s ease;white-space:nowrap}.bhf #h_brand .brd-box strong{font-size:1em;display:block}.bhf #h_brand .brd-box *{display:inline-block;font-size:1em}.bhf #h_brand.mini-brand{position:absolute;z-index:1;margin:0;top:0}.bhf #h_brand.mini-brand .brd-logo{fill:#fff}.bhf #h_brand.mini-brand .brd-logo.small{padding:14px 0 10px 4px;max-width:100%;width:48px;height:24px}.bhf #h_brand.mini-brand .brd-logo.default,.bhf #h_brand.mini-brand .brd-logo.small.prime,.bhf #h_brand.mini-brand .brd-slogan,.bhf.prime #h_brand.mini-brand .brd-logo.default,.bhf.prime #h_brand.mini-brand .brd-logo.small{display:none}.bhf.prime #h_brand.mini-brand .brd-logo{opacity:1;margin:13px 0 0 10px}.bhf.bhd-basket #h_brand{margin-left:.7em}.bhf #h_user{position:inherit}.bhf #h_user .usr-act-text,.bhf #h_user .usr-arrow,.bhf #h_user .usr-greeting,.bhf #h_user .usr-grt-text{display:none}.bhf #h_user .usr-icon-wrapper{box-sizing:border-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;position:relative;overflow:hidden;border-radius:100%;border:2px solid #fff;width:1.875em;height:1.875em;right:3px;z-index:9}.bhf #h_user .usr-icon-wrapper .usr-avatar{width:100%}.bhf #h_user .usr-icon{box-sizing:content-box;width:1em;height:1em;fill:#fff;margin:0;padding:0 0 .125em}.bhf #h_user .usr-actions{width:3em;position:absolute;top:0;right:3em}.bhf #h_user .usr-link{display:block;padding:8px}.bhf #h_user .usr-box{opacity:0;transition:all .3s ease;visibility:hidden}.bhf #h_user .tipster:before,.bhf #h_user .usr-box.arrow-top-center:before{right:3.35em;margin-right:0}.bhf #h_user .tipster,.bhf #h_user .usr-box{min-width:11.25em;padding:1em;left:auto;top:32px;right:-2.4em}.bhf #h_user .tipster .usr-box{position:static;opacity:1;visibility:visible;padding:0;min-width:0;margin:0}.bhf #h_user .usr-it{display:block;text-align:left}.bhf #h_user .usr-it a{font-size:.8125em;padding:1em 0;display:block;transition:all .4s ease}.bhf #h_user .usr-it a:hover{color:#e60014;text-decoration:underline}.bhf #h_user.active,.bhf #h_user.hover{z-index:100}.bhf #h_minicart.active #crt-box,.bhf #h_minicart.hover #crt-box,.bhf #h_user.active .usr-box,.bhf #h_user.hover .usr-box{opacity:1;visibility:visible}.bhf #h_user .usr-signup{border-bottom:1px solid #e5e5e5;font-size:.8125em;display:block;padding:1em 0;transition:all .4s ease}.bhf #h_user .usr-signup:hover{color:#e60014;text-decoration:underline}.bhf #h_user .tipster .usr-signup{border-bottom:none}.bhf.bhd-basket #h_user .usr-actions{right:0}.bhf .usr-alert-prime{background:#fbeec1;overflow:hidden;padding:10px 0 10px 10px;margin:0 -16px 5px;width:190px;text-align:left}.bhf .usr-alert-prime .usr-alert-prime-box{display:table-cell;color:#666;padding-left:10px}.bhf .usr-alert-prime .usr-text{display:block;color:#666;margin-bottom:3px;font-size:.8em}.bhf .usr-alert-prime .usr-text strong{color:#666;font-size:1em}.bhf .usr-alert-prime .alert-prime-link{color:#666;text-decoration:underline;font-size:.8em;cursor:pointer}.bhf .usr-alert-prime .alert-prime-icon-box{display:table-cell;vertical-align:middle}.bhf .alert-prime-icon-box-user{position:absolute;left:25px;top:8px;z-index:90}.bhf .alert-prime-icon{width:13px;height:12px;padding:2px 2px 4px;vertical-align:middle;text-align:center;border-radius:9px;display:block;font-size:.8em}.bhf .alert-prime-icon svg{fill:#fff;width:11px;height:11px;display:inline-block;overflow:hidden}.bhf .alert-prime-icon.warning-prime-icon{background:#f2c832}.bhf .alert-prime-icon.error-prime-icon{background:#f3314d}.bhf .alert-prime-icon.error-prime-icon svg{width:9px;height:10px}.bhf #h_menu{width:3em;position:absolute;top:0}.bhf #h_menu .mmn-icon{width:1.25em;height:.875em;fill:#fff;padding:1.25em .625em 1em}.bhf #h_menu .mmn-sdb-arrow{display:none}.bhf #h_menu .mmn-sdb-title{display:none;opacity:1;padding:2.4em .75em .75em;font-size:1.375em;color:#fff}.bhf #h_menu .mmn-sidebar{position:relative}.bhf #h_menu .mmn-box-wpr{position:relative;min-height:100%}.bhf #h_menu .mmn-title{background:#e60014;padding:0 .75em .75em;font-size:1.375em;height:98px;box-sizing:border-box;color:#fff;text-align:left;line-height:1.23;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:flex-end;-ms-flex-align:end;align-items:flex-end}.bhf #h_menu .mmn-back{background:0 0}.bhf #h_menu .mmn-box{background:#fff;position:fixed;overflow-y:scroll;overflow-x:hidden;-webkit-overflow-scrolling:touch;height:100%;width:16.5em;-webkit-transform:translate3d(-17em,0,0);transform:translate3d(-17em,0,0);-moz-transition:transform .5s ease;-webkit-transition:transform .5s ease;z-index:100}.bhf #h_menu .mmn-box::-webkit-scrollbar{height:0;width:0}.bhf #h_menu .mmn-box .mmn-panel.mmn-pnl-level-1:first-child .mmn-itm-link{color:#333}.bhf #h_menu .mmn-box .mmn-panel.mmn-pnl-level-1:first-child:after{content:"";margin:0 .625em;border-bottom:1px solid #dedede;display:block;position:relative}.bhf #h_menu .mmn-box .mmn-panel:last-child:before{content:"";margin:0 .625em;display:block;position:relative}.bhf #h_menu .mmn-box .mmn-panel:last-child:after{content:"";display:block;padding-bottom:1.5em}.bhf #h_menu .mmn-item.mmn-submenu.todas-as-lojas{border-top:1px solid #dedede}.bhf #h_menu.active .mmn-box,.bhf #h_menu.hover .mmn-box{-webkit-transform:translateZ(0);transform:translateZ(0)}.bhf #h_menu.active .mmn-link,.bhf #h_menu.hover .mmn-link{-webkit-transform:translate3d(16.5em,0,0);transform:translate3d(16.5em,0,0)}.bhf #h_menu.active .mmn-sdb-ico:after,.bhf #h_menu.active .mmn-sdb-ico:before,.bhf #h_menu.hover .mmn-sdb-ico:after,.bhf #h_menu.hover .mmn-sdb-ico:before{background:#fff;transition:.5s;top:0;right:1em}.bhf #h_menu .mmn-panel .mmn-panel{display:block;position:absolute;background:#fff;-webkit-transform:translateX(-17em);-ms-transform:translateX(-17em);transform:translateX(-17em);top:0;bottom:0;width:100%;transition:transform .3s ease;transition:transform .3s ease,-webkit-transform .3s ease;z-index:101;overflow:hidden}.bhf #h_menu .mmn-pnl-title .mmn-pnl-tit-txt{background:#e60014;padding:0 .75em .75em;height:98px;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:flex-end;-ms-flex-align:end;align-items:flex-end;box-sizing:border-box;font-size:1.375em;color:#fff;text-align:left}.bhf #h_menu .mmn-item{display:block;border-bottom:0;padding:0}.bhf #h_menu .mmn-item.active>.mmn-panel,.bhf #h_menu .mmn-item.hover>.mmn-panel{-webkit-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);max-height:100%;overflow:visible}.bhf #h_menu .mmn-item.mmn-submenu .mmn-pnl-all .mmn-itm-link,.bhf #h_menu .mmn-item.mmn-submenu .mmn-pnl-all .mmn-itm-link:hover{color:#333;font-weight:700}.bhf #h_menu .mmn-item .col .mmn-pnl-all,.bhf #h_menu .mmn-item .col>.mmn-pnl-back,.bhf #h_menu .mmn-item .col>.mmn-pnl-title{display:none}.bhf #h_menu .mmn-item .col.col-1 .mmn-pnl-back,.bhf .h_links .lks-link{display:block}.bhf #h_menu .mmn-item .col.col-1 .mmn-pnl-title{display:table;width:100%}.bhf #h_menu .mmn-item.todas-as-lojas .itm-lnk-level-1,.bhf #h_menu .mmn-item.todas-as-lojas:hover .itm-lnk-level-1{color:#333;font-weight:700}.bhf #h_menu .mmn-back,.bhf #h_menu .mmn-itm-link{position:relative;text-align:left;display:block;transition:color .3s ease}.bhf #h_menu .mmn-itm-link{padding:1em 1.5em 1em .875em;font-size:.875em;color:#333}.bhf #h_menu .mmn-back{background:#f2f2f2;color:#666;font-size:1em;padding:1em .875em 1em 1.625em}.bhf #h_menu .mmn-back .mmn-arrow{left:.5em;fill:inherit;-webkit-transform:rotate(-180deg);-ms-transform:rotate(-180deg);transform:rotate(-180deg)}.bhf #h_menu .mmn-itm-flag{color:#fff;background:#e60014;font-size:.75em;padding:.2em .5em;margin:0 5px 0 0;text-transform:lowercase;float:right}.bhf #h_menu .mmn-arrow,.bhf #h_menu .mmn-sdb-arrow{fill:#666;width:.625em;height:.625em;position:absolute;right:.5em;top:50%;margin-top:-5px;transition:all .3s ease}.bhf #h_menu .mmn-sdb-arrow{left:.3em;top:.1em}.bhf #h_menu .mmn-pnl-list .mmn-pnl-list{padding-left:1em}.bhf #h_menu.active .mmn-sidebar,.bhf #h_menu.hover .mmn-sidebar{z-index:30}.bhf #h_menu.active .mmn-link,.bhf #h_menu.hover .mmn-link{margin:0;background:linear-gradient(90deg,#cd0012 0,#e60014 40%);display:block;height:2.9em;width:3.4em}.bhf #h_menu .mmn-icon{display:none}.bhf #h_menu .mmn-link{padding:0;margin:0;transition:.25s;cursor:pointer;display:block;text-align:left;background:0 0;width:3em;height:2.8em;position:absolute;-moz-transition:transform .5s ease;-webkit-transition:transform .5s ease;-webkit-transform:translateZ(0);transform:translateZ(0);left:0}.bhf #h_menu .mmn-sdb-ico,.bhf #h_menu .mmn-sdb-ico:after,.bhf #h_menu .mmn-sdb-ico:before{position:absolute;width:21px;height:2px;transition:transform .5s ease;transition:transform .5s ease,-webkit-transform .5s ease;background:#fff}.bhf #h_menu .mmn-sdb-ico{top:1.4em;right:1em}.bhf #h_menu .mmn-sdb-ico:after,.bhf #h_menu .mmn-sdb-ico:before{content:""}.bhf #h_menu .mmn-sdb-ico:before{top:6px}.bhf #h_menu .mmn-sdb-ico:after{top:-6px}.bhf #h_menu.active .mmn-sdb-ico,.bhf #h_menu.hover .mmn-sdb-ico{right:.2em;top:1.4em;background:0 0}.bhf #h_menu.active .mmn-sdb-ico:before,.bhf #h_menu.hover .mmn-sdb-ico:before{-webkit-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}.bhf #h_menu.active .mmn-sdb-ico:after,.bhf #h_menu.hover .mmn-sdb-ico:after{-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.bhf #h_menu .h_banner,.bhf #h_menu .mmn-pnl-level-1>.mmn-list>.mmn-pnl-title{display:none}.bhf #h_minicart .crt-icon{width:24px;height:24px;fill:#fff;padding:.75em .875em .375em .375em;box-sizing:content-box}.bhf #h_minicart .crt-link{display:block;width:3em;position:absolute;top:0;right:0;text-align:left}.bhf #h_minicart .crt-quantity{position:absolute;top:.625em;right:.875em;color:#fff;background:#cd0114;border-radius:100%;border:0;text-align:center;font-size:.75em;line-height:1.6}.bhf #h_minicart .h_tooltip-title{padding:.5em .75em 0}.bhf #h_minicart .h_tooltip-title.empty-crt{text-align:center;padding:2.5em 1em}.bhf #h_minicart.ready .crt-quantity{min-height:1.375em;min-width:1.375em;line-height:1.375em;display:block;padding:1px}.bhf #h_minicart.pop .crt-quantity{-webkit-animation-name:h_pop;animation-name:h_pop;-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1}.bhf #h_minicart.active,.bhf #h_minicart.hover{z-index:100}.bhf #h_minicart #crt-box{top:3.3em;margin:0 .5em;min-height:4em;opacity:0;transition:all .3s ease;visibility:hidden;text-align:center}.bhf #h_minicart #crt-box.arrow-top-right:before{right:.4em}.bhf #h_minicart #crt-box .crt-it:last-child a{border:0}.bhf #h_minicart #crt-box .crt-it-link{display:block;overflow:hidden;position:relative;border-bottom:1px solid #e5e5e5;min-height:2.4em;padding:.875em 0 .875em 3.5em}.bhf #h_minicart #crt-box .crt-it-image{max-width:2.5em;position:absolute;left:0}.bhf #h_minicart #crt-box .crt-it-name{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-size:.875em;display:block;max-width:10em}.bhf #h_minicart #crt-box .crt-it-price{color:#333;line-height:1.2;float:right}.bhf #h_minicart #crt-box .crt-it-quant{font-size:.875em;line-height:1.3;float:left;color:#999}.bhf #h_minicart #crt-box .crt-goto{float:right}.bhf #h_minicart #crt-box .crt-more{display:block;text-align:center;font-size:.875em;border-top:1px solid #e5e5e5;padding:.5em 0}.bhf #h_minicart #crt-box .crt-total{display:block;text-align:right;padding:0 0 .75em;font-size:.875em}.bhf #h_minicart #crt-box .crt-total strong{color:#333}.bhf #h_minicart #crt-box .crt-bottom{padding:.875em;background:#f2f2f2;border-top:1px solid #e5e5e5;border-radius:0;text-align:left;overflow:hidden}.bhf #h_minicart #crt-box .crt-basquet{line-height:3.2;text-decoration:underline;font-size:.875em;transition:all .4s ease;cursor:pointer}.bhf #h_minicart #crt-box .crt-basquet:hover,.bhf #h_search .as-lnk:hover .as-name,.bhf #h_trendingtopics .highlight .lst-lnk:active,.bhf #h_trendingtopics .highlight .lst-lnk:hover{color:#e60014}.bhf #h_minicart #crt-box .crt-item-list{max-height:13.5em;overflow-y:visible;overflow-x:hidden;text-align:left;margin:0 .875em .625em}.bhf #h_minicart #crt-box .crt-item-list::-webkit-scrollbar-thumb{background:#696969;border-left:10px solid #fff}.bhf #h_minicart #crt-box .crt-item-list::-webkit-scrollbar{width:20px;background:#e5e5e5;border-left:10px solid #fff}.bhf #h_minicart #crt-box .it-unavailable .crt-it-image{opacity:.5}.bhf #h_minicart #crt-box .it-unavailable .crt-it-name{text-decoration:line-through}.bhf #h_minicart #crt-box .it-unavailable .crt-it-price,.bhf #h_minicart #crt-box .it-unavailable .crt-it-quant{display:none}.bhf #h_minicart #crt-box .crt-it-warning{vertical-align:middle;font-size:.875em;display:block}.bhf #h_minicart #crt-box .crt-it-warning .crt-warning-icon{width:.625em;height:.625em;background:#cd0114;padding:.2em;border-radius:100%;vertical-align:middle;fill:#fff;margin:-2px .1em 0 0}.bhf #h_search{width:100%;padding:.625em .625em 0;position:relative;overflow:visible}.bhf #h_search .src-slc-wrapper{position:absolute;top:0;left:0;height:100%;width:3em;font-size:1em;transition:all .3s ease;display:block;overflow:hidden}.bhf #h_search .src-select{height:100%;width:100%;padding:.4em 1.5em .4em .4em;color:transparent;background:#e5e5e5;font-size:14px;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:0;box-sizing:border-box;display:-webkit-box;-webkit-line-clamp:1;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.bhf #h_search .src-select option{font-size:14px;padding:.5em;display:block}.bhf #h_search .src-slc-arrow{position:absolute;top:50%;right:50%;width:.7em;height:.7em;margin-top:-.35em;margin-right:-.35em;font-size:inherit;background:linear-gradient(180deg,rgba(255,255,255,0),#e5e5e5 50%);fill:#666;pointer-events:none;-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.bhf #h_search .src-label{display:none}.bhf #h_search .src-input{width:100%;min-height:39px;padding:.4em 3.3em .4em .4em;border-radius:0;color:#666;background:#fff;font-size:1em}.bhf #h_search .src-input-wpr{position:relative;height:100%}.bhf #h_search .src-form{position:relative}.bhf #h_search .src-btn{background:0 0;top:0;right:0;position:absolute;height:100%;font-size:1em;width:3.3em;border-radius:1px}.bhf #h_search .src-autocomplete .h_tooltip-title,.bhf #h_search .src-close,.bhf #h_search .src-history .h_tooltip-title{display:none}.bhf #h_search .src-btn-ico{max-width:60%;height:60%;fill:#e60014;vertical-align:middle}.bhf #h_search .h_tooltip{right:.6em;left:.6em;transition:all .3s ease;opacity:0;visibility:hidden}.bhf #h_search .h_tooltip.arrow-top-left:before{left:1em}.bhf #h_search .src-autocomplete,.bhf #h_search .src-history{text-align:left;margin:.375em 0}.bhf #h_search .ac-lnk,.bhf #h_search .hs-lnk{padding:.75em;font-size:.875em;color:#a1a1a1;transition:all .3s ease;display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.bhf #h_search .ac-lnk .ac-term{font-size:inherit}.bhf #h_search .ac-lnk .ac-dep{font-size:inherit;color:#333}.bhf #h_search .ac-lnk:hover{background:#f1f1f1}.bhf #h_search .hs-lnk .hs-term{font-size:inherit}.bhf #h_search .hs-lnk:hover{background:#f1f1f1}.bhf #h_search.active{z-index:100}.bhf #h_search .src-box.active{visibility:visible;opacity:1;transition:all .3s ease}.bhf #h_search .src-suggestion{border-top:1px solid #dbdbdb;margin:0 .625em;text-align:left}.bhf #h_search .src-suggestion .h_tooltip-title,.bhf #h_search .src-suggestion+.src-suggestion{display:none}.bhf #h_search .as-lst-it{border-bottom:1px solid #dbdbdb}.bhf #h_search .as-lst-it:last-child{border:0}.bhf #h_search .as-lnk{display:block;position:relative;padding:.875em 0 .875em 3.75em;overflow:hidden}.bhf #h_search .as-img{width:100%;height:auto;max-width:50px;font-size:.75em;position:absolute;left:0}.bhf #h_search .as-name{overflow:hidden;text-overflow:ellipsis;-webkit-line-clamp:2;-webkit-box-orient:vertical;display:-webkit-box;min-height:2em;font-size:.875em;line-height:normal;color:#666}.bhf #h_search .as-price{font-size:1.125em;line-height:1.2;color:#666;font-weight:700;white-space:nowrap}.bhf #h_search .as-price strong{font-weight:400;font-size:.66666em;vertical-align:middle}.bhf #h_search .as-unavailable{white-space:normal;font-size:12px;background:#eee;padding:5px;display:block;color:#333;font-weight:700}.bhf #h_search .as-rating{max-width:5em;height:1.5em;fill:#ccc;display:none;position:absolute;z-index:0}.bhf #h_search .as-rating-group{max-width:5em;height:0;padding:0 0 .2em;position:relative}.bhf #h_search .as-rating-score{fill:#ffcb05;z-index:1}.bhf #h_search.src-filter .src-input{padding-left:3em;border-left:.4em solid transparent}.bhf #h_search.focus .src-slc-wrapper{width:8em}.bhf #h_search.focus .src-select{color:#666;background:#e5e5e5}.bhf #h_search.focus .src-slc-arrow{fill:#666;right:3px;margin-right:0;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);padding:1.5em 1em .5em;top:3px}.bhf #h_search.focus .src-input{padding-left:8em}.bhf #h_topmenu{display:none;width:100%;-webkit-flex-direction:inherit;-ms-flex-direction:inherit;flex-direction:inherit;white-space:nowrap}.bhf #h_trendingtopics{width:100%;background:0 0;min-height:46px;overflow-y:hidden;overflow-x:auto;white-space:nowrap;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-overflow-scrolling:touch}.bhf #h_trendingtopics .list{width:100%;height:46px}.bhf #h_trendingtopics .lst-item{display:inline-block;height:100%;vertical-align:middle}.bhf #h_trendingtopics .lst-lnk{display:block;font-size:.875em;padding:1em;border-radius:0;background:0 0;margin:0;color:#666;position:relative;overflow:hidden;transition:all .4s ease;box-sizing:border-box;line-height:1.3;z-index:1}.bhf #h_trendingtopics .lst-lnk.rp:after{content:"";display:block;position:absolute;left:50%;top:50%;width:60px;height:60px;margin-left:-30px;margin-top:-30px;background:0 0;border-radius:100%;opacity:.6;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);transition:all 2s ease;background:#ccc;z-index:-1;visibility:hidden}.bhf #h_trendingtopics .lst-lnk.rp:not(:active):after{-webkit-animation:h_ripple 2s ease-out;animation:h_ripple 2s ease-out}.bhf #h_trendingtopics .lst-lnk.rp:focus:after{visibility:visible}.bhf #h_trendingtopics .lst-lnk:active{color:#666}.bhf #h_trendingtopics .lst-lnk:hover{text-decoration:none;color:#666}.bhf #h_trendingtopics .lst-lnk:active:before,.bhf #h_trendingtopics .lst-lnk:hover:before{opacity:1;-webkit-transform:translateZ(0);transform:translateZ(0)}.bhf #h_trendingtopics .lst-lnk:active{text-decoration:none}.bhf #h_trendingtopics .lst-lnk:active:after{-webkit-transform:scale(2);-ms-transform:scale(2);transform:scale(2);opacity:1}.bhf #h_trendingtopics .lst-lnk:before{content:"";position:absolute;top:0;left:0;width:100%;height:100%;background:#f1f1f1;z-index:-1;opacity:0;box-sizing:border-box;-webkit-transform:scaleX(.1);transform:scaleX(.1);transition:all .7s ease;transition-timing-function:cubic-bezier(.2,1,.3,1)}.bhf #h_trendingtopics .highlight .lst-lnk{font-weight:700;color:#e60014;background:0 0;text-transform:none}.bhf #h_trendingtopics .highlight .lst-lnk:after{content:"";display:block;position:absolute;left:50%;top:50%;width:60px;height:60px;margin-left:-30px;margin-top:-30px;background:0 0;border-radius:100%;opacity:.6;-webkit-transform:scale(0);-ms-transform:scale(0);transform:scale(0);transition:all 2s ease;background:#fff000;z-index:-1;visibility:hidden}.bhf #h_trendingtopics .highlight .lst-lnk:not(:active):after{-webkit-animation:h_ripple 2s ease-out;animation:h_ripple 2s ease-out}.bhf #h_trendingtopics .highlight .lst-lnk:focus:after{visibility:visible}.bhf #h_trendingtopics .highlight .lst-lnk:before{background:#fff000;display:inline-block;vertical-align:middle}.bhf #h_trendingtopics .highlight-icon{width:.875em;height:.875em;fill:#e60014;top:-1px;position:relative;display:inline-block;vertical-align:middle;background:0 0}.bhf #h_trendingtopics::-webkit-scrollbar-thumb{background:#e60014}.bhf #h_trendingtopics::-webkit-scrollbar{display:none;height:3px}.bhf #h_trendingtopics .prime.lst-item .bhf-icon-product-prime{max-height:1.125em;max-width:7.625em}.bhf #h_trendingtopics .signin-prime.lst-item .bhf-icon-signin-prime{max-height:1.125em;max-width:5.625em}.bhf.hdr-float-enable #header-middle{transition:padding .3s ease}.bhf #h_externallink,.bhf #h_topbanner .header-banner{display:none}.bhf #h_steps{display:table;width:100%;padding:15px 0 0 60px;min-height:32px;box-sizing:border-box;position:relative}.bhf #h_steps .stp-item{width:auto;display:table-cell;position:relative;text-align:left}.bhf #h_steps .stp-item:after{content:"";display:block;border-top:3px solid #f2808a}.bhf #h_steps .stp-item:last-child{width:40px}.bhf #h_steps .stp-item:last-child:after{display:none}.bhf #h_steps .stp-item:last-child .stp-icon{border-radius:0;padding:0;overflow:visible;background:0 0;fill:#f2808a}.bhf #h_steps .stp-item:last-child.completed .stp-icon{fill:#fff;background:0 0}.bhf #h_steps .stp-item.completed:after,.bhf.prime #h_steps .stp-item.completed:after{border-color:#fff}.bhf #h_steps .stp-item.completed .stp-icon.completed-icon{fill:#e60014;background:#fff;width:12px;height:12px;margin:5px 0 0}.bhf #h_steps .stp-item .stp-label,.bhf #h_steps .stp-item.completed span.stp-label{color:#fff}.bhf #h_steps .stp-item a.stp-label:hover{text-decoration:underline;cursor:pointer}.bhf #h_steps .stp-item span.stp-label{color:#ffc0c5}.bhf #h_steps .stp-icon{width:28px;height:28px;fill:#f2808a}.bhf #h_steps .stp-icon.completed-icon{background:#f2808a;border-radius:100%;width:6px;height:6px;margin:8px 0 0 4px;padding:4px;fill:#f2808a}.bhf #h_steps .stp-icon.icon-current{fill:#fff;background:0 0;border-radius:0;padding:0;overflow:visible;margin:0 0 0 -5px}.bhf #h_steps .stp-label{display:none}.bhf #h_steps .stp-it-wpr{position:absolute;top:-14px;left:-2px;width:auto;height:33px;text-align:center}.bhf.prime #h_steps{padding:15px 0 0 100px}.bhf.prime #h_steps .stp-item:after{border-color:#f2808a}.bhf.prime #h_steps .stp-item.completed .stp-icon.completed-icon{fill:#e60014;background:#fff}.bhf.prime #h_steps .stp-item:last-child .stp-icon{background:0 0;fill:#f2808a}.bhf.prime #h_steps .stp-item:last-child.completed .stp-icon{background:0 0;fill:#fff}.bhf.prime #h_steps .stp-icon{fill:#f2808a;background:#f2808a}.bhf.prime #h_steps .stp-icon.icon-current{fill:#fff;background:0 0}.bhf.prime #h_steps span.stp-label{color:#f2808a}.bhf .h_links .lks-ico,.bhf .h_links .lks-txt{display:inline-block}.bhf #h_brand{text-align:left}.bhf #h_brand .brd-logo.prime{max-width:10em}@media (max-width:568px){.bhf .hidden-xs{display:none!important}}@media (min-width:569px) and (max-width:768px){.bhf .hidden-sm{display:none!important}}@media (min-width:769px) and (max-width:1025px){.bhf .hidden-md{display:none!important}}@media (min-width:1026px) and (max-width:1280px){.bhf .hidden-lg{display:none!important}}@media (min-width:1281px){.bhf .hidden-xl{display:none!important}}@media screen and (min-width:768px){.bhf .feather-wrapper{display:-webkit-flex;display:flex;display:-ms-flexbox;-webkit-align-items:center;-ms-flex-align:center;align-items:center;text-align:center;height:100%}.bhf .feather-wrapper>*{-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto}.bhf #h_brand{min-width:11em;margin-right:0}.bhf #h_brand .brd-logo{max-width:9.25em}.bhf #h_brand.mini-brand{margin:27px 0 27px 20px;min-width:inherit;text-align:inherit;position:absolute}.bhf #h_brand.mini-brand .brd-logo.small{display:none}.bhf #h_brand.mini-brand .brd-logo.default{max-width:9.25em;height:1.5em;padding:inherit;display:block}.bhf.prime #h_brand.mini-brand .brd-logo.prime{height:1.875em;max-width:14.5em;margin:0 0 0 5px}.bhf.bhd-basket #h_brand{margin-left:1em}.bhf #h_user{position:relative;right:0;width:4em}.bhf #h_user .usr-actions{position:inherit;right:0;display:inline-block}.bhf #h_user .tipster:before,.bhf #h_user .usr-box.arrow-top-center:before{right:3.2em}.bhf #h_user .usr-icon-wrapper{right:3px}.bhf .alert-prime-icon-box-user{left:28px;top:8px}.bhf #h_menu .menu-icon{padding:1.875em .625em 1em}.bhf #h_menu .mmn-link{margin:.5em 0 0}.bhf #h_minicart{width:4em}.bhf #h_minicart,.bhf #h_minicart .crt-link{position:relative}.bhf #h_minicart #crt-box{max-width:23.125em;min-width:18.125em;left:-20.8em}.bhf #h_search{padding-top:0}.bhf #h_search .src-autocomplete,.bhf #h_search .src-history{padding-right:0}.bhf #h_search .src-autocomplete .h_tooltip-title,.bhf #h_search .src-history .h_tooltip-title,.bhf #h_search .src-suggestion .h_tooltip-title{font-weight:700;color:#666;display:block;padding:.5em .4em}.bhf #h_search .src-slc-wrapper{width:11em;font-size:1em;border:0 solid #fff}.bhf #h_search .src-select{color:#666;padding:.875em 1.875em .875em .875em;background:#e5e5e5}.bhf #h_search .src-slc-arrow{background:linear-gradient(0deg,rgba(255,255,255,0),#e5e5e5 30%);margin-right:0;right:-4px;padding:1em;top:7px}.bhf #h_search .src-input{padding-top:.875em;padding-bottom:.875em;padding-left:1em;font-size:1em}.bhf #h_search .src-btn{background:#fff}.bhf #h_search .src-btn:after{display:block;border:2px solid #fff;border-radius:0;position:absolute;content:"";top:0;right:0;left:0;bottom:0}.bhf #h_search .src-btn-ico{min-height:49px;max-width:55%;height:55%;fill:#e60014}.bhf #h_search .ac-lnk,.bhf #h_search .hs-lnk{padding:.625em}.bhf #h_search .src-suggestion{padding:0 0 0 .5em}.bhf #h_search .src-suggestion .h_tooltip-title{border-bottom:0}.bhf #h_search .as-lst{display:-webkit-flex;display:-ms-flexbox;display:flex;overflow:hidden}.bhf #h_search .as-lst-it{-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;border:0;overflow:hidden;width:33%;border-right:0}.bhf #h_search .as-lnk{padding:.5em 1em}.bhf #h_search .as-name{margin:1em 0 .2em}.bhf #h_search .as-img{position:relative;max-width:120px;max-height:120px;display:block;margin:0 0 .75em}.bhf #h_search .as-price{display:block;margin:.1em 0 0;font-size:1.25em}.bhf #h_search .as-price strong,.bhf #h_search .as-rating{display:block}.bhf #h_search .as-rating-group{height:1.5em}.bhf #h_search.src-filter .src-input{padding-left:11em}.bhf #h_search.focus .src-slc-wrapper{width:11em}.bhf #h_search.focus .src-select{background:#e5e5e5}.bhf #h_search.focus .src-slc-arrow{background:linear-gradient(180deg,rgba(255,255,255,0),#e5e5e5 30%);fill:#666;padding:1em;top:7px;right:-4px}.bhf #h_search.focus .src-input{padding-left:11em}.bhf #h_steps{padding:20px 20px 0 270px;height:61px}.bhf #h_steps .stp-item:last-child{width:40px}.bhf #h_steps .stp-item:last-child .stp-it-wpr{width:100px}.bhf #h_steps .stp-item.completed .stp-icon.completed-icon{width:16px;height:16px;margin:7px 0 0}.bhf #h_steps .stp-item .stp-icon.completed-icon{width:8px;height:8px;margin:11px 0 0}.bhf #h_steps .stp-label{font-size:14px;text-transform:lowercase;display:block;position:absolute;width:100%;bottom:0}.bhf #h_steps .stp-icon{width:35px;height:35px}.bhf #h_steps .stp-icon.icon-current{fill:#fff;padding:0}.bhf #h_steps .stp-it-wpr{top:-18px;left:-62px;width:120px;height:58px}.bhf.prime #h_steps{padding:15px 20px 0 350px}}@media screen and (min-width:1025px){.bhf #header-middle{padding:1.2em 0}.bhf #header-bottom{height:auto;position:relative}.bhf #page.header-menu-opened{-webkit-transform:translateZ(0);transform:translateZ(0)}.bhf #header-top{min-height:2.375em}.bhf #h_brand{margin-left:0;min-width:16em;position:relative}.bhf #h_brand.mini-brand .brd-logo.default{max-width:14em;height:2.3125em}.bhf #h_brand .brd-logo{max-width:13.25em;height:1.875em;padding:.3em 0 0}.bhf #h_brand .brd-logo.prime{padding-bottom:0;height:1.875em;margin-top:0}.bhf #h_brand .brd-box,.bhf #h_brand .brd-slogan{display:block}.bhf #h_brand .brd-slogan:hover .brd-box{opacity:1;visibility:visible;top:-4em}.bhf #h_brand .brd-slogan .brd-box:before{top:75%}.bhf #h_brand .brd-logo-wpr{right:0}.bhf #h_user{min-width:14em;text-align:left;padding:0 0 0 3.5em;margin:0 1em 0 0}.bhf #h_user .usr-greeting{padding:0;display:block;cursor:pointer}.bhf #h_user .usr-actions{width:auto;padding:0}.bhf #h_user .usr-link{cursor:pointer;padding:0}.bhf #h_user .usr-grt-text{overflow:hidden;text-overflow:ellipsis;-webkit-line-clamp:1;white-space:nowrap;display:block;font-size:.9em;color:#fff}.bhf #h_user .usr-nick{font-size:1em;color:#fff}.bhf #h_user .usr-arrow{display:inline-block;vertical-align:middle;fill:#fff;width:.625em;height:.625em;padding-top:.375em}.bhf #h_user .usr-act-text{color:#fff;font-size:.8125em;display:inline-block;padding-right:.5em}.bhf #h_user .usr-icon-wrapper{position:absolute;z-index:9;top:-1.125em;left:-2.8em;width:2.375em;height:2.375em}.bhf #h_user .usr-icon{width:1.25em;height:1.25em}.bhf #h_user .tipster,.bhf #h_user .usr-box{right:-3.6em;top:.8em;transition-delay:.1s}.bhf #h_user .tipster:before,.bhf #h_user .usr-box.arrow-top-center:before{right:3.35em}.bhf .alert-prime-icon-box-user{left:-22px;top:-22px}.bhf #h_menu{position:relative;width:auto;top:0;height:100%;min-height:43px}.bhf #h_menu .mmn-itm-link:hover{background:#fff;color:#333}.bhf #h_menu .mmn-icon{fill:#e60014;padding:1em .625em;vertical-align:middle}.bhf #h_menu .mmn-arrow{display:inline-block;width:.6em;height:.6em;vertical-align:middle;margin:-5px .375em 0 0}.bhf #h_menu .mmn-sdb-title{display:inline-block;padding:1.1em 0 0 2.8em;color:#e60014;font-weight:700;font-size:.875em;text-transform:lowercase}.bhf #h_menu .mmn-sidebar{height:100%}.bhf #h_menu .mmn-box .mmn-panel:last-child:after{padding-bottom:.3em}.bhf #h_menu .mmn-box-wpr .mmn-panel{width:100%;height:100%}.bhf #h_menu .mmn-box-wpr .mmn-panel:last-child{width:auto}.bhf #h_menu.ready .mmn-sdb-arrow{fill:#e60014;display:inline-block;position:relative;right:0}.bhf #h_menu.active .mmn-sdb-arrow,.bhf #h_menu.hover .mmn-sdb-arrow{fill:#cd0114;transform:rotate(270deg);-webkit-transform:rotate(270deg);-moz-transform:rotate(270deg);-ms-transform:rotate(270deg)}.bhf #h_menu.active .mmn-sdb-title,.bhf #h_menu.hover .mmn-sdb-title{color:#e60014}.bhf #h_menu.active .mmn-link,.bhf #h_menu.hover .mmn-link{background:#fff}.bhf #h_menu .mmn-box-wpr{position:static;overflow-y:hidden;width:auto;height:100%;display:block;margin:0;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.bhf #h_menu .mmn-title{display:none}.bhf #h_menu .header-banner{display:block;height:100%;width:260px;text-align:right}.bhf #h_menu .hdr-bnr-image,.bhf #h_menu .hdr-bnr-item,.bhf #h_menu .hdr-bnr-link,.bhf #h_menu .mmn-box:after{display:block;width:100%;height:100%}.bhf #h_menu .hdr-bnr-image{overflow:hidden;background-size:cover;background-position:50%}.bhf #h_menu .mmn-wrapper{width:15.313em;height:100%;position:relative;-webkit-transform:translateZ(0);transform:translateZ(0)}.bhf #h_menu .mmn-box{width:16em;height:0;position:relative;transition:opacity .4s ease;overflow:visible;top:0;left:0;visibility:hidden;padding-top:0;opacity:0;-webkit-transform:translate3d(-17em,0,0);transform:translate3d(-17em,0,0);background:0 0;z-index:3}.bhf #h_menu .mmn-box:after{content:"";background:#fff;bottom:0;position:absolute;z-index:-1;border-radius:0}.bhf #h_menu .mmn-box:before{width:0;height:0;content:"";display:none;border-left:12px solid transparent;border-right:12px solid transparent;border-bottom:12px solid #fff;top:-12px;position:absolute;left:.8em;z-index:2;background:0 0;visibility:visible;opacity:1;transition:left .3s ease}.bhf #h_menu.active .mmn-box,.bhf #h_menu.hover .mmn-box{visibility:visible;height:auto;max-height:200em;padding:3.3em 0 0;width:auto;top:0;background:#fff;border-radius:0;opacity:1}.bhf #h_menu.active .mmn-wrapper,.bhf #h_menu.hover .mmn-wrapper{position:absolute;z-index:30;width:245px}.bhf #h_menu:hover .mmn-box:before{visibility:visible;opacity:1}.bhf #h_menu .mmn-item.mmn-submenu .mmn-pnl-level-2 *{-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto}.bhf #h_menu .mmn-panel.mmn-pnl-level-3,.bhf #h_menu .mmn-panel.mmn-pnl-level-4,.bhf #h_menu .mmn-panel.mmn-pnl-level-5,.bhf #h_menu .mmn-panel.mmn-pnl-level-6{position:static}.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-pnl-all{display:none}.bhf #h_menu .mmn-panel.mmn-pnl-level-2,.bhf #h_menu .mmn-panel.mmn-pnl-level-3,.bhf #h_menu .mmn-panel.mmn-pnl-level-4,.bhf #h_menu .mmn-panel.mmn-pnl-level-5,.bhf #h_menu .mmn-panel.mmn-pnl-level-6{left:0;z-index:-1;opacity:0;transition:all .2s;transition-delay:.2s;overflow:hidden;display:block;display:-webkit-flex;display:-ms-flexbox;display:flex;width:auto;visibility:hidden;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;min-width:100%;-webkit-transform:none;-ms-transform:none;transform:none;min-height:inherit;max-height:100%;top:0}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-pnl-tit-txt,.bhf #h_menu .mmn-panel.mmn-pnl-level-3 .mmn-pnl-tit-txt,.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-pnl-tit-txt,.bhf #h_menu .mmn-panel.mmn-pnl-level-5 .mmn-pnl-tit-txt,.bhf #h_menu .mmn-panel.mmn-pnl-level-6 .mmn-pnl-tit-txt{display:block;text-align:left;height:auto;background:0 0;padding:.75em .875em .375em;color:#333;font-size:1.375em;font-weight:400}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-arrow,.bhf #h_menu .mmn-panel.mmn-pnl-level-3 .mmn-arrow,.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-arrow,.bhf #h_menu .mmn-panel.mmn-pnl-level-5 .mmn-arrow,.bhf #h_menu .mmn-panel.mmn-pnl-level-6 .mmn-arrow{display:none}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-itm-link{color:#666}.bhf #h_menu .mmn-panel.mmn-pnl-level-3 .mmn-itm-link,.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-itm-link,.bhf #h_menu .mmn-panel.mmn-pnl-level-5 .mmn-itm-link,.bhf #h_menu .mmn-panel.mmn-pnl-level-6 .mmn-itm-link{color:#666;padding:0}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-itm-link:hover,.bhf #h_menu .mmn-panel.mmn-pnl-level-3 .mmn-itm-link:hover,.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-itm-link:hover,.bhf #h_menu .mmn-panel.mmn-pnl-level-5 .mmn-itm-link:hover,.bhf #h_menu .mmn-panel.mmn-pnl-level-6 .mmn-itm-link:hover{text-decoration:underline;color:#e60014}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-list,.bhf #h_menu .mmn-panel.mmn-pnl-level-3 .mmn-list,.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-list,.bhf #h_menu .mmn-panel.mmn-pnl-level-5 .mmn-list,.bhf #h_menu .mmn-panel.mmn-pnl-level-6 .mmn-list{min-width:245px;border-left:0;margin:0;overflow-x:hidden;overflow-y:auto}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-list::-webkit-scrollbar-thumb,.bhf #h_menu .mmn-panel.mmn-pnl-level-3 .mmn-list::-webkit-scrollbar-thumb,.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-list::-webkit-scrollbar-thumb,.bhf #h_menu .mmn-panel.mmn-pnl-level-5 .mmn-list::-webkit-scrollbar-thumb,.bhf #h_menu .mmn-panel.mmn-pnl-level-6 .mmn-list::-webkit-scrollbar-thumb{background:#696969;border:1px solid #fff}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-list::-webkit-scrollbar,.bhf #h_menu .mmn-panel.mmn-pnl-level-3 .mmn-list::-webkit-scrollbar,.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-list::-webkit-scrollbar,.bhf #h_menu .mmn-panel.mmn-pnl-level-5 .mmn-list::-webkit-scrollbar,.bhf #h_menu .mmn-panel.mmn-pnl-level-6 .mmn-list::-webkit-scrollbar{width:5px}.bhf #h_menu .mmn-box .mmn-panel.mmn-pnl-level-1>.mmn-list{display:inherit;height:100%;width:inherit;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.bhf #h_menu .mmn-item .itm-lnk-level-1{color:#666;text-transform:inherit;font-size:.875em;text-align:left;cursor:pointer}.bhf #h_menu .mmn-item .itm-lnk-level-1.mmn-itm-hash{cursor:default}.bhf #h_menu .mmn-item .mmn-item:hover .itm-lnk-level-1,.bhf #h_topmenu .tp-featured a{color:#e60014}.bhf #h_menu .mmn-box .mmn-panel:last-child:before{margin:0}.bhf #h_menu .mmn-item.hover>.mmn-panel{overflow:hidden}.bhf #h_menu .mmn-item:hover .mmn-itm-link{background:#fff;font-weight:400;text-decoration:none;cursor:pointer}.bhf #h_menu .mmn-item:hover .mmn-itm-link.mmn-itm-hash{cursor:default}.bhf #h_menu .mmn-item:hover>.mmn-panel{overflow:hidden}.bhf #h_menu .mmn-item:hover .mmn-panel.mmn-panel{left:245px;opacity:1;visibility:visible;border-radius:0;z-index:-1;-webkit-transform:none;-ms-transform:none;transform:none}.bhf #h_menu .mmn-item:hover.todas-as-lojas .mmn-itm-hash:hover{font-weight:700}.bhf #h_menu .mmn-pnl-level-2 .mmn-item.mmn-pnl-all{display:none}.bhf #h_menu .mmn-panel.mmn-pnl-level-1.mmn-highlight{background:#fff}.bhf #h_menu .mmn-item{width:inherit;display:block;border-bottom:0}.bhf #h_menu .mmn-item .mmn-pnl{transition-delay:.3s;left:0;width:0;opacity:0;position:absolute;z-index:-1;visibility:hidden}.bhf #h_menu .mmn-item .mmn-itm-link{padding:.572em 1.7em .572em 1em;font-size:.875em}.bhf #h_menu .mmn-item .mmn-back{display:none}.bhf #h_menu .mmn-item .col.col-1 .mmn-pnl-title{visibility:inherit;background:0 0;height:auto;padding:0}.bhf #h_menu .mmn-item .col>.mmn-pnl-title{background:0 0;height:auto;padding:0;visibility:hidden;display:block}.bhf #h_menu .mmn-pnl-level-2 .mmn-item{display:block}.bhf #h_menu .mmn-pnl-title{background:0 0;height:auto;padding:0}.bhf #h_menu .mmn-bottom:before,.bhf #h_menu .mmn-highlight:after{margin:0}.bhf #h_menu .mmn-link,.bhf #h_menu.active .mmn-link,.bhf #h_menu.hover .mmn-link{transition:opacity .4s ease-in-out;position:absolute;display:block;width:15.313em;box-sizing:border-box;z-index:101;white-space:nowrap;left:0}.bhf #h_menu .mmn-link{margin:0;background:0 0}.bhf #h_menu .mmn-link .mmn-sdb-ico,.bhf #h_menu .mmn-link .mmn-sdb-ico:after,.bhf #h_menu .mmn-link .mmn-sdb-ico:before,.bhf #h_menu.active .mmn-link .mmn-sdb-ico,.bhf #h_menu.active .mmn-link .mmn-sdb-ico:after,.bhf #h_menu.active .mmn-link .mmn-sdb-ico:before,.bhf #h_menu.hover .mmn-link .mmn-sdb-ico,.bhf #h_menu.hover .mmn-link .mmn-sdb-ico:after,.bhf #h_menu.hover .mmn-link .mmn-sdb-ico:before{transition:.25s}.bhf #h_menu .mmn-sdb-ico{background:#e60014;display:inline-block;vertical-align:middle;left:12px}.bhf #h_menu .mmn-sdb-ico:after,.bhf #h_menu .mmn-sdb-ico:before{background:#e60014}.bhf #h_menu .mmn-sdb-ico:before{top:6px}.bhf #h_menu .mmn-sdb-ico:after{top:-6px}.bhf #h_menu.active .mmn-link,.bhf #h_menu.hover .mmn-link{background:0 0;margin:0;-webkit-transform:translateZ(0);transform:translateZ(0)}.bhf #h_menu.active .mmn-sdb-ico,.bhf #h_menu.hover .mmn-sdb-ico{background:#e60014;top:1.4em}.bhf #h_menu.active .mmn-sdb-ico:after,.bhf #h_menu.active .mmn-sdb-ico:before,.bhf #h_menu.hover .mmn-sdb-ico:after,.bhf #h_menu.hover .mmn-sdb-ico:before{background:#e60014;-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0);top:6px;right:0}.bhf #h_menu.active .mmn-sdb-ico:after,.bhf #h_menu.hover .mmn-sdb-ico:after{top:-6px}.bhf #h_minicart{min-width:3em;margin-right:1em}.bhf #h_minicart .crt-icon{width:2.07em;height:2.07em;float:none;padding:inherit;margin:0}.bhf #h_minicart .crt-link{position:static;width:auto}.bhf #h_minicart .crt-quantity{right:.1em;font-size:.9em;top:0;line-height:1.6}.bhf #h_minicart.ready.hover #crt-box{opacity:1;visibility:visible}.bhf #h_minicart #crt-box{top:4em;left:-20.8em}.bhf #h_minicart #crt-box.arrow-top-right:before{right:.8em}.bhf #h_minicart #crt-box .crt-it-name{max-width:13em}.bhf #h_topmenu,.bhf #h_topmenu .list{display:-webkit-flex;display:flex;display:-ms-flexbox}.bhf #h_topmenu{-webkit-align-items:center;-ms-flex-align:center;align-items:center}.bhf #h_topmenu .list{-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;width:100%;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.bhf #h_topmenu .lst-lnk{padding:.875em 1em;font-size:.8125em;color:#fff;cursor:pointer;display:block;text-decoration:underline;transition:all .4s ease}.bhf #h_topmenu .lst-lnk:hover{color:#fff000}.bhf #h_trendingtopics{width:100%;position:relative;right:0;display:block;min-height:43px;overflow:hidden}.bhf #h_trendingtopics .list{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;width:100%;height:43px;font-size:0}.bhf #h_trendingtopics .lst-item{width:100%;height:100%;text-align:center;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto}.bhf #h_trendingtopics .lst-lnk{padding:1em 1.5em;margin:inherit;box-sizing:border-box;line-height:1.2em}.bhf #h_externallink{display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;margin:0 .75em 0 0;background:0 0;-webkit-flex-direction:inherit;-ms-flex-direction:inherit;flex-direction:inherit;white-space:nowrap}.bhf #h_externallink .ext-link{display:block;width:auto;background-color:transparent}.bhf #h_externallink .ext-item{display:inline-block;border:0 none transparent;margin:0 .5em 1px 0;line-height:1.4;position:relative}.bhf #h_externallink .ext-item.active,.bhf #h_externallink .ext-item:hover{border:0 none transparent;background-color:transparent}.bhf #h_externallink .ext-item.active .ext-lnk-txt,.bhf #h_externallink .ext-item:hover .ext-lnk-txt{color:#fff}.bhf #h_externallink .tp-mn-ext-lnk{display:block}.bhf #h_externallink .ext-lnk-ico{display:inline-block;width:6em;height:1.9em;padding:0 0 0 .7em;vertical-align:middle}.bhf #h_externallink .ext-lnk-txt{display:inline-block;font-size:.8125em;color:#fff;padding:.8em 1em .8em .1em;vertical-align:middle}.bhf #h_topbanner{height:48px;overflow:hidden}.bhf #h_topbanner .hdr-bnr-item,.bhf #h_topbanner .hdr-bnr-link,.bhf #h_topbanner .header-banner{display:block}.bhf #h_topbanner .hdr-bnr-image{display:block;margin:0 auto}.bhf #h_steps{padding:15px 20px 0 350px}.bhf #h_brand{text-align:center}.bhf #h_brand .brd-logo{margin-right:22px}.bhf #h_brand .brd-logo.prime{margin-right:0;max-width:14.5em}.bhf #h_menu{min-width:16em}.bhf #h_menu .mmn-pnl-level-2>.mmn-list>.mmn-pnl-all{display:none}.bhf #h_menu .mmn-panel.mmn-pnl-level-2>.mmn-list{-webkit-column-count:2;column-count:2;-webkit-column-fill:auto;column-fill:auto;height:100%;padding:1em 0;min-width:500px;box-sizing:border-box;overflow:visible}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-itm-link{padding:0 .875em .275em 1.2em;box-sizing:border-box}.bhf #h_menu .todas-as-lojas .mmn-panel.mmn-pnl-level-2>.mmn-list{-webkit-column-count:3;column-count:3}.bhf #h_menu .todas-as-lojas .mmn-panel.mmn-pnl-level-2>.mmn-list>.mmn-item{width:252px}.bhf #h_menu .mmn-itm-link.itm-lnk-level-2{width:100%}.bhf #h_menu .mmn-box .mmn-panel.mmn-pnl-level-2>.mmn-list .mmn-pnl-title,.bhf #h_menu .mmn-item.mmn-pnl-back,.bhf #h_menu .mmn-pnl-title{display:none}.bhf #h_menu .mmn-pnl-level-2>.mmn-list>.mmn-item.mmn-submenu{margin-bottom:2em;-webkit-column-break-inside:avoid;break-inside:avoid;width:252px;overflow:hidden}.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-itm-link.itm-lnk-level-3,.bhf #h_menu .mmn-panel.mmn-pnl-level-2 .mmn-itm-link.mmn-all-level-3{padding:.5em 1em .5em 1.8em}.bhf #h_menu .mmn-panel.mmn-pnl-level-4 .mmn-itm-link.itm-lnk-level-4{padding:.4em 3em}.bhf #h_menu .mmn-box:after{box-shadow:2px -1px 11px -1px rgba(0,0,0,.1)}.bhf #h_menu .todas-as-lojas .mmn-panel.mmn-pnl-level-2 .mmn-itm-link{padding:.625em 0 .652em 1.8em}.bhf #h_menu .mmn-itm-flag:hover,.bhf #h_menu .todas-as-lojas .mmn-panel.mmn-pnl-level-2 .mmn-itm-link:hover .mmn-itm-flag{text-decoration:none}.bhf #h_menu .mmn-box .todas-as-lojas .mmn-panel.mmn-pnl-level-2>.mmn-list .mmn-pnl-title{display:block;-webkit-column-span:all;column-span:all}.bhf #h_menu .mmn-box .todas-as-lojas .mmn-panel.mmn-pnl-level-2>.mmn-list .mmn-pnl-title .mmn-pnl-tit-txt{padding:0 .875em .5em 1.2em;font-weight:700;font-size:20px;color:#666}.bhf #h_menu .mmn-box .mmn-panel.mmn-pnl-level-1>.mmn-list>.mmn-item:hover>.mmn-itm-link{color:inherit;background:#f2f2f2}.bhf #h_menu .mmn-itm-flag{float:none;margin:0 0 0 1em;font-size:11px;font-weight:700;vertical-align:top;text-decoration:none;line-height:1.6;padding:2px 5px 4px;display:inline-block}.bhf #h_menu .mmn-item:not(.todas-as-lojas) .mmn-panel.mmn-pnl-level-2>.mmn-list>.mmn-item>.mmn-itm-link{font-size:20px;font-weight:700;font-style:normal;font-stretch:normal;line-height:1.4;text-align:left;color:#666;text-decoration:underline}.bhf #h_menu .mmn-item:not(.todas-as-lojas) .mmn-panel.mmn-pnl-level-2>.mmn-list>.mmn-item>.mmn-itm-link:hover{color:#e60014}.bhf #h_menu .mmn-item:not(.todas-as-lojas) .mmn-panel.mmn-pnl-level-2>.mmn-list>.mmn-item>span.mmn-itm-link{text-decoration:none;cursor:auto}.bhf #h_menu .mmn-item:not(.todas-as-lojas) .mmn-panel.mmn-pnl-level-2>.mmn-list>.mmn-item>span.mmn-itm-link:hover{color:inherit;cursor:default}.bhf #h_menu .mmn-item:not(.todas-as-lojas) .mmn-panel.mmn-pnl-level-2>.mmn-list>.mmn-item:not(.mmn-submenu)>.mmn-itm-link{margin-bottom:1em}.bhf #h_trendingtopics .highlight{-webkit-order:1;-ms-flex-order:1;order:1}.bhf #h_trendingtopics .highlight .lst-lnk{background:#fff;z-index:2;position:absolute;right:0}}@media screen and (min-width:1280px){.bhf.bhd-basket #h_brand{margin-left:0}}@media screen and (max-width:1024px){.bhf.bhd-basket #h_user .usr-box{right:.2em}.bhf.bhd-basket #h_user .usr-box:before{right:.6em}}@media screen and (min-width:568px){.bhf #h_search .h_tooltip{padding:.5em;display:-webkit-flex;display:-ms-flexbox;display:flex}.bhf #h_search .src-autocomplete,.bhf #h_search .src-history{width:35%;margin:0;vertical-align:top}.bhf #h_search .src-autocomplete:only-child,.bhf #h_search .src-history:only-child,.bhf #h_search .src-suggestion:only-child{width:100%}.bhf #h_search .src-suggestion{width:65%;padding:0 .875em 0 .5em;border-top:0;margin:0}.bhf #h_search .src-suggestion:nth-child(2){border-left:1px solid #dbdbdb}}@media screen and (max-width:767px){.bhf.hdr-mini .header-content{position:relative;border-bottom:none}.bhf.hdr-mini #h_search.active .src-close .src-btn-ico,.bhf.hdr-mini #h_trendingtopics{display:none}.bhf.hdr-mini #header-middle{padding:.6em 0}.bhf.hdr-mini #header-bottom{border:0}.bhf.hdr-mini #h_brand{margin-right:9em}.bhf.hdr-mini #h_brand .brd-logo{max-width:8em;height:1.5em;margin-top:2px}.bhf.hdr-mini #h_search{position:absolute;top:0;right:0;padding:.3em;transition:background .2s ease}.bhf.hdr-mini #h_search .src-input{transition:width .3s ease-out;float:right}.bhf.hdr-mini #h_search .src-btn-ico{max-width:55%;height:55%}.bhf.hdr-mini #h_search.active .src-close{display:block;position:absolute;right:0;top:0;width:2.8em;padding:.625em 1em;text-align:center}.bhf.hdr-mini #h_search.active .src-close span{font-size:.75em;text-transform:lowercase;color:#fff}.bhf.hdr-mini #h_search.active{background:#e60014;padding-top:.3em;height:100%;width:100%}.bhf.hdr-mini #h_search.active .src-input-wpr{margin-right:5.4em;display:block}.bhf.hdr-mini #h_search.active .src-btn{height:40px}.bhf.hdr-mini #h_search.active .src-btn-ico{max-width:41.69%;height:69%;margin:2px 0 0 4px}.bhf.hdr-mini #h_search:not(.active){right:6em;height:100%;width:2.5em;padding:0}.bhf.hdr-mini #h_search:not(.active) .src-form{height:100%}.bhf.hdr-mini #h_search:not(.active) .src-input{background:0 0;color:transparent;width:0}.bhf.hdr-mini #h_search:not(.active) .src-input::-webkit-input-placeholder{color:transparent}.bhf.hdr-mini #h_search:not(.active) .src-input:-ms-input-placeholder{color:transparent}.bhf.hdr-mini #h_search:not(.active) .src-input::placeholder{color:transparent}.bhf.hdr-mini #h_search:not(.active) .src-btn{background:0 0;width:100%}.bhf.hdr-mini #h_search:not(.active) .src-btn-ico{fill:#fff}}@media screen and (min-width:1025px) and (min-height:600px){.bhf.hdr-float #header-banner{overflow:hidden}.bhf.hdr-float #header-middle{position:fixed;padding:13.5px 0;width:100%;z-index:100;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);transition:padding .3s ease;top:0;left:0}.bhf.hdr-float #header-bottom{width:100%;z-index:99;position:fixed;transition:transform .3s ease;transition:transform .3s ease,-webkit-transform .3s ease;-webkit-transform:translateY(-100px);-ms-transform:translateY(-100px);transform:translateY(-100px);top:72px}.bhf.hdr-float.up #header-bottom{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}.bhf.hdr-float.down #header-bottom{-webkit-transform:translateY(-50px);-ms-transform:translateY(-50px);transform:translateY(-50px)}.bhf.hdr-float .header-innerlay{z-index:99;position:absolute}}@media (-ms-high-contrast:none){.bhf #h_menu .mmn-item.has-children .mmn-pnl-level-2{width:780px}}</style><style type="text/css">#bhd,body{position:relative}#bhd{min-width:320px;line-height:1.2;display:block}.hdr-menu-active{position:fixed;width:100%}body{margin:0;padding:0;height:100%;max-width:100%}.ready.active,.ready.active *,.ready.hover,.ready.hover *{z-index:100}#header-overlay,.header-innerlay{position:fixed;top:0;left:0;right:0;bottom:0;opacity:0;background:#333;transition:all .5s,z-index 0ms;visibility:hidden;z-index:99}#header-overlay.active,.header-innerlay.active{opacity:.5;visibility:visible}#bhd .tipster{padding:1em;opacity:0;transition:opacity .3s ease}#bhd .tipster.tip-open{transition:opacity .6s ease;opacity:1}@media screen and (min-width:1025px) and (min-height:600px){#header-overlay.active+#bhd.hdr-float .header-innerlay{opacity:.5;visibility:visible}}@media screen and (min-width:1025px){.hdr-menu-active #bhd,.hdr-menu-active #h_main-menu,.hdr-menu-active #h_trendingtopics{z-index:inherit}.hdr-menu-active{position:static}}</style>


<div class="header-content">
<div id="header-banner"><div class="feather-wrapper"><div id="h_topbanner" class="ready updated"><ul class="header-banner sizer szr-1" data-pos="topbanner">
<li class="hdr-bnr-item sz sz-1" style="background-color: #ffffff;">
<a target="_blank" href="" class="hdr-bnr-link" title="vote na gente :)">
<img src="../MeusProdutos/file_preg/topo.png" class="hdr-bnr-image" alt="vote na gente :)" title="vote na gente :)">
</a>
</li>
</ul>
</div></div></div>               <section id="header-middle">
<div class="feather-wrapper">
<div id="h_brand" class="ready">
<h1>
<a href="http://www.americanas.com.br/" title="" class="brd-link" id="brd-link" tabindex="6">
<svg class="brd-logo" aria-labelledby="brd-title" role="img">
<use xlink:href="#bhf_icon-logo"></use>
<title id="brd-title"></title>
</svg>
</a>
</h1>
</div>
<div id="h_search" tabindex="-1" class="ready">
<form action="https://www.americanas.com.br/busca/" class="src-form">
<div class="src-input-wpr">
<input id="h_search-input" class="src-input" type="text" name="conteudo" placeholder="O que você quer agora? :)" autocomplete="off" tabindex="2">
<button type="submit" class="src-btn" tabindex="-1">
<svg class="src-btn-ico" aria-labelledby="src-title" role="img">
<use xlink:href="#bhf_icon-search"></use>
<title id="src-title">Buscar</title>
</svg>
</button>
</div>
<a  class="src-close" tabindex="-1">
<svg class="src-btn-ico" aria-labelledby="src-close" role="img">
<use xlink:href="#bhf_icon-close"></use>
<title id="src-close">Cancelar</title>
</svg>
<span>Cancelar</span>
</a>
</form>
<div class="box src-box h_tooltip arrow-top-left empty">
<div class="src-history">
<div class="h_tooltip-title">Você buscou:</div>
<ul class="ac-lst sizer szr-1">
<li class="ac-lst-it sz sz-1">
<a class="ac-lnk src-lnk" href="https://www.americanas.com.br/busca/?conteudo=samsung&amp;chave=achistory">
<span class="ac-term" data-rank="1">samsung</span>
</a>
</li>
</ul>
</div>
</div>
</div>

<div id="h_user" tabindex="0" class="loggedout ready">
<span class="usr-greeting">
<div class="usr-grt-text">olá, faça seu login</div>
</span>
<span class="usr-actions">
<a  id="h_usr-link" class="usr-link" tabindex="3">
<span class="usr-icon-wrapper">
<svg class="usr-icon" aria-labelledby="usr-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-user"></use>
<title id="usr-title">Acesse sua conta</title>
</svg>
</span>
<span class="usr-act-text">ou cadastre-se</span>
<svg class="usr-arrow arrow-down" aria-labelledby="usr-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="usr-arw-title"></title>
</svg>
</a>
<div class="arrow-top-center h_tooltip usr-box box">
<a class="rp-primary rp btn-secondary btn usr-signin" id="h_usr-signin" href="https://cliente.americanas.com.br/s/?guest=false&amp;h=responsive&amp;next=https%3A%2F%2Fwww.americanas.com.br%2Fproduto%2F132126385%3Fchave%3Dprf_hm_0_oh_3_txar_00%26pfm_carac%3DNome%2520da%2520area%26pfm_index%3D2%26pfm_page%3Dhome%26pfm_pos%3Dmaintop3%26pfm_type%3Dvit_spacey">Entrar</a><a class="usr-signup" href="https://cliente.americanas.com.br/s/cadastro/pf/?guest=false&amp;h=responsive&amp;next=https%3A%2F%2Fwww.americanas.com.br%2Fproduto%2F132126385%3Fchave%3Dprf_hm_0_oh_3_txar_00%26pfm_carac%3DNome%2520da%2520area%26pfm_index%3D2%26pfm_page%3Dhome%26pfm_pos%3Dmaintop3%26pfm_type%3Dvit_spacey">Cliente novo? Cadastrar</a>
<ul class="usr-items">
<li class="usr-it"><a class="usr-account" href="https://minhaconta.americanas.com.br/#/account/home">Minha conta</a></li>
<li class="usr-it"><a class="usr-orders" href="https://minhaconta.americanas.com.br/#/orders/home">Meus pedidos</a></li>
</ul>
</div>
</span>
</div>
<div id="h_minicart" class="ready">
<a  class="crt-link" tabindex="4">
<svg class="crt-icon" aria-labelledby="crt-title" role="img">
<use xlink:href="#bhf_icon-cart"></use>
<title id="crt-title">acesse sua cesta</title>
</svg>
</a>
<div class="arrow-top-right h_tooltip crt-box box" id="crt-box"><span class="h_tooltip-title empty-crt">sua cesta está vazia</span></div>
</div>
</div>
<div class="header-innerlay"></div>
</section>
<section id="header-bottom">
<div class="feather-wrapper">

<nav id="h_menu" role="menubar" class="ready updated" onclick="ExibirMenu(&#39;exibir&#39;)">
<div id="CaixaMenu" class="mmn-wrapper">
<div class="mmn-sidebar">
<a onclick="ExibirMenu(&#39;exibir&#39;);" class="mmn-link" tabindex="1">
<div class="mmn-sdb-ico" onclick="ExibirMenu(&#39;ocultar&#39;);"></div>
<h1 class="mmn-sdb-title">compre por departamento</h1>
<svg class="mmn-sdb-arrow arrow-down" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">Abrir menu</title>
</svg>
</a>
<div class="box mmn-box">
<div class="mmn-box-wpr">
<span class="mmn-title">compre por departamento</span>
<div class="mmn-panel mmn-pnl-level-1">
<ul class="mmn-list sizer szr-13 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">departamento</span>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal" class="mmn-itm-link itm-lnk-level-1" tabindex="1">
enfeites de natal
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">enfeites de natal</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-1 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">enfeites de natal</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">enfeites de natal</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
enfeites de natal
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">enfeites de natal</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-9 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">enfeites de natal</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">árvore de natal tradicional</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/arvore-de-natal-tradicional" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
árvore de natal tradicional
</a>
</li>
<li class="mmn-item sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/luzes-de-natal" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
luzes de natal
</a>
</li>
<li class="mmn-item sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/enfeites-de-arvores" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
enfeites de árvores
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/bola-de-natal-decorada" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
bola de natal decorada
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/guirlanda" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
guirlanda
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/presepio" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
presépio
</a>
</li>
<li class="mmn-item sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/utensilio-de-mesa" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
utensílios de mesa
</a>
</li>
<li class="mmn-item sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/velas-e-porta-velas" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
velas e porta velas
</a>
</li>
<li class="mmn-item sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal/lacos-e-fitas" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
laços e fitas
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais enfeites de natal
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal" class="mmn-all mmn-all-level-2 mmn-itm-link" tabindex="1">
veja mais enfeites de natal
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-2">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
brinquedos e bebês
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">brinquedos e bebês</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">brinquedos e bebês</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">brinquedos</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/227109" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
brinquedos
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">brinquedos</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-14 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">brinquedos</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">bonecas</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/279688" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
bonecas
</a>
</li>
<li class="mmn-item sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/279649" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
bonecos
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/279669" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
barbie
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/279673" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
lego
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/279657" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
playground
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/279698" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
praia e piscina
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/279808" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
jogos
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/279670" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
bicicleta infantil
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/280068" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
bola de futebol
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/279692" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
fantasias
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/279748" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
brinquedos eletrônicos
</a>
</li>
<li class="mmn-item    sz sz-12">
<a target="_blank" href="https://www.americanas.com.br/categoria/279674" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
mini veículos
</a>
</li>
<li class="mmn-item    sz sz-13">
<a target="_blank" href="https://www.americanas.com.br/categoria/279690" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
controle remoto
</a>
</li>
<li class="mmn-item    sz sz-14">
<a target="_blank" href="https://www.americanas.com.br/categoria/279675" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
pelúcias
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/227109" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais brinquedos
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/226940" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
bebês
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">bebês</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-4 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">bebês</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">fraldas</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/272928" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
fraldas
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/272687" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
carrinho de passeio
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/272169" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
berçario
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/272228" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
brinquedos para bebê
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/226940" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais bebês
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/nossas-marcas" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
produtos exclusivos
</a>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x83">
<li class="hdr-bnr-item sz sz-1">
<a href="http://www.americanas.com.br/app?utm_source=BannerHomeFreteGratis&amp;utm_medium=BannerHomeFreteGratis&amp;utm_campaign=BannerHomeFreteGratis&amp;chave=prf_hm_mn_brinq_1_app" class="hdr-bnr-link" title="">
<div class="hdr-bnr-image loaded lzy" title="" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/07/21/banner_menu_acom17_frete.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/07/21/banner_menu_acom17_frete.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-3">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
celulares e telefonia fixa
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">celulares e telefonia fixa</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">celulares e telefonia fixa</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">celulares e smartphones</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/229187" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
celulares e smartphones
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">celulares e smartphones</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-4 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">celulares e smartphones</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">smartphones</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/350392" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
smartphones
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">smartphones</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-20 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">smartphones</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">iPhone 8</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/celulares-e-smartphones/iphone/iphone-8" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
iPhone 8
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/hotsite/lancamento-moto-x4" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
moto x4
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item sz sz-3">
<a href="http://www.americanas.com.br/hotsite/motog5sfamily" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
moto g5s
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/hotsite/galaxys8" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
galaxy s8
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/celulares-e-smartphones/samsung-galaxy/galaxy-note/galaxy-note-8" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
galaxy note 8
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/celulares-e-smartphones/iphone/iphone-x" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
iPhone X
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/454394" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
iPhone 7
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/454377" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
iPhone 7 Plus
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/345396" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
samsung galaxy
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/469233" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
moto g5
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/hotsite/motoe" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
moto e
</a>
</li>
<li class="mmn-item    sz sz-12">
<a target="_blank" href="https://www.americanas.com.br/categoria/446853" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
moto z
</a>
</li>
<li class="mmn-item    sz sz-13">
<a target="_blank" href="https://www.americanas.com.br/categoria/394593" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
zenfone
</a>
</li>
<li class="mmn-item    sz sz-14">
<a target="_blank" href="https://www.americanas.com.br/categoria/431513" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
galaxy s7
</a>
</li>
<li class="mmn-item    sz sz-15">
<a target="_blank" href="https://www.americanas.com.br/categoria/435034" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
galaxy j5
</a>
</li>
<li class="mmn-item    sz sz-16">
<a target="_blank" href="https://www.americanas.com.br/categoria/345488" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
moto g
</a>
</li>
<li class="mmn-item    sz sz-17">
<a target="_blank" href="https://www.americanas.com.br/categoria/433803" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
lg k
</a>
</li>
<li class="mmn-item    sz sz-18">
<a target="_blank" href="https://www.americanas.com.br/categoria/372414" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
lg g
</a>
</li>
<li class="mmn-item    sz sz-19">
<a target="_blank" href="https://www.americanas.com.br/categoria/434997" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
alcatel
</a>
</li>
<li class="mmn-item    sz sz-20">
<a target="_blank" href="https://www.americanas.com.br/categoria/229187?filtro=%7b%22id%22:%22tag%22,%22value%22:%22tag_telusadosmenu_acom%22%7d" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
smartphones usados
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/350392" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais smartphones
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/263608" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
acessórios para celular
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/474773" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
wearables
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/263569" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
capas / películas
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/229187" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais celulares e smartphones
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/373553" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
telefonia fixa
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">telefonia fixa</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">telefonia fixa</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">telefone sem fio</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/263555" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
telefone sem fio
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/373616" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
telefone com fio
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/263557" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
telefone sem fio com ramal
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/373553" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais telefonia fixa
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x77">
<li class="hdr-bnr-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/prime?chave=prf_bm_0_bn_x77_00_prime" class="hdr-bnr-link" title="">
<div class="hdr-bnr-image loaded lzy" title="" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/11/13/menu.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/11/13/menu.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-4">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
informática e tablets
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">informática e tablets</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">informática e tablets</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">informática</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/228190" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
informática
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">informática</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">informática</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">notebook</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/267868" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
notebook
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">notebook</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">notebook</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">2 em 1</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/438733" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
2 em 1
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/438750" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
notebook gamer
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/267868" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais notebook
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/267889" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
computadores e all in one
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">computadores e all in one</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">computadores e all in one</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">computador</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/267880" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
computador
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/267881" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
all in one
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/438754" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
pc gamer
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/267889" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais computadores e all in one
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/informatica?filtro=%5B%7B%22id%22%3A%22category.id%22%2C%22value%22%3A%22228190%22%2C%22fixed%22%3Atrue%7D%2C%7B%22id%22%3A%22extra.MARCA%22%2C%22value%22%3A%22Apple%22%7D%5D&amp;ordenacao=bestSellers&amp;origem=omega" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
apple
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/228190" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais informática
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/267908" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
tablet e ipad
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">tablet e ipad</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">tablet e ipad</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">ipad</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/267865" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ipad
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/268189" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
tablet
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/267908" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais tablet e ipad
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/228098" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
informática e acessórios
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">informática e acessórios</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-12 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">informática e acessórios</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">monitor</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/447673" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
monitor
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/448216" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
capa para notebook
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/447756" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
mouse
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/447755" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
teclado
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/475413" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
hd externo
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/447635" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
impressora
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/447634" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
multifuncionais
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/447879" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
roteadores
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/475416" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cartuchos
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/447885" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
headset
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/448160" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
placa de vídeo
</a>
</li>
<li class="mmn-item    sz sz-12">
<a target="_blank" href="https://www.americanas.com.br/categoria/448178" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
placa mãe
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/228098" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais informática e acessórios
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x78">
<li class="hdr-bnr-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/samsungslim?chave=pm_hm_mn_pcs_1_acom_intel_inside_14slim_0412" class="hdr-bnr-link" title="Notebook Samsung core i5">
<div class="hdr-bnr-image loaded lzy" title="Notebook Samsung core i5" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/11/22/acom-home-menu-260x540-Intel-lancam-14slim-x22s-b.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/11/22/acom-home-menu-260x540-Intel-lancam-14slim-x22s-b.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-5">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
tv, áudio e home theater
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">tv, áudio e home theater</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">tv, áudio e home theater</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">tv e home theater</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/227707" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
tv e home theater
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">tv e home theater</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-5 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">tv e home theater</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">tv</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/262909" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
tv
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">tv</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-11 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">tv</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">tv 4k</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/357894" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
tv 4k
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/357883" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
smart tv
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/262870" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
tv led
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/tv-e-home-theater/tv?filtro=%5B%7B%22id%22%3A%22category.id%22%2C%22value%22%3A%22262909%22%2C%22fixed%22%3Atrue%7D%2C%7B%22id%22%3A%22extra.POLEGADAS%22%2C%22value%22%3A%2232%5C%22%22%7D%5D&amp;ordenacao=bestSellers&amp;origem=omega" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
tv 32"
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/227707?filtro=%5B%7B%22id%22%3A%22category.id%22%2C%22value%22%3A%22262909%22%2C%22fixed%22%3Atrue%7D%2C%7B%22id%22%3A%22extra.POLEGADAS%22%2C%22value%22%3A%2240%22%7D%2C%7B%22id%22%3A%22extra.POLEGADAS%22%2C%22value%22%3A%2240%5C%22%22%7D%2C%7B%22id%22%3A%22extra.POLEGADAS%22%2C%22value%22%3A%2242%5C%22%22%7D%2C%7B%22id%22%3A%22extra.POLEGADAS%22%2C%22value%22%3A%2243%5C%22%22%7D%5D&amp;ordenacao=bestSellers&amp;origem=omega" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
tvs 40" a 43"
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/227707?filtro=%5B%7B%22id%22%3A%22category.id%22%2C%22value%22%3A%22262909%22%2C%22fixed%22%3Atrue%7D%2C%7B%22id%22%3A%22extra.POLEGADAS%22%2C%22value%22%3A%2249%5C%22%22%7D%2C%7B%22id%22%3A%22extra.POLEGADAS%22%2C%22value%22%3A%2250%5C%22%22%7D%5D&amp;ordenacao=bestSellers&amp;origem=omega" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
tvs 49" a 50"
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/tv-e-home-theater/tv/f/marca-Samsung" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
samsung
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/tv-e-home-theater/tv/f/marca-Philips" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
philips
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/tv-e-home-theater/tv/f/marca-LG" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
lg
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/tv-e-home-theater/tv/f/marca-Semp/marca-Semp-TCL/marca-Semp-Toshiba/marca-TCL/marca-Toshiba" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
semp tcl
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/tv-e-home-theater/tv/f/marca-Philco" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
philco
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/262909" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais tv
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/263029" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
home theater
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/357292" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
suporte para tv
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/262993" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
conversor digital
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/262976" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cabo hdmi
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/227707" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais tv e home theater
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/256408" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
áudio
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">áudio</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-5 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">áudio</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">micro system</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/262429" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
micro system
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/262431" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
som portátil
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/262488" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ipod e acessórios
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/262453" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
fone de ouvido
</a>
</li>
<li class="mmn-item sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/351552" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
soundbar
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/256408" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais áudio
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x79">
<li class="hdr-bnr-item sz sz-1">
<a href="http://www.americanas.com.br/hotsite/sinal-digital?chave=brd_hm_bn_0_0_sinaldigital" class="hdr-bnr-link" title="vale presente">
<div class="hdr-bnr-image loaded lzy" title="vale presente" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/02/20/SINAL_ANALOGICO-banner_menu-acom17-v1.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/02/20/SINAL_ANALOGICO-banner_menu-acom17-v1.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-6">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
eletrodomésticos e split
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">eletrodomésticos e split</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">eletrodomésticos e split</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">eletrodomésticos</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/227644" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
eletrodomésticos
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">eletrodomésticos</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-11 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">eletrodomésticos</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">geladeiras / refrigeradores</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/316788" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
geladeiras / refrigeradores
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/316689" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
fogões
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/316848" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cooktop
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/317052" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
forno de embutir
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/317050" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
coifas
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/316828" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
micro-ondas
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/316829" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
adega de vinho
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/316690" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
lava-louças
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/316808" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
lavadora de roupas
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/316691" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
secadora de roupas
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/369773" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
linha industrial
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/227644" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais eletrodomésticos
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
ar-condicionado e ventilação
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">ar-condicionado e ventilação</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-14 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">ar-condicionado e ventilação</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">ar-condicionado split inverter</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/ar-condicionado-split-inverter" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ar-condicionado split inverter
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/ar-condicionado-split" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ar-condicionado split
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/ar-condicionado-janela" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ar de janela
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/ar-condicionado-multi-split" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ar multi split
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/ar-condicionado-split-cassete" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ar split cassete
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/ar-condicionado-split-piso-teto" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ar split piso teto
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/cortina-de-ar" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cortina de ar
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/ar-condicionado-portatil" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ar portátil
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/climatizador-de-ar" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
climatizador
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/ventilador-e-circulador-de-ar" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ventiladores
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/aquecedores-de-ar" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
aquecedores
</a>
</li>
<li class="mmn-item    sz sz-12">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/linha-industrial-comercial" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
linha comercial / industrial
</a>
</li>
<li class="mmn-item    sz sz-13">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/kit-de-instalacao-e-acessorios" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
kit de instalação e acessórios
</a>
</li>
<li class="mmn-item    sz sz-14">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores/pecas-de-reposicao" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
peças para ar e ventiladores
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/ar-condicionado-e-aquecedores" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais ar-condicionado e ventilação
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x80">
<li class="hdr-bnr-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/prime?chave=prf_bm_0_bn_x80_00_prime" class="hdr-bnr-link" title="">
<div class="hdr-bnr-image loaded lzy" title="" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/11/13/menu.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/11/13/menu.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-7">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
eletroportáteis
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">eletroportáteis</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">eletroportáteis</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">eletroportáteis</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/227763" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
eletroportáteis
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">eletroportáteis</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-20 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">eletroportáteis</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">mixers e processadores de alimentos</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/443618" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
mixers e processadores de alimentos
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/443601" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
bebedouros e purificadores
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/443653" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ventiladores
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/443648" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
aspiradores de pó
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/443651" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
robô aspirador
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/443628" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
vaporizadores e higienizadores
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/443607" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
liquidificadores
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/443614" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
batedeiras
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/443620" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
pipoqueiras
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/438073" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
fornos elétricos
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/443603" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
centrífugas e espremedores de fruta
</a>
</li>
<li class="mmn-item    sz sz-12">
<a target="_blank" href="https://www.americanas.com.br/categoria/443652" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
churrasqueiras elétricas
</a>
</li>
<li class="mmn-item    sz sz-13">
<a target="_blank" href="https://www.americanas.com.br/categoria/443616" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
fritadeiras elétricas
</a>
</li>
<li class="mmn-item    sz sz-14">
<a target="_blank" href="https://www.americanas.com.br/categoria/443681" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
panelas de arroz elétrica
</a>
</li>
<li class="mmn-item    sz sz-15">
<a target="_blank" href="https://www.americanas.com.br/categoria/443606" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
grill, sanduicheiras e torradeiras
</a>
</li>
<li class="mmn-item    sz sz-16">
<a target="_blank" href="https://www.americanas.com.br/categoria/443675" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cafeteiras expresso
</a>
</li>
<li class="mmn-item    sz sz-17">
<a target="_blank" href="https://www.americanas.com.br/categoria/443674" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cafeteiras elétrica
</a>
</li>
<li class="mmn-item    sz sz-18">
<a target="_blank" href="https://www.americanas.com.br/categoria/443615" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
chaleiras elétrica
</a>
</li>
<li class="mmn-item    sz sz-19">
<a target="_blank" href="https://www.americanas.com.br/categoria/443630" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
máquinas de costura
</a>
</li>
<li class="mmn-item    sz sz-20">
<a target="_blank" href="https://www.americanas.com.br/categoria/443627" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ferros de passar
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/227763" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais eletroportáteis
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/nossas-marcas" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
produtos exclusivos
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">produtos exclusivos</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">produtos exclusivos</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">classic home</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a href="http://www.americanas.com.br/especial/hotsite/classichome/328549/acom-geralclassichome/328586" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
classic home
</a>
</li>
<li class="mmn-item    sz sz-2">
<a href="http://www.americanas.com.br/especial/hotsite/marcaorb/400666/sl-lancamentoorb-acom/407048" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
orb
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/nossas-marcas" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais produtos exclusivos
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x81">
<li class="hdr-bnr-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/prime?chave=prf_bm_0_bn_x81_00_prime" class="hdr-bnr-link" title="">
<div class="hdr-bnr-image loaded lzy" title="" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/11/13/menu.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/11/13/menu.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-8">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
móveis e decoração
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">móveis e decoração</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">móveis e decoração</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">móveis</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/228740" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
móveis
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">móveis</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-14 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">móveis</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">sofá</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/444385" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
sofá
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/444345" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
rack, estante e painel
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/444378" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
sala de jantar
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/444326" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
poltrona
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/443456" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cadeira
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/443426" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
banco e banqueta
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/444253" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
guarda-roupa
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/443515" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
colchão
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/443483" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cama box
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/443466" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cama
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/443441" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cabeceira, calçadeira e baú
</a>
</li>
<li class="mmn-item    sz sz-12">
<a target="_blank" href="https://www.americanas.com.br/categoria/444343" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
quarto completo
</a>
</li>
<li class="mmn-item    sz sz-13">
<a target="_blank" href="https://www.americanas.com.br/categoria/443518" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cozinha compacta
</a>
</li>
<li class="mmn-item    sz sz-14">
<a target="_blank" href="https://www.americanas.com.br/categoria/443540" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
cozinha modulada
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/228740" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais móveis
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/364673" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
decoração
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">decoração</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-6 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">decoração</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">luminária</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/366275" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
luminária
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/moveis/puff-e-tamborete?chave=prf_hi_at_dec_2_puff-e-tamborete" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
puff e tamborete
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/decoracao/objetos-decorativos?limite=24&amp;offset=0&amp;ordenacao=bestSellers&amp;origem=omega" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
objetos decorativos
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/decoracao/adesivo-decorativo?chave=prf_hi_at_dec_4_adesivo&amp;ordenacao=bestSellers&amp;origem=omega" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
adesivo decorativo
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/decoracao/persiana?chave=prf_hi_at_dec_6_persiana" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
persiana
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/366282" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
quadro
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/364673" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais decoração
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/nossas-marcas" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
produtos exclusivos
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">produtos exclusivos</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">produtos exclusivos</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">classic home</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a href="http://www.americanas.com.br/especial/hotsite/classichome/328549/acom-geralclassichome/328586" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
classic home
</a>
</li>
<li class="mmn-item    sz sz-2">
<a href="http://www.americanas.com.br/especial/hotsite/marcaorb/454931/orbtodos/407048?chave=hs_orb_todos" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
orb
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/nossas-marcas" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais produtos exclusivos
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x82">
<li class="hdr-bnr-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/madeiramadeira?chave=pm_hm_mn_mov_1_acom_madmad_0412" class="hdr-bnr-link" title="Produtos para casa da loja madeira madeira">
<div class="hdr-bnr-image loaded lzy" title="Produtos para casa da loja madeira madeira" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/11/09/acom-home-menu-260x540-MADEIRA-MADEIRA.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/11/09/acom-home-menu-260x540-MADEIRA-MADEIRA.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-9">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
moda, beleza e perfumaria
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">moda, beleza e perfumaria</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">moda, beleza e perfumaria</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">moda</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/358352" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
moda
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">moda</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-5 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">moda</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">feminino</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/358354" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
feminino
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">feminino</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">feminino</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">roupas</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/358357" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
roupas
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/358358" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
calçados
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/358360" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
bolsas e acessórios
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/358354" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais feminino
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/358355" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
masculino
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">masculino</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">masculino</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">roupas</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/358361" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
roupas
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/358394" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
calçados
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/358355" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais masculino
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/358432" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
infantil
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">infantil</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">infantil</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">para meninas</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/358414" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
para meninas
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/358434" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
para meninos
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/358432" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais infantil
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/437212" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
vestuário esportivo
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">vestuário esportivo</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">vestuário esportivo</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">feminino</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/438755" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
feminino
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/438418" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
masculino
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/437212" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais vestuário esportivo
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/465103" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
liquidação
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/358352" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais moda
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/228926" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
beleza &amp; perfumaria
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">beleza &amp; perfumaria</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-8 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">beleza &amp; perfumaria</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">chapinhas e pranchas</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/453532" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
chapinhas e pranchas
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/453500" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
secadores de cabelos
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/453553" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
escovas modeladoras
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/453698" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
barbeadores
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/469894" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
perfumes masculinos
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/469893" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
perfumes femininos
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/291086" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
maquiagem
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/470074" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
protetor solar
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/228926" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais beleza &amp; perfumaria
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x91">
<li class="hdr-bnr-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/358352?chave=brd_hm_mn_0_0_moda" class="hdr-bnr-link" title="moda">
<div class="hdr-bnr-image loaded lzy" title="moda" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/11/13/moda_verao18_virada3_menu.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/11/13/moda_verao18_virada3_menu.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-10">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
games, livros e filmes
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">games, livros e filmes</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">games, livros e filmes</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">games</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/226762" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
games
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">games</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-9 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">games</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">pré-venda</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/gamesmenuprevenda" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
pré-venda
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/hotsite/gamesmenulancamento" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
lançamentos
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/351535" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ps4
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">ps4</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-1 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">ps4</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">jogos ps4</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/356437" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
jogos ps4
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/351535" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais ps4
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/347990" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
xbox one
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">xbox one</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-1 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">xbox one</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">jogos xbox one</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/351258" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
jogos xbox one
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/347990" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais xbox one
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/291045" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
xbox 360
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">xbox 360</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-1 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">xbox 360</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">jogos xbox 360</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/291228" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
jogos xbox 360
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/291045" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais xbox 360
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/291067" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ps3
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">ps3</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-1 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">ps3</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">jogos ps3</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/291236" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
jogos ps3
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/291067" class="mmn-all mmn-all-level-4 mmn-itm-link" tabindex="1">
veja mais ps3
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/291327" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
jogos para pc
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/438754" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
pc gamer
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/games/nintendo-switch/jogos-nintendo-switch" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
jogos nintendo switch
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/226762" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais games
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/228310" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
livros
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">livros</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-5 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">livros</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">pré venda</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/livrosmenu" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
pré venda
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/hotsite/menulivroslancamentos" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
lançamentos
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/228622" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
livros importados
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/228405" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
livros didáticos
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-5">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-3" tabindex="1">
gêneros
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">gêneros</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-4">
<ul class="mmn-list sizer szr-5 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">gêneros</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-4">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">literatura estrangeira</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/228536" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
literatura estrangeira
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/228548" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
literatura nacional
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/228312" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
administração e negócios
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/228559" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
medicina e saúde
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/228511" class="mmn-itm-link itm-lnk-level-4" tabindex="1">
juvenil
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/228310" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais livros
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/227609" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
filmes
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">filmes</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-3 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">filmes</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">lançamentos</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/menufilmeslancamento" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
lançamentos
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/hotsite/menufilmesprevenda" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
pré-venda
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/315255" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
séries de tv
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/227609" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais filmes
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x85">
<li class="hdr-bnr-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/226762?filtro=%5B%7B%22id%22:%22category.id%22,%22value%22:%22226762%22,%22fixed%22:true%7D,%7B%22id%22:%22tag%22,%22value%22:%22tag-maisvendidoscomdescontonoboleto%22%7D%5D&amp;chave=prf_hm_0_mn_0_txar_games" class="hdr-bnr-link" title="">
<div class="hdr-bnr-image" title="" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/06/28/banner_menu_game_junho17.png&#39;)"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-11">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
automotivo
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">automotivo</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">automotivo</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">automotivo</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/226855" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
automotivo
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">automotivo</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-12 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">automotivo</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">pneus</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/267052" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
pneus
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/267011" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
som automotivo
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/267033" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
dvd automotivo
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/267010" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
gps
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/368193" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
autopeças
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/368273" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
motor
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/368196" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
bateria
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/267035" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
auto falantes
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/267038" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
iluminação
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/267051" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
módulos de potência
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/368134" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
central multimídia
</a>
</li>
<li class="mmn-item    sz sz-12">
<a target="_blank" href="https://www.americanas.com.br/categoria/267053" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
ferramentas automotivas
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/categoria/226855" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais automotivo
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/hotsite/oficina-motos" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
motos
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">motos</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-7 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">motos</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">pneus para motos</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/267045" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
pneus para motos
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/267018" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
vestuário
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/267055" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
malas
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/lojista/centauro?chave=MN_PR_CENTAURO" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
centauro
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/267148" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
capacetes
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/267019" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
peças para motos
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/automotivo/alarmes-e-travas-para-motos" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
alarmes e travas para motos
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a target="_blank" href="https://www.americanas.com.br/hotsite/oficina-motos" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais motos
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x92">
<li class="hdr-bnr-item sz sz-1">
<a href="http://www.americanas.com.br/hotsite/oficina?chave=brd_hm_mn_0_0_oficina" class="hdr-bnr-link" title="">
<div class="hdr-bnr-image" title="" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/09/18/oficina_bannermenu.png&#39;)"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item has-children mmn-submenu sz sz-12">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
parceiros e serviços
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">parceiros e serviços</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-2 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">parceiros e serviços</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">serviços</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1">
<a href="https://servicos.americanas.com.br/" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
serviços
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">serviços</title>
</svg>
</a>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-10 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">serviços</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">descarte ecológico</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a href="https://servicos.americanas.com.br/descarte_ecologico" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
descarte ecológico
</a>
</li>
<li class="mmn-item    sz sz-2">
<a href="https://servicos.americanas.com.br/garantia-estendida" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
garantia estendida
</a>
</li>
<li class="mmn-item    sz sz-3">
<a href="https://servicos.americanas.com.br/instalacao-ar-condicionado-split" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
instalação de ar condicionado
</a>
</li>
<li class="mmn-item    sz sz-4">
<a href="https://servicos.americanas.com.br/eletro-facil" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
instalação de eletro
</a>
</li>
<li class="mmn-item    sz sz-5">
<a href="https://listadecasamento.americanas.com.br/pages/HomePage?chave=MN_SV_LISTACASAMENTO" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
lista de casamento
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/hotsite/negocios-corporativos?WT.mc_id=d_negocioscorp_menuservicos&amp;chave=HM_SV_NEGCORP" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
negócios corporativos
</a>
</li>
<li class="mmn-item    sz sz-7">
<a href="http://revelacao-de-fotos.americanas.com.br/" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
revelação digital
</a>
</li>
<li class="mmn-item    sz sz-8">
<a href="https://servicos.americanas.com.br/seguro-roubo-furto" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
seguro roubo, furto e quebra
</a>
</li>
<li class="mmn-item    sz sz-9">
<a href="https://www.directlog.com.br/" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
serviços de entrega - Direct
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/frete?WT.mc_id=d_tiposfrete_menuprincipal&amp;chave=HM_SV_FRETE" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
tipos de entrega
</a>
</li>
<li class="mmn-item mmn-pnl-all">
<a href="https://servicos.americanas.com.br/" class="mmn-all mmn-all-level-3 mmn-itm-link" tabindex="1">
veja mais serviços
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-2">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-2" tabindex="1">
parceiros
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">parceiros</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-3">
<ul class="mmn-list sizer szr-4 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">parceiros</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-3">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">etna</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/etna?chave=pm_hm_mn_lj_1_acom_loja_etna_1707" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
etna
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.soubarato.com.br/?epar=pm_cv_ba_am_siteacomsbacom2&amp;opn=SBACOM2" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
outlet - sou barato
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/hotsite/leveros?chave=pm_hm_mn_dm1_leveros_120917" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
leveros
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/hotsite/madeiramadeira?chave=pm_mn_par_mov_acom_madmad_1311" class="mmn-itm-link itm-lnk-level-3" tabindex="1">
madeira madeira
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class="header-banner sizer szr-1" data-pos="x95">
<li class="hdr-bnr-item sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/hotsite/prime?chave=prf_bm_0_bn_x95_00_prime" class="hdr-bnr-link" title="">
<div class="hdr-bnr-image loaded lzy" title="" data-style="background-image: url(&#39;https://images-americanas.b2w.io/spacey/2017/11/13/menu.png&#39;)" style="background-image: url(&quot;https://images-americanas.b2w.io/spacey/2017/11/13/menu.png&quot;);"></div>
</a>
</li>
</ul>
</div>
</li>
<li class="mmn-item sz sz-13">
<a href="http://www.soubarato.com.br/?epar=pm_cv_ba_am_menumobileacom&amp;opn=MENU" class="mmn-itm-link itm-lnk-level-1" tabindex="1">
nosso outlet
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
</ul>
</div>
<div class="mmn-panel mmn-pnl-level-1">
<ul class="mmn-list sizer szr-1 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">todos os departamentos</span>
</li>
<li class="mmn-item  has-children  mmn-submenu sz sz-1 todas-as-lojas">
<span class="mmn-itm-link mmn-itm-hash itm-lnk-level-1" tabindex="1">
todos os departamentos
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">todos os departamentos</title>
</svg>
</span>
<div class="mmn-panel mmn-pnl-level-2">
<ul class="mmn-list sizer szr-39 no-col">
<li class="mmn-pnl-title"><span class="mmn-pnl-tit-txt">todos os departamentos</span>
</li>
<li class="mmn-item mmn-pnl-back">
<a  class="mmn-back mmn-bk-level-2">
<svg class="mmn-arrow" aria-labelledby="mmn-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">alimentos e bebidas</title>
</svg>
Voltar
</a>
</li>
<li class="mmn-item    sz sz-1">
<a target="_blank" href="https://www.americanas.com.br/categoria/226795" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
alimentos e bebidas
</a>
</li>
<li class="mmn-item    sz sz-2">
<a target="_blank" href="https://www.americanas.com.br/categoria/256408" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
áudio
</a>
</li>
<li class="mmn-item    sz sz-3">
<a target="_blank" href="https://www.americanas.com.br/categoria/226855" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
automotivo
</a>
</li>
<li class="mmn-item    sz sz-4">
<a target="_blank" href="https://www.americanas.com.br/categoria/317728" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
ar condicionado e ventilação
</a>
</li>
<li class="mmn-item    sz sz-5">
<a target="_blank" href="https://www.americanas.com.br/categoria/226940" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
bebês
</a>
</li>
<li class="mmn-item    sz sz-6">
<a target="_blank" href="https://www.americanas.com.br/categoria/228926" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
beleza &amp; perfumaria
</a>
</li>
<li class="mmn-item    sz sz-7">
<a target="_blank" href="https://www.americanas.com.br/categoria/315798" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
blu-ray e blu-ray 3D
</a>
</li>
<li class="mmn-item    sz sz-8">
<a target="_blank" href="https://www.americanas.com.br/categoria/227109" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
brinquedos
</a>
</li>
<li class="mmn-item    sz sz-9">
<a target="_blank" href="https://www.americanas.com.br/categoria/227296" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
cama, mesa e banho
</a>
</li>
<li class="mmn-item    sz sz-10">
<a target="_blank" href="https://www.americanas.com.br/categoria/227559" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
câmeras e filmadoras
</a>
</li>
<li class="mmn-item    sz sz-11">
<a target="_blank" href="https://www.americanas.com.br/categoria/casa-e-construcao" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
casa e construção
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-12">
<a target="_blank" href="https://www.americanas.com.br/categoria/229187" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
celulares e smartphones
</a>
</li>
<li class="mmn-item    sz sz-13">
<a target="_blank" href="https://www.americanas.com.br/categoria/364673" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
decoração
</a>
</li>
<li class="mmn-item    sz sz-14">
<a target="_blank" href="https://www.americanas.com.br/categoria/227644" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
eletrodomésticos
</a>
</li>
<li class="mmn-item    sz sz-15">
<a target="_blank" href="https://www.americanas.com.br/categoria/227763" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
eletroportáteis
</a>
</li>
<li class="mmn-item    sz sz-16">
<a target="_blank" href="https://www.americanas.com.br/categoria/227821" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
esporte e lazer
</a>
</li>
<li class="mmn-item    sz sz-17">
<a target="_blank" href="https://www.americanas.com.br/categoria/ferramentas-e-jardim" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
ferramentas e jardim
</a>
</li>
<li class="mmn-item    sz sz-18">
<a target="_blank" href="https://www.americanas.com.br/categoria/227609" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
filmes e séries
</a>
</li>
<li class="mmn-item    sz sz-19">
<a target="_blank" href="https://www.americanas.com.br/categoria/226762" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
games
</a>
</li>
<li class="mmn-item    sz sz-20">
<a target="_blank" href="https://www.americanas.com.br/categoria/421773" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
indústria, comércio e negócios
</a>
</li>
<li class="mmn-item    sz sz-21">
<a target="_blank" href="https://www.americanas.com.br/categoria/228190" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
informática
</a>
</li>
<li class="mmn-item    sz sz-22">
<a target="_blank" href="https://www.americanas.com.br/categoria/228098" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
informática e acessórios
</a>
</li>
<li class="mmn-item    sz sz-23">
<a target="_blank" href="https://www.americanas.com.br/categoria/228255" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
instrumentos musicais
</a>
</li>
<li class="mmn-item    sz sz-24">
<a target="_blank" href="https://www.americanas.com.br/categoria/369773" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
linha industrial
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
<li class="mmn-item    sz sz-25">
<a target="_blank" href="https://www.americanas.com.br/categoria/228310" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
livros
</a>
</li>
<li class="mmn-item    sz sz-26">
<a target="_blank" href="https://www.americanas.com.br/categoria/228641" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
malas e acessórios
</a>
</li>
<li class="mmn-item    sz sz-27">
<a target="_blank" href="https://www.americanas.com.br/categoria/358352" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
moda e acessórios
</a>
</li>
<li class="mmn-item    sz sz-28">
<a target="_blank" href="https://www.americanas.com.br/categoria/228740" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
móveis
</a>
</li>
<li class="mmn-item    sz sz-29">
<a target="_blank" href="https://www.americanas.com.br/categoria/227369" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
música
</a>
</li>
<li class="mmn-item    sz sz-30">
<a target="_blank" href="https://www.americanas.com.br/categoria/228804" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
papelaria
</a>
</li>
<li class="mmn-item    sz sz-31">
<a target="_blank" href="https://www.americanas.com.br/categoria/228975" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
pet shop
</a>
</li>
<li class="mmn-item    sz sz-32">
<a target="_blank" href="https://www.americanas.com.br/categoria/229017" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
relógios
</a>
</li>
<li class="mmn-item    sz sz-33">
<a target="_blank" href="https://www.americanas.com.br/categoria/227014" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
saúde
</a>
</li>
<li class="mmn-item    sz sz-34">
<a target="_blank" href="https://www.americanas.com.br/categoria/229073/" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
sinalização e segurança
</a>
</li>
<li class="mmn-item    sz sz-35">
<a target="_blank" href="https://www.americanas.com.br/categoria/336268" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
suplementos e vitaminas
</a>
</li>
<li class="mmn-item    sz sz-36">
<a target="_blank" href="https://www.americanas.com.br/categoria/373553" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
telefonia fixa
</a>
</li>
<li class="mmn-item    sz sz-37">
<a target="_blank" href="https://www.americanas.com.br/categoria/227707" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
tv e áudio
</a>
</li>
<li class="mmn-item    sz sz-38">
<a target="_blank" href="https://www.americanas.com.br/categoria/229231" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
utilidades domésticas
</a>
</li>
<li class="mmn-item    sz sz-39">
<a target="_blank" href="https://www.americanas.com.br/categoria/437212" class="mmn-itm-link itm-lnk-level-2" tabindex="1">
vestuário esportivo
<span class="mmn-itm-flag mmn-itm-novo">Novo</span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</nav>

<div id="h_trendingtopics" class="ready updated">
<ul class="list" id="list-level-1">
<li class="lst-item signin-prime">
<a target="_blank" href="http://www.americanas.com.br/hotsite/prime?chave=prf_0_hr_0_0_prime" title="Seja Americanas Prime" class="lst-lnk dd">
<svg class="bhf-icon-signin-prime" aria-labelledby="brd-title-signin-prime" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-signin-prime"></use>
<title id="brd-title-signin-prime">Seja Americanas Prime</title>
</svg>
</a>
</li>
<li class="lst-item highlight">
<a target="_blank" href="https://www.americanas.com.br/oferta-do-dia?chave=prf_hm_0_tt_7_" title="oferta do dia" class="lst-lnk rp">
<svg class="highlight-icon" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_brand-simple"></use>
</svg>
oferta do dia
</a>
</li>
<li class="lst-item">
<a target="_blank" href="https://www.americanas.com.br/categoria/enfeites-de-natal?chave=brd_hm_tt_0_0_enfeites17" title="enfeites de natal" class="lst-lnk rp">
enfeites de natal
</a>
</li>
<li class="lst-item">
<a target="_blank" href="https://go.onelink.me/NCRJ?pid=TT&amp;c=TT" title="frete grátis no app" class="lst-lnk rp">
frete grátis no app
</a>
</li>
<li class="lst-item">
<a target="_blank" href="https://www.americanas.com.br/categoria/celulares-e-smartphones/iphone/iphone-x?chave=pm_hm_tt_tel_1_acom_iphonex_0112" title="iPhone X" class="lst-lnk rp">
iPhone X
</a>
</li>
<li class="lst-item">
<a target="_blank" href="https://www.americanas.com.br/hotsite/osqueridinhos?chave=brd_hm_tt_0_0_queridinhos" title="#TemTudo" class="lst-lnk rp">
#TemTudo
</a>
</li>
<li class="lst-item">
<a target="_blank" href="https://www.americanas.com.br/hotsite/BNDES?chave=brd_hm_tt_0_0_bndes" title="para sua empresa" class="lst-lnk rp">
para sua empresa
</a>
</li>
</ul>
</div>
</div>
<div class="header-innerlay"></div>
</section>
</div>
</header>
</div>
<div id="content">
<main class="product-page" data-reactroot="" data-reactid="1">


<section class="panel panel-view card-panel" data-reactid="3">
<div class="container" data-reactid="4">
<div class="row" data-reactid="5">
<div class="col-xs-12" data-reactid="6">
<div class="container-fluid" data-reactid="7">
<div class="col-xs-12" data-reactid="8">
<div class="spacey-image">
<a href="http://www.americanas.com.br/frete">
<div class="picture placeholder">
<div></div>
</div>
</a>
</div>

</div>
</div>
<div class="container-fluid" data-reactid="10">
<div class="top-content row" data-reactid="11">
<div class="top-content row"><span class="col-xs-6 col-sm-12 pull-left"><div class="breadcrumb-wrapper"><span class="">
<ol role="navigation" aria-label="breadcrumbs" class="breadcrumb"></ol>										</span>
</div>
</span>                              <span class="col-xs-6 pull-right hidden-sm hidden-md hidden-lg" data-reactid="49">
<a data-reactid="50">
<span class="rating rating-sm" data-reactid="51">
<span class="rating-star-container" data-reactid="52">
<span data-reactid="53">
<svg viewBox="0 0 100 18" class="rating-star-icon" data-reactid="54">
<defs data-reactid="55">
<clippath id="svg-stars-mask-2364" data-reactid="56">
<rect x="0" y="0" width="97.14285714285714%" height="18" fill="white" data-reactid="57"></rect>
</clippath>
<g id="ratingStars" data-reactid="58">
<use xlink:href="#ratingStar" data-reactid="59"></use>
<use xlink:href="#ratingStar" transform="translate(20,0)" data-reactid="60"></use>
<use xlink:href="#ratingStar" transform="translate(40,0)" data-reactid="61"></use>
<use xlink:href="#ratingStar" transform="translate(60,0)" data-reactid="62"></use>
<use xlink:href="#ratingStar" transform="translate(80,0)" data-reactid="63"></use>
</g>
</defs>
<use xlink:href="#ratingStars" class="rating-star-svg" data-reactid="64"></use>
<use xlink:href="#ratingStars" class="rating-star-svg-filled" clip-path="url(#svg-stars-mask-2364)" data-reactid="65"></use>
</svg>
</span>
<span data-reactid="66">
<div class="rating-star-counter" data-reactid="67">79</div>
</span>
</span>
</span>
</a>
</span>
</div>

</div>
</div>
<div itemscope="" itemtype="http://schema.org/Product" class="main-area container-fluid" data-reactid="79">
<div class="row" data-reactid="80">
<div class="col-sm-5 col-xs-12" data-reactid="81">
<style>.s3 {margin-right: 10px;cursor: pointer;width: 61.2;}</style>
<div data-reactid="82">
  <div class="gallery-content swiper-container s1 card-panel-content swiper-container-horizontal" id="image-gallery-product" data-reactid="73">
    <div class="gallery-product swiper-wrapper" data-reactid="75" style="cursor: pointer; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
      
      
      <?php
      	$imagens = $ress['imagens'];
      	$img_explode = explode(';', $imagens);
      	$contar = count($img_explode);
      	for ($i=0; $i < $contar; $i++) { 
      ?>
      <figure class="swiper-slide" style="width: 503px;"><a href="<?php echo $img_explode[$i]; ?>" itemprop="contentUrl" data-size="1024x1024"><img class="swiper-slide-img" alt="Foto <?php echo $i + 1; ?>" src="<?php echo $img_explode[$i]; ?>"></a></figure>
      <?php
      }
      ?>

      
    </div>
    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" data-reactid="109">
    	<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    	<span class="swiper-pagination-bullet"></span>
    </div>
  </div>

  <div class="gallery-thumbs" data-reactid="110">
    <button direction="left" data-role="none" type="button" class="swiper-button-prev swiper-button-disabled" data-reactid="111"><svg class="svg-icon-md" aria-labelledby="" role="img" data-reactid="112"><use xlink:href="#icon-down" data-reactid="113"></use></svg></button>
      <div class="swiper-container s2 swiper-container-horizontal" data-reactid="116">
        <div class="swiper-wrapper" data-reactid="117" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

<?php
$imagens = $ress['imagens'];
$img_explode = explode(';', $imagens);
if (count($img_explode) > 1) {
$contar = count($img_explode);
for ($i=0; $i < $contar; $i++) { 
?>
<figure class="swiper-slide s3" style="width: 72.6px; margin-right: 10px;"><img alt="Foto <?php echo $i?>" class="swiper-slide-thumb swiper-slide-img swiper-lazy swiper-lazy-loaded" src="<?php echo $img_explode[$i]; ?>"></figure>
<?php
}}
?>

</div>
</div>
<button direction="right" data-role="none" type="button" class="swiper-button-next" data-reactid="140"><svg class="svg-icon-md" aria-labelledby="" role="img" data-reactid="141"><use xlink:href="#icon-down" data-reactid="142"></use></svg></button>
</div>
</div>
<script src="../MeusProdutos/file_preg/swiper.min.js.download"></script>
<script src="../MeusProdutos/file_preg/abigimage.jquery.js.download"></script>
<link rel="stylesheet" href="../MeusProdutos/file_preg/abigimage.jquery.min.css">
<script>$(function(){$('a[href$=".jpg"]').abigimage({onopen:function(t){this.bottom.html($("img",t).attr("alt"))}})});</script>
<script>
var _$_2fae=["\x2E\x67\x61\x6C\x6C\x65\x72\x79\x2D\x63\x6F\x6E\x74\x65\x6E\x74","\x2E\x73\x77\x69\x70\x65\x72\x2D\x70\x61\x67\x69\x6E\x61\x74\x69\x6F\x6E","\x2E\x67\x61\x6C\x6C\x65\x72\x79\x2D\x74\x68\x75\x6D\x62\x73\x20\x2E\x73\x77\x69\x70\x65\x72\x2D\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72","\x2E\x73\x77\x69\x70\x65\x72\x2D\x62\x75\x74\x74\x6F\x6E\x2D\x6E\x65\x78\x74","\x2E\x73\x77\x69\x70\x65\x72\x2D\x62\x75\x74\x74\x6F\x6E\x2D\x70\x72\x65\x76","\x73\x77\x69\x70\x65\x72\x2D\x73\x6C\x69\x64\x65\x2D\x73\x65\x6C\x65\x63\x74\x65\x64","\x61\x64\x64\x43\x6C\x61\x73\x73","\x65\x71","\x73\x6C\x69\x64\x65\x73","\x63\x6C\x69\x63\x6B\x65\x64\x49\x6E\x64\x65\x78","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x73\x6C\x69\x64\x65\x54\x6F"];var swiper1= new Swiper(_$_2fae[0],{pagination:_$_2fae[1],paginationClickable:!0,preloadImages:!1,lazyLoading:!0});var swiper2= new Swiper(_$_2fae[2],{spaceBetween:10,centeredSlides:!1,slidesPerView:5,preloadImages:!1,lazyLoading:!0,nextButton:_$_2fae[3],prevButton:_$_2fae[4],onInit:function(_0x187F7){_0x187F7[_$_2fae[8]][_$_2fae[7]](0)[_$_2fae[6]](_$_2fae[5])},onTap:function(_0x187F7,_0x1883F){var _0x1880F=_0x187F7[_$_2fae[9]],_0x18827=_0x187F7[_$_2fae[8]];isNaN(_0x1880F)|| (_0x187F7[_$_2fae[8]][_$_2fae[10]](_$_2fae[5]),_0x18827[_$_2fae[7]](_0x1880F)[_$_2fae[6]](_$_2fae[5]),swiper1[_$_2fae[11]](_0x1880F))}})
</script>
</div>
<div class="product-info-area col-sm-7 col-xs-12" data-reactid="126">
<section class="card-title" data-reactid="127">
<div data-reactid="128">
<meta itemprop="productID" content="<?php echo $ress['codigo']; ?>" data-reactid="129">
<meta itemprop="brand" content="Samsung" data-reactid="130">
</div>
<h1 itemprop="name" class="product-name" data-reactid="131"><?php echo $ress['nome']; ?></h1>
<span class="product-id" data-reactid="132">
(Cód.<?php echo $ress['codigo']; ?>)                                  </span>
<span class="rating-box hidden-xs" data-reactid="136">
<a  data-reactid="137">
<span class="rating rating-sm" data-reactid="138">
<span class="rating-star-container" itemscope="" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" data-reactid="139">
<span itemprop="ratingValue" content="4.0355" data-reactid="140">
<svg viewBox="0 0 100 18" class="rating-star-icon" data-reactid="141">
<defs data-reactid="142">
<clippath id="svg-stars-mask-8348" data-reactid="143">
<rect x="0" y="0" width="97.14285714285714%" height="18" fill="white" data-reactid="144"></rect>
</clippath>
<g id="ratingStars" data-reactid="145">
<use xlink:href="#ratingStar" data-reactid="146"></use>
<use xlink:href="#ratingStar" transform="translate(20,0)" data-reactid="147"></use>
<use xlink:href="#ratingStar" transform="translate(40,0)" data-reactid="148"></use>
<use xlink:href="#ratingStar" transform="translate(60,0)" data-reactid="149"></use>
<use xlink:href="#ratingStar" transform="translate(80,0)" data-reactid="150"></use>
</g>
</defs>
<use xlink:href="#ratingStars" class="rating-star-svg" data-reactid="151"></use>
<use xlink:href="#ratingStars" class="rating-star-svg-filled" clip-path="url(#svg-stars-mask-8348)" data-reactid="152"></use>
</svg>
</span>
<span data-reactid="153">
<div class="rating-star-counter" itemprop="reviewCount" content="14" data-reactid="154">79</div>
</span>
</span>
</span>
</a>
</span>
</section>

<?php

if($ress['extra'] > 0){

?>

<style type="text/css">
	@media screen and (min-width: 800px){
		#deskVolts td{
			padding: 10px 18px; border: 1px solid #ccc; margin-bottom: 10px; cursor: pointer; margin-top: 10px; margin-right: 10px; float: left;
		}

		#deskVolts{
			width: 100%;
			text-align: center;
		}

		#deskVolts .active{
			border: 1px solid #333;
			border-bottom: 4px solid #333;
		}

	}

	@media screen and (max-width: 799px){
		#deskVolts td{
			padding: 12px 14px; border: 1px solid #ccc; margin-bottom: 10px; cursor: pointer; margin-top: 10px; margin-right: 10px; display: block;
		}


		#deskVolts{
			width: 100%;
			text-align: center;
		}

		#deskVolts .active{
			border: 1px solid #333;
			border-bottom: 4px solid #333;
		}


		
	}
</style>


<div class="card-variations ViewUI-oocyw8-6 kvewNe">
	<div class="SpacingUI-sc-1h1d3az-0 rNRrW ViewUI-oocyw8-6 kvewNe">
		<div class="variation-type variations-b__Variation-sc-130zle6-8 bbLTZK SpacingUI-sc-1h1d3az-0 guGlJl ViewUI-oocyw8-6 kvewNe" type="Voltagem" size="2">
			<span class="TextUI-sc-1hrwx40-0 jqtftz"><?php

				switch ($ress['extra']) {
					case '1':
						echo 'Voltagem';
						break;

					case '2':
						echo 'Tamanho';
						break;

					case '3':
						echo 'Cor';
						break;
					
					default:
						echo 'Opção';
						break;
				}

			?> : <span class="TextUI-sc-1hrwx40-0 beNsgm" id="voltagem">Selecione...</span></span>
			<div class="variations-b__Container-sc-130zle6-0 fCchSZ ViewUI-oocyw8-6 kvewNe" type="Voltagem"><div class="variations-b__SpacingUI-sc-130zle6-5 fstVKB SpacingUI-sc-1h1d3az-0 fsylvT ViewUI-oocyw8-6 kvewNe"><div class="RippleContainer-sc-1e1nj6p-0 fqCWyR">
			
			<table id="deskVolts">
				<tr>
					<?php
					$valores = explode(";", $ress['valores']);
					for ($i=0; $i < count($valores); $i++) { 
						echo '
							<td>
							<div id="volt">'.$valores[$i].'</div>
							</td>';
						}
					?>
					
				</tr>
			</table>	
			</div></div><div class="variations-b__SpacingUI-sc-130zle6-5 fstVKB SpacingUI-sc-1h1d3az-0 fsylvT ViewUI-oocyw8-6 kvewNe"><div class="RippleContainer-sc-1e1nj6p-0 fqCWyR"></div></div></div></div></div></div>
				
<?php
}
?>			
			
			

<style>#bt-buy-product{background-color:#e60014;box-shadow:rgba(0,0,0,.2) 0 2px 6px;text-transform:lowercase;cursor:pointer;border-width:0;border-style:initial;border-color:initial;border-image:initial;border-radius:3px}.main-offer .main-price{text-align:start;align-items:start}}.buybox-b-mainas{border:1px solid #666;padding:1rem;margin-top:1rem}.buy-box{border:none;border-width:0}.card-freight .calc-freight .btn-freight{min-width:50px;text-transform:lowercase;cursor:pointer;border-image:initial;padding:0;background:#fff;border-color:#e60014;border-width:2px;border-radius:3px;border-style:solid;color:#e60014;font-size:inherit}.main-offer .btn-buy{min-width:230px;text-align:center;font-size:24px;padding:10px}@media (min-width:1025px){.buybox-b-mainas{padding:10px;border:1px solid #e5e5e5;position:relative;transition:height .5s ease-out;margin-top:0}</style>
<section class="buybox-b-mainas" itemtype="http://schema.org/Offer" itemprop="offers" itemscope="" data-reactid="157">
<span data-reactid="158">
<meta itemprop="priceCurrency" content="BRL" data-reactid="159">
<meta itemprop="availability" content="http://schema.org/InStock" data-reactid="160">
<meta itemprop="mainEntityOfPage" content="http://www.americanas.com.br//produto/<?php echo $ress['codigo']; ?>/smart-tv-led-65-samsung-ultra-hd-4k-un65nu7100gxzd-com-conversor-digital-3-hdmi-2-usb-wi-fi-solucao-inteligente-de-cabos-hdr-premium-smart-tizen" data-reactid="161">
<span data-reactid="162">
<meta itemprop="sku" content="<?php echo $ress['codigo']; ?>" data-reactid="163">
<meta itemprop="price" content="359" data-reactid="164">
<meta itemprop="itemCondition" content="http://schema.org/NewCondition" data-reactid="165">
</span>
</span>
<section class="buy-box" data-reactid="166">


<style type="text/css">
	@media screen and (max-width: 500px){
		#mobileDesk{
			display: block;
		}
	}
</style>

<section class="main-offer offers-loaded" data-reactid="181">
<div class="row" data-reactid="182">
<div class="" data-reactid="183">
</div>
<div class="main-price col-lg-6 col-md-6 col-sm-12 col-xs-12" data-reactid="185">
<span data-reactid="186">
vendido e entregue por <strong data-reactid="188"><span data-reactid="189">americanas.com</span></strong>
</span>
<div class="main-price" data-reactid="190">
<!--<p class="list-price"><strike class="regular-price">R$4298.99</strike><span class="discount"> (0% de desconto)</span></p>-->
<p class="sales-price" data-reactid="193">
R$<?php echo number_format($ress['valor'],2,',','.'); ?><svg class="prime SvgUI-sc-1hby79s-0 ewfmNv" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="svg-title" aria-describedby="svg-desc" width="85" height="22"><svg id="icon-prime" viewBox="0 0 292 86" width="100%" height="100%"><path fill="inherit" d="M88.07 44.28c0 2.46.34 4.8 1.01 7.01.68 2.21 1.65 4.14 2.92 5.8 1.27 1.65 2.82 2.97 4.65 3.95s3.9 1.47 6.21 1.47c2.59 0 4.86-.52 6.8-1.55 1.94-1.04 3.54-2.45 4.78-4.24s2.14-3.88 2.7-6.26.79-4.94.68-7.69c0-2.74-.38-5.17-1.14-7.27-.76-2.1-1.82-3.88-3.17-5.33s-2.93-2.56-4.73-3.32c-1.8-.76-3.78-1.13-5.92-1.13-2.37 0-4.48.48-6.34 1.43-1.86.95-3.41 2.25-4.65 3.91-1.24 1.65-2.18 3.61-2.83 5.88s-.97 4.72-.97 7.35zm0 38.72H83V22.35h5.07v7.64h.17c.73-1.4 1.68-2.66 2.83-3.78 1.16-1.12 2.42-2.04 3.8-2.77s2.8-1.29 4.27-1.68c1.47-.39 2.9-.59 4.31-.59 3.55 0 6.57.59 9.04 1.76 2.48 1.18 4.52 2.79 6.13 4.83 1.61 2.04 2.78 4.47 3.51 7.27s1.1 5.8 1.1 8.99c0 3.02-.39 5.94-1.18 8.74-.79 2.8-1.99 5.25-3.59 7.35-1.61 2.1-3.63 3.78-6.09 5.04s-5.34 1.89-8.66 1.89c-3.1 0-6.07-.69-8.92-2.06-2.85-1.37-5.09-3.4-6.72-6.09V83zm52.19-17.14h-5.07V22.35h5.07v8.15h.17c1.41-3.47 3.23-5.89 5.45-7.27 2.23-1.37 5.17-2.06 8.83-2.06v5.46c-2.87-.06-5.24.39-7.1 1.34-1.86.95-3.34 2.24-4.44 3.86-1.1 1.62-1.86 3.54-2.28 5.75s-.63 4.52-.63 6.93v21.34zm24.46 0V22.35h5.07v43.51h-5.07zm-.25-50.39V7.99h5.58v7.48h-5.58zM188 65.86h-5.07V22.35H188v6.55h.17c1.3-2.52 3.16-4.44 5.58-5.75 2.42-1.32 5.07-1.97 7.95-1.97 2.03 0 3.75.22 5.16.67 1.41.45 2.61 1.05 3.59 1.81.99.76 1.8 1.64 2.45 2.65s1.2 2.1 1.65 3.28c1.47-2.86 3.42-4.97 5.87-6.34s5.25-2.06 8.41-2.06c2.99 0 5.37.49 7.14 1.47 1.78.98 3.14 2.27 4.1 3.86.96 1.6 1.59 3.43 1.9 5.5.31 2.07.46 4.2.46 6.38v27.47h-5.07V35.8c0-3.14-.66-5.6-1.99-7.39-1.32-1.79-3.79-2.69-7.4-2.69-1.86 0-3.65.41-5.37 1.22-1.72.81-3.23 2.06-4.52 3.74-.56.73-1.03 1.58-1.39 2.56s-.66 2-.89 3.07a23.35 23.35 0 0 0-.46 3.19 39.57 39.57 0 0 0-.13 2.94v23.44h-5.07V35.81c0-3.14-.66-5.6-1.99-7.39-1.32-1.79-3.79-2.69-7.4-2.69-1.86 0-3.65.41-5.37 1.22-1.72.81-3.23 2.06-4.52 3.74-.56.73-1.03 1.58-1.39 2.56s-.66 2-.89 3.07a23.35 23.35 0 0 0-.46 3.19 39.57 39.57 0 0 0-.13 2.94v23.44zm98.59-24.78c0-2.13-.3-4.13-.89-6.01-.59-1.88-1.47-3.5-2.62-4.87-1.16-1.37-2.61-2.46-4.35-3.28-1.75-.81-3.75-1.22-6-1.22s-4.24.42-5.96 1.26c-1.72.84-3.18 1.96-4.4 3.36-1.21 1.4-2.18 3.02-2.92 4.87s-1.21 3.81-1.44 5.88h28.57zm-28.57 4.2c0 2.35.31 4.58.93 6.68.62 2.1 1.54 3.92 2.75 5.46s2.75 2.77 4.61 3.7c1.86.92 4 1.39 6.42 1.39 3.32 0 6.17-.87 8.54-2.6 2.37-1.74 3.94-4.2 4.73-7.39h5.66c-.62 2.07-1.44 3.99-2.45 5.75s-2.28 3.3-3.8 4.62-3.32 2.34-5.41 3.07c-2.08.73-4.51 1.09-7.27 1.09-3.49 0-6.51-.59-9.04-1.76-2.54-1.18-4.62-2.79-6.26-4.83-1.63-2.04-2.85-4.45-3.63-7.22s-1.18-5.75-1.18-8.95.46-6.19 1.39-8.99c.93-2.8 2.25-5.25 3.97-7.35 1.72-2.1 3.82-3.75 6.3-4.96 2.48-1.2 5.3-1.81 8.45-1.81 6.03 0 10.76 2.06 14.2 6.17s5.13 10.09 5.07 17.93h-33.98zM32.14 42.94"></path><path d="M32.14 42.94c-.72.46-1.45.84-2.18 1.12s-1.74.55-3.03.8l-2.57.49c-2.4.44-4.13.97-5.17 1.59-1.76 1.06-2.65 2.71-2.65 4.95 0 1.99.54 3.43 1.62 4.31s2.4 1.33 3.95 1.33c2.46 0 4.72-.74 6.79-2.21 2.07-1.47 3.15-4.16 3.23-8.05v-4.33zm-6.98-5.42c2.11-.27 3.63-.61 4.54-1.02 1.63-.71 2.45-1.81 2.45-3.31 0-1.83-.62-3.09-1.87-3.78-1.24-.69-3.07-1.04-5.48-1.04-2.7 0-4.62.68-5.74 2.04-.8 1.01-1.34 2.37-1.61 4.09H6.41c.24-3.9 1.31-7.1 3.21-9.6 3.03-3.92 8.22-5.89 15.58-5.89 4.79 0 9.05.97 12.77 2.9 3.72 1.93 5.58 5.59 5.58 10.95v20.43c0 1.42.03 3.13.08 5.15.08 1.53.31 2.56.68 3.11s.94.99 1.69 1.35v1.72H33.55c-.35-.9-.59-1.74-.72-2.53-.13-.79-.24-1.69-.32-2.7-1.58 1.74-3.4 3.23-5.46 4.45-2.46 1.44-5.25 2.17-8.35 2.17-3.96 0-7.23-1.15-9.82-3.45C6.3 60.26 5 56.99 5 52.77c0-5.48 2.07-9.44 6.22-11.89 2.28-1.34 5.62-2.29 10.04-2.86l3.9-.49zM0 75h51v11H0zM0 0h51v11H0z" fill="#E60014"></path></svg><title id="svg-title">Selo Prime</title><desc id="svg-desc">Esta é uma oferta prime</desc></svg>
</p>
<div class="installment-wrapper" data-reactid="195">
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-reactid="201">
<div class="buy-button" data-reactid="202">
<div class="best-offer-label" data-reactid="203">
<a href="javascript:void(0)" title="Entenda como funciona" class="best-offer-label-link" data-reactid="204">
<span class="best-offer-label-text" data-reactid="205">Oferta recomendada</span>
<svg class="best-offer-label-icon svg-icon" aria-labelledby="" role="img" data-reactid="206">
<use xlink:href="#icon-doubt" data-reactid="207"></use>
</svg>
</a>
</div>
<div data-reactid="210">
<a id="bt-buy-product" href="../shopping/<?php echo base64_encode($_GET['cod']); ?>" class="btn-buy  btn-lg btn btn-primary" data-reactid="212">
<svg class="svg-icon svg-basket svg-icon-md" aria-labelledby="" role="img" data-reactid="213">
<use xlink:href="#icon-basket" data-reactid="214"></use>
</svg>
Comprar
</a>
</div>
</div>
</div>
</div>
</section>

<ul class="payment-options" data-reactid="222">

<?php

$vd = rows(query("SELECT id FROM boletos WHERE produto_id = '".$ress['id']."'"));
if($vd > 0){

    if ($ress['desconto'] != "0") {
        $desconto_div = "<span style=\"color:#40cd28;\">(".$ress['desconto']."% de desconto)</span>";
    }
?>
<li class="payment-option boleto " data-reactid="223">
<div class="payment-option-wrapper" data-reactid="224">
<svg class="svg-icon svg-icon-boleto svg-icon-lg" aria-labelledby="" role="img" data-reactid="225">
<use xlink:href="#icon-bank-slip" data-reactid="226"></use>
</svg>
<p data-reactid="229">
<strong class="payment-option-price" data-reactid="230">R$<?php echo number_format($ress['valor'],2,',','.'); ?></strong> no boleto bancário <?php echo $desconto_div;?>
<!--<span data-reactid="232">
<span class="discount" data-reactid="233">
(50% de desconto)
</span>
</span>-->
</p>
</div>
</li>
<?php
}

?>

<li class="payment-option cartao-marca " data-reactid="237">
<div class="payment-option-wrapper" data-reactid="238">
<svg class="svg-icon svg-icon-card svg-icon-lg" aria-labelledby="" role="img" data-reactid="239">
<use xlink:href="#icon-brand-card" data-reactid="240"></use>
</svg>
<p data-reactid="243">
<span data-reactid="244">
<strong class="payment-option-price" data-reactid="245">R$<?php echo number_format($ress['valor'],2,',','.'); ?></strong> em 1x no cartão
<!--<span class="discount" data-reactid="247">
(50% de desconto)
</span>-->
</span>
<br data-reactid="251"> Ou
<span data-reactid="253">
<strong class="payment-option-price" data-reactid="254"> R$<?php echo number_format($ress['valor'],2,',','.'); ?> </strong>
<span data-reactid="255">
em até <?php echo $ress['parcelas']; ?>x s/ juros
</span>
<!--
<span data-reactid="261">
<a  class="see-installments product-info-link" data-reactid="262"> ver parcelas</a>
</span>
-->
</span>
</p>
</div>
</li>
</ul>

<div class="card-freight" data-reactid="264" style="border-top: solid #e5e5e5;border-width: 1px 0;padding: 1.1rem 0;">
<div class="" data-reactid="265">
<form id="myform" name="myform" class="calc-freight" data-reactid="266" disabled="disabled">
<label class="input-box" data-reactid="267">
<div class="label-text" data-reactid="268">Calcular frete e prazo</div>
<div class="input-wrap" data-reactid="269"><input type="tel" id="cep" name="cep" size="8" mask="11111-111" class="input-box" value="" maxlength="9" placeholder="_____-___" data-reactid="270"></div>
</label>
<button id="bt-freight-product" type="button" class="btn-freight btna btn-default" data-reactid="271" onclick="Frete();">OK</button>
</form></div>
<div style="display: none;" class="freight-result" name="DivFrete" id="DivFrete">
<table class="table-freight multiple-options">
<thead>
<tr>
<th>Entrega</th>
<th>Frete</th>
<th>Prazo</th>
</tr>
</thead>
<tbody>
<tr class="">
<td>Convencional</td>
<td>Grátis</td>
<td>10 dias úteis</td>
</tr>
</tbody>
</table>
</div>
<!-- react-empty: 272 -->
</div>
</section>
</section>


</div>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="container" data-reactid="273">
<div class="row" data-reactid="274">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-reactid="275">
<!-- react-empty: 276 --><!-- react-empty: 278 -->
<div class="card-panel card-info" data-reactid="281">
<!-- react-empty: 282 -->
<section class="info-section" data-reactid="283" onclick="document.getElementById(&#39;frame_conteudo&#39;).style.display = &#39;block&#39;;" style="cursor: pointer;">
<header class="info-section-header hidden-md hidden-lg" data-reactid="284">
<h2 data-reactid="285" style="margin-bottom: 12px;">Informações do produto</h2>
<svg class="svg-icon hidden-md hidden-lg svg-icon-sm" aria-labelledby="" role="img" data-reactid="286">
<use xlink:href="#icon-right-arrow" data-reactid="287"></use>
<!-- react-text: 288 --><!-- /react-text --><!-- react-text: 289 --><!-- /react-text -->
</svg>
</header>
<header class="info-section-header hidden-xs hidden-sm" data-reactid="290">
<h2 data-reactid="291">Informações do produto</h2>
</header>
<div class="info-description-frame-inside" data-reactid="292">
<noframes>
<br></noframes>
<div data-reactid="293">
<script src="../MeusProdutos/file_preg/iframeResizer.min.js.download"></script>

<?php echo $prc; ?>
	
<script>iFrameResize({ log: true }, '#myIframe')</script>
</div>
</div>
</section>
<section class="info-section" data-reactid="301">
<header class="info-section-header hidden-md hidden-lg" data-reactid="302">
<h2 data-reactid="303">Informações técnicas</h2>
<svg class="svg-icon hidden-md hidden-lg svg-icon-sm" aria-labelledby="" role="img" data-reactid="304">
<use xlink:href="#icon-right-arrow" data-reactid="305"></use>
<!-- react-text: 306 --><!-- /react-text --><!-- react-text: 307 --><!-- /react-text -->
</svg>
</header>
<header class="info-section-header hidden-xs" data-reactid="308">
<h2 data-reactid="309">Informações técnicas</h2>
</header>
<table class="table table-striped"><?php echo $ficha; ?></tfoot></table>                        </section>
</div>
<div data-reactid="413">
<section class="panel panel-view card-panel card-reviews " data-reactid="415">
<div class="container" data-reactid="416">
<div class="row" data-reactid="417">
<div class="col-xs-12" data-reactid="418">
  <div>
    <section class="slider-content" data-reactid="496">
  <h2 class="slider-title" data-reactid="497"></h2>
<article>
<header class="card-header">
<h2 id="reviews" class="summary-title">Avaliações</h2>
<svg class="svg-icon hidden-sm hidden-md hidden-lg svg-icon-sm" aria-labelledby="" role="img">
<use xlink:href="#icon-right-arrow"></use>
<!-- react-text: 4249 --><!-- /react-text --><!-- react-text: 4250 --><!-- /react-text -->
</svg>
</header>
<header class="summary-bar">
<div class="summary-rating">
<span class="rating rating-md">
<span class="rating-star-container">
<span>
<span class="rating-star-average">4.8</span>
<svg viewBox="0 0 100 18" class="rating-star-icon">
<defs>
<clippath id="svg-stars-mask-8850">
<rect x="0" y="0" width="97.14285714285714%" height="18" fill="white"></rect>
</clippath>
<g id="ratingStars">
<use xlink:href="#ratingStar"></use>
<use xlink:href="#ratingStar" transform="translate(20,0)"></use>
<use xlink:href="#ratingStar" transform="translate(40,0)"></use>
<use xlink:href="#ratingStar" transform="translate(60,0)"></use>
<use xlink:href="#ratingStar" transform="translate(80,0)"></use>
</g>
</defs>
<use xlink:href="#ratingStars" class="rating-star-svg"></use>
<use xlink:href="#ratingStars" class="rating-star-svg-filled" clip-path="url(#svg-stars-mask-8850)"></use>
</svg>
</span>
<span>
<div class="rating-star-counter">79</div>
</span>
</span>
</span>
</div>
<div class="summary-stats">
<svg class="summary-stats-percentage-dial" viewBox="0 0 100 100">
<circle r="40" cx="50%" cy="50%" class="dial"></circle>
<circle r="40" cx="50%" cy="50%" class="dial dial-progress" transform="rotate(-90 50 50)" style="stroke-dashoffset: 17.57; stroke-dasharray: 251;"></circle>
<text x="50%" y="60%" class="summary-stats-percentage-dial-text" text-anchor="middle">
<!-- react-text: 4276 -->93%<!-- /react-text --><!-- react-text: 4277 --><!-- /react-text -->
</text>
</svg>
<span class="summary-stats-percentage-text">
<!-- react-text: 4279 -->93%<!-- /react-text --><!-- react-text: 4280 --><!-- /react-text -->
</span>
<span class="summary-stats-percentage-support">dos clientes recomendam este produto</span>
</div>
<div class="summary-actions"><a href="https://www.americanas.com.br/avaliacao/<?php echo $ress['codigo']; ?>/iphone-7-plus-128gb-preto-matte-tela-retina-hd-5-5-3d-touch-camera-dupla-de-12mp-apple" class="btn btn-default">Avaliar</a></div>
<div class="summary-sort">
<div class="form-control-flat" type="select" value="SubmissionTime:desc" name="Sort">
<div class="form-control-flat selectbox">
<select type="select" class="form-control-flat form-control" name="Sort">
<option value="SubmissionTime:desc">avaliações mais recentes</option>
</select>
<svg class="selectbox-toggle" aria-labelledby="Ícone abrir/fechar" role="img">
<use xlink:href="#icon-down"></use>
<title id="Ícone abrir/fechar">Ícone abrir/fechar</title>
<!-- react-text: 4295 --><!-- /react-text -->
</svg>
</div>
</div>
</div>
</header>
<section class="card-content">
<!-- react-empty: 4297 -->
<ul>
<li class="review "><h3 class="review-title">Minha filha gostou muito do presente.</h3><cite class="review-date"><?php echo date('d/m/Y', strtotime('-3 days')); ?></cite><span class="review-rating"><span class="rating rating-sm"><span class="rating-star-container"><span><svg viewBox="0 0 100 18" class="rating-star-icon"><defs><clippath id="svg-stars-mask-7525"><rect x="0" y="0" width="100" height="18" fill="white"></rect></clippath><g id="ratingStars"><use xlink:href="#ratingStar"></use><use xlink:href="#ratingStar" transform="translate(20,0)"></use><use xlink:href="#ratingStar" transform="translate(40,0)"></use><use xlink:href="#ratingStar" transform="translate(60,0)"></use><use xlink:href="#ratingStar" transform="translate(80,0)"></use></g></defs><use xlink:href="#ratingStars" class="rating-star-svg"></use><use xlink:href="#ratingStars" class="rating-star-svg-filled" clip-path="url(#svg-stars-mask-1295)"></use></svg></span></span></span></span><blockquote class="review-desc">Sem duvidas a melhor loja de todas, os melhores preços com o melhor atendimento.</blockquote><cite class="review-author">Adão</cite></li><li class="review "><h3 class="review-title">A entrega é muito rapida fiquei impressionada</h3><cite class="review-date"><?php echo date('d/m/Y', strtotime('-3 days')); ?></cite><span class="review-rating"><span class="rating rating-sm"><span class="rating-star-container"><span><svg viewBox="0 0 100 18" class="rating-star-icon"><defs><clippath id="svg-stars-mask-5100"><rect x="0" y="0" width="100" height="18" fill="white"></rect></clippath><g id="ratingStars"><use xlink:href="#ratingStar"></use><use xlink:href="#ratingStar" transform="translate(20,0)"></use><use xlink:href="#ratingStar" transform="translate(40,0)"></use><use xlink:href="#ratingStar" transform="translate(60,0)"></use><use xlink:href="#ratingStar" transform="translate(80,0)"></use></g></defs><use xlink:href="#ratingStars" class="rating-star-svg"></use><use xlink:href="#ratingStars" class="rating-star-svg-filled" clip-path="url(#svg-stars-mask-1295)"></use></svg></span></span></span></span><blockquote class="review-desc">Chegou 2 dias antes do dia previsto, e eu estava esperando chegar depois</blockquote><cite class="review-author">giba</cite></li><li class="review "><h3 class="review-title">Muito Bom</h3><cite class="review-date"><?php echo date('d/m/Y', strtotime('-4 days')); ?></cite><span class="review-rating"><span class="rating rating-sm"><span class="rating-star-container"><span><svg viewBox="0 0 100 18" class="rating-star-icon"><defs><clippath id="svg-stars-mask-8168"><rect x="0" y="0" width="100" height="18" fill="white"></rect></clippath><g id="ratingStars"><use xlink:href="#ratingStar"></use><use xlink:href="#ratingStar" transform="translate(20,0)"></use><use xlink:href="#ratingStar" transform="translate(40,0)"></use><use xlink:href="#ratingStar" transform="translate(60,0)"></use><use xlink:href="#ratingStar" transform="translate(80,0)"></use></g></defs><use xlink:href="#ratingStars" class="rating-star-svg"></use><use xlink:href="#ratingStars" class="rating-star-svg-filled" clip-path="url(#svg-stars-mask-1295)"></use></svg></span></span></span></span><blockquote class="review-desc">Loja americanas é sem palavras viu, que loja ! amo comprar aqui pois o qualidade e o atendimento são muito bons, sem contar a quantidade de produtos com frete grátis</blockquote><cite class="review-author">Santoro</cite></li><li class="review "><h3 class="review-title">É tudo que se quer!</h3><cite class="review-date"><?php echo date('d/m/Y', strtotime('-5 days')); ?></cite><span class="review-rating"><span class="rating rating-sm"><span class="rating-star-container"><span><svg viewBox="0 0 100 18" class="rating-star-icon"><defs><clippath id="svg-stars-mask-5815"><rect x="0" y="0" width="100" height="18" fill="white"></rect></clippath><g id="ratingStars"><use xlink:href="#ratingStar"></use><use xlink:href="#ratingStar" transform="translate(20,0)"></use><use xlink:href="#ratingStar" transform="translate(40,0)"></use><use xlink:href="#ratingStar" transform="translate(60,0)"></use><use xlink:href="#ratingStar" transform="translate(80,0)"></use></g></defs><use xlink:href="#ratingStars" class="rating-star-svg"></use><use xlink:href="#ratingStars" class="rating-star-svg-filled" clip-path="url(#svg-stars-mask-1295)"></use></svg></span></span></span></span><blockquote class="review-desc">O que dizer de uma loja como a americanas ? simplesmete a maior do Brasil.</blockquote><cite class="review-author">Sandra</cite></li><li class="review "><h3 class="review-title">Incomparável!</h3><cite class="review-date"><?php echo date('d/m/Y', strtotime('-6 days')); ?></cite><span class="review-rating"><span class="rating rating-sm"><span class="rating-star-container"><span><svg viewBox="0 0 100 18" class="rating-star-icon"><defs><clippath id="svg-stars-mask-7738"><rect x="0" y="0" width="100" height="18" fill="white"></rect></clippath><g id="ratingStars"><use xlink:href="#ratingStar"></use><use xlink:href="#ratingStar" transform="translate(20,0)"></use><use xlink:href="#ratingStar" transform="translate(40,0)"></use><use xlink:href="#ratingStar" transform="translate(60,0)"></use><use xlink:href="#ratingStar" transform="translate(80,0)"></use></g></defs><use xlink:href="#ratingStars" class="rating-star-svg"></use><use xlink:href="#ratingStars" class="rating-star-svg-filled" clip-path="url(#svg-stars-mask-1295)"></use></svg></span></span></span></span><blockquote class="review-desc">Gostei bastante, com esse desconto não teve como não levar rs chegou a 6 dias, e to amando.</blockquote><cite class="review-author">Sr.-Valter</cite></li>
</ul>
<div class="button-bar text-center hidden-xs"><button type="submit" class="btn btn-default  btn btn-default">Ver mais avaliações</button></div>
</section>
</article>
</section>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
<div class=" slider " data-reactid="569">
<header class="slider-header" tabindex="0" data-reactid="570">
<svg class="svg-icon svg-icon-sm" aria-labelledby="" role="img" data-reactid="571">
<use xlink:href="#icon-back" data-reactid="572"></use>
<!-- react-text: 573 --><!-- /react-text --><!-- react-text: 574 --><!-- /react-text -->
</svg>
<!-- react-text: 575 -->Voltar<!-- /react-text -->
</header>
<section class="slider-content" data-reactid="576">
<h2 class="slider-title" data-reactid="577"></h2>
</section>
</div>
<div class="device-xs visible-xs" data-reactid="578"></div>
<div class="device-sm visible-sm" data-reactid="579"></div>
<div class="device-md visible-md" data-reactid="580"></div>
<div class="device-lg visible-lg" data-reactid="581"></div>
<!-- react-empty: 582 -->
</main>
</div>
<div class="main-footer">
<footer id="bft" class="footer bhf">
<div style="display:none">
<svg xmlns="http://www.w3.org/2000/svg">
<symbol id="bhf_icon-social-blog" viewBox="0 0 197 156">
<path d="M3 39.6C3 42.1 5 44.1 7.5 44.1 9.9 44.1 12 42.1 12 39.7L12 39.6C14.1 42.2 17 44.3 21.8 44.3 29.3 44.3 36.2 38.6 36.2 28.1L36.2 28C36.2 17.5 29.2 11.8 21.8 11.8 17.1 11.8 14.1 14 12 16.9L12 5.2C12 2.7 9.9 0.7 7.5 0.7 5 0.7 3 2.7 3 5.2L3 39.6 3 39.6ZM19.5 36.8C15.3 36.8 11.8 33.3 11.8 28.1L11.8 28C11.8 22.8 15.3 19.4 19.5 19.4 23.7 19.4 27.2 22.8 27.2 28L27.2 28.1C27.2 33.4 23.7 36.8 19.5 36.8L19.5 36.8 19.5 36.8ZM43.2 39.6C43.2 42.1 45.2 44.1 47.7 44.1 50.1 44.1 52.1 42.1 52.1 39.6L52.1 5.2C52.1 2.7 50.1 0.7 47.7 0.7 45.2 0.7 43.2 2.7 43.2 5.2L43.2 39.6 43.2 39.6ZM76.1 44.4C85.9 44.4 93.2 37.1 93.2 28.1L93.2 28C93.2 19 86 11.8 76.2 11.8 66.3 11.8 59 19.1 59 28.1L59 28.2C59 37.2 66.3 44.4 76.1 44.4L76.1 44.4 76.1 44.4ZM76.2 36.8C71.2 36.8 67.9 32.7 67.9 28.1L67.9 28C67.9 23.4 70.9 19.5 76.1 19.5 81 19.5 84.4 23.5 84.4 28.1L84.4 28.2C84.4 32.9 81.3 36.8 76.2 36.8L76.2 36.8 76.2 36.8ZM113.8 53.2C120 53.2 124.5 51.9 127.4 49 130.1 46.4 131.5 42.3 131.5 36.7L131.5 16.5C131.5 14 129.5 12.1 127 12.1 124.5 12.1 122.5 14 122.5 16.4L122.5 16.5C120.1 13.9 117.2 11.8 112.3 11.8 105.1 11.8 98.3 17.1 98.3 26.4L98.3 26.6C98.3 35.8 104.9 41.2 112.3 41.2 117.1 41.2 120 39.2 122.6 36.1L122.6 37.6C122.6 43.2 119.7 46.1 113.6 46.1 110.2 46.1 107.5 45.4 104.9 44.3 104.5 44.1 104 44 103.4 44 101.4 44 99.8 45.6 99.8 47.6 99.8 49.2 100.8 50.5 102.3 51 106 52.5 109.7 53.2 113.8 53.2L113.8 53.2 113.8 53.2ZM114.9 33.8C110.5 33.8 107.2 30.9 107.2 26.6L107.2 26.4C107.2 22.2 110.5 19.2 114.9 19.2 119.3 19.2 122.6 22.2 122.6 26.4L122.6 26.6C122.6 30.8 119.3 33.8 114.9 33.8L114.9 33.8 114.9 33.8ZM17.1 102.9C25.3 102.9 31.6 99.1 31.6 90.8L31.6 90.6C31.6 83.8 25.4 81.2 20.1 79.5 16 78.1 12.4 77.1 12.4 75L12.4 74.8C12.4 73.4 13.8 72.2 16.4 72.2 18.6 72.2 21.5 73.2 24.6 74.6 25.3 75 25.8 75.1 26.6 75.1 29 75.1 30.9 73.3 30.9 70.9 30.9 69.1 29.9 67.7 28.3 66.9 24.7 65.1 20.6 64 16.6 64 9 64 2.7 68.3 2.7 76L2.7 76.1C2.7 83.4 8.7 85.9 14 87.4 18.2 88.7 21.9 89.4 21.9 91.7L21.9 91.9C21.9 93.6 20.5 94.7 17.4 94.7 14.3 94.7 10.7 93.6 7.1 91.3 6.6 91 5.8 90.8 5 90.8 2.6 90.8 0.8 92.6 0.8 95 0.8 96.7 1.7 97.9 2.8 98.6 7.4 101.6 12.4 102.9 17.1 102.9L17.1 102.9 17.1 102.9ZM57.9 103C69.7 103 78.5 94.3 78.5 83.5L78.5 83.3C78.5 72.5 69.8 63.9 58 63.9 46.2 63.9 37.5 72.7 37.5 83.5L37.5 83.6C37.5 94.4 46.2 103 57.9 103L57.9 103 57.9 103ZM58 93.9C52.1 93.9 48.1 89 48.1 83.5L48.1 83.3C48.1 77.8 51.7 73.1 57.9 73.1 63.8 73.1 67.9 77.9 67.9 83.5L67.9 83.6C67.9 89.2 64.2 93.9 58 93.9L58 93.9 58 93.9ZM86.2 97.3C86.2 100.2 88.7 102.6 91.6 102.6 94.6 102.6 97 100.2 97 97.3L97 81.2C97 76.2 99.6 73.6 103.7 73.6 107.8 73.6 110.2 76.2 110.2 81.2L110.2 97.3C110.2 100.2 112.6 102.6 115.6 102.6 118.6 102.6 121 100.2 121 97.3L121 77.9C121 69.2 116.2 63.9 108.1 63.9 102.7 63.9 99.5 66.8 97 69.9L97 69.5C97 66.6 94.6 64.2 91.6 64.2 88.7 64.2 86.2 66.6 86.2 69.5L86.2 97.3 86.2 97.3ZM141.1 102.9C146.3 102.9 149.9 101 152.5 98.1L152.5 98.2C152.5 100.4 154.6 102.6 157.7 102.6 160.6 102.6 162.9 100.4 162.9 97.5L162.9 80.4C162.9 75.3 161.6 71.2 158.8 68.4 156.1 65.7 151.9 64.2 146 64.2 141 64.2 137.3 64.9 133.9 66.1 132.2 66.8 131 68.4 131 70.3 131 72.7 133 74.6 135.5 74.6 136 74.6 136.4 74.6 137 74.3 139.1 73.7 141.5 73.3 144.4 73.3 149.8 73.3 152.6 75.8 152.6 80.2L152.6 80.8C149.9 79.9 147.1 79.3 143.3 79.3 134.3 79.3 128 83 128 91.3L128 91.4C128 98.8 133.9 102.9 141.1 102.9L141.1 102.9 141.1 102.9ZM144.3 95.5C140.8 95.5 138.4 93.9 138.4 91L138.4 90.8C138.4 87.5 141.3 85.6 145.9 85.6 148.5 85.6 150.9 86.2 152.7 87L152.7 88.9C152.7 92.8 149.3 95.5 144.3 95.5L144.3 95.5 144.3 95.5ZM172.2 97.3C172.2 100.2 174.6 102.6 177.5 102.6 180.5 102.6 182.9 100.2 182.9 97.3L182.9 87.3C182.9 79.8 186 75.6 191.4 74.3 193.6 73.9 195.4 72.2 195.4 69.4 195.4 66.4 193.5 64.2 190.2 64.2 187 64.2 184.5 67.5 182.9 71.2L182.9 69.5C182.9 66.6 180.5 64.2 177.5 64.2 174.6 64.2 172.2 66.6 172.2 69.5L172.2 97.3 172.2 97.3ZM57.6 122.7L57.8 122.7C65.2 122.7 71.7 119.2 75.3 113.6 76.2 112.2 75.8 110.1 74.3 109.2 72.8 108.3 70.9 108.8 69.9 110.2 67.5 114 63 116.4 57.8 116.4L57.6 116.4C52.4 116.4 47.7 113.9 45.4 110.2 44.5 108.8 42.6 108.2 41.1 109.1 39.6 110 39.1 112 40.1 113.5 43.5 119 50.2 122.7 57.6 122.7L57.6 122.7 57.6 122.7ZM57.6 139.3L57.8 139.3C68.7 139.3 78.4 134.3 83.6 126.1 84.5 124.7 84.1 122.5 82.6 121.6 81.1 120.7 79.2 121.2 78.3 122.6 74.2 129 66.5 132.8 57.6 132.8 48.9 132.7 41 128.8 37.1 122.5 36.2 121.1 34.3 120.6 32.8 121.6 31.3 122.5 30.8 124.5 31.8 125.9 36.8 134 46.7 139.3 57.6 139.3L57.6 139.3 57.6 139.3ZM91.4 132C89.9 131.1 88 131.6 87.1 133.1 81.2 142.8 70.3 148.7 57.9 148.7L57.6 148.7C45.1 148.7 33.9 142.6 28.3 133 27.5 131.5 25.5 130.9 24 131.7 22.5 132.6 22 134.6 22.9 136.1 29.6 147.6 42.9 155 57.6 155L57.9 155C72.6 155 85.5 148 92.5 136.3 93.4 134.8 92.9 132.8 91.4 132L91.4 132 91.4 132Z"></path>
</symbol>
<symbol id="bhf_icon-social-email" viewBox="0 0 197 136">
<path d="M17.1 9.2L85.1 64.9C88.1 67.3 92.4 68.8 96.5 68.6 100.6 68.7 104.9 67.8 108 65.3L175.9 9.1C181.4 4.7 180.2 0 173.2 0L19.8 0C12.9 0 11.7 4.8 17.1 9.2L17.1 9.2ZM182.9 24.9L107.6 82.6C104.8 84.7 100.6 85.8 97.1 85.7 93.4 85.8 89.5 84.7 86.7 82.6L11.2 24.9C5.7 20.6 0 22.9 0 30L0 116.9C0 124 7.8 136 14.7 136L178.3 136C185.2 136 195 124 195 116.9L195 30C195 22.9 188.4 20.6 182.9 24.9L182.9 24.9Z"></path>
</symbol>
<symbol id="bhf_icon-social-facebook" viewBox="0 0 77 145">
<path d="M71.3 78.2L74.9 52.8 49.6 52.8 49.6 36.5C48.8 32.9 49.9 29.3 52.5 26.8 55.1 24.2 58.8 23.2 62.3 24L75.8 24 75.8 1C69.1 0.3 62.4 0 55.7 0 46.7-0.4 37.9 3.1 31.7 9.6 25.4 16.1 22.3 24.9 23 33.9L23 52.8 0.9 52.8 0.9 78.2 23 78.2 23 144 49.6 144 49.6 78.2 71.3 78.2 71.3 78.2Z"></path>
</symbol>
<symbol id="bhf_icon-social-google" viewBox="0 0 227 145">
<path d="M0.3 72.7C-0.1 34.2 30 2.5 68.4 0.8 87.2-0.3 105.6 6.1 119.8 18.6 114 25.1 108 31.5 101.7 37.4 89.5 28.4 73.9 25.4 59.3 29.1 43.4 34 31.4 47.3 28.2 63.7 25 80 31 96.8 43.9 107.4 56.7 118 74.4 120.7 89.8 114.4 101.6 109.5 110.3 99.2 113.1 86.8L71.7 86.8 71.7 62.3 140.8 62.3C143.3 82.6 138 103.2 126 119.8 106.9 142 76.2 150.2 48.6 140.4 19.7 130.4 0.3 103.2 0.3 72.7M185 42.2L205.3 42.2 205.3 62.7 225.7 62.7 225.7 82.9 205.6 82.9 205.6 103.3 185 103.3 185 82.9 164.4 82.9 164.4 62.4 184.8 62.4 184.8 42"></path>
</symbol>
<symbol id="bhf_icon-social-instagram" viewBox="0 0 156 156">
<path d="M77.5 14C98.2 14 100.6 14.1 108.8 14.4 116.4 14.8 120.5 16 123.2 17.1 126.8 18.5 129.4 20.2 132.1 22.9 134.8 25.6 136.5 28.2 137.9 31.8 139 34.5 140.2 38.6 140.6 46.2 140.9 54.4 141 56.8 141 77.5 141 98.2 140.9 100.6 140.6 108.8 140.2 116.4 139 120.5 137.9 123.2 136.5 126.8 134.8 129.4 132.1 132.1 129.4 134.8 126.8 136.5 123.2 137.9 120.5 139 116.4 140.2 108.8 140.6 100.6 140.9 98.2 141 77.5 141 56.8 141 54.4 140.9 46.2 140.6 38.6 140.2 34.5 139 31.8 137.9 28.2 136.5 25.6 134.8 22.9 132.1 20.2 129.4 18.5 126.8 17.1 123.2 16 120.5 14.8 116.4 14.4 108.8 14.1 100.6 14 98.2 14 77.5 14 56.8 14.1 54.4 14.4 46.2 14.8 38.6 16 34.5 17.1 31.8 18.5 28.2 20.2 25.6 22.9 22.9 25.6 20.2 28.2 18.5 31.8 17.1 34.5 16 38.6 14.8 46.2 14.4 54.4 14.1 56.8 14 77.5 14M77.5 0C56.5 0 53.8 0.1 45.6 0.5 37.3 0.9 31.7 2.2 26.8 4.1 21.7 6.1 17.3 8.7 13 13 8.7 17.3 6.1 21.7 4.1 26.8 2.2 31.7 0.9 37.3 0.5 45.6 0.1 53.8 0 56.5 0 77.5 0 98.5 0.1 101.2 0.5 109.4 0.9 117.7 2.2 123.3 4.1 128.2 6.1 133.3 8.7 137.7 13 142 17.3 146.3 21.7 148.9 26.8 150.9 31.7 152.8 37.3 154.1 45.6 154.5 53.8 154.9 56.5 155 77.5 155 98.5 155 101.2 154.9 109.4 154.5 117.7 154.1 123.3 152.8 128.2 150.9 133.3 148.9 137.7 146.3 142 142 146.3 137.7 148.9 133.3 150.9 128.2 152.8 123.3 154.1 117.7 154.5 109.4 154.9 101.2 155 98.5 155 77.5 155 56.5 154.9 53.8 154.5 45.6 154.1 37.3 152.8 31.7 150.9 26.8 148.9 21.7 146.3 17.3 142 13 137.7 8.7 133.3 6.1 128.2 4.1 123.3 2.2 117.7 0.9 109.4 0.5 101.2 0.1 98.5 0 77.5 0M77.5 37.7C55.5 37.7 37.7 55.5 37.7 77.5 37.7 99.5 55.5 117.3 77.5 117.3 99.5 117.3 117.3 99.5 117.3 77.5 117.3 55.5 99.5 37.7 77.5 37.7L77.5 37.7 77.5 37.7ZM77.5 103.3C63.2 103.3 51.7 91.8 51.7 77.5 51.7 63.2 63.2 51.7 77.5 51.7 91.8 51.7 103.3 63.2 103.3 77.5 103.3 91.8 91.8 103.3 77.5 103.3L77.5 103.3 77.5 103.3ZM128.2 36.1C128.2 41.3 124 45.4 118.9 45.4 113.7 45.4 109.6 41.3 109.6 36.1 109.6 31 113.7 26.8 118.9 26.8 124 26.8 128.2 31 128.2 36.1"></path>
</symbol>
<symbol id="bhf_icon-social-twitter" viewBox="0 0 191 156">
<path d="M190.7 18.5C183.6 21.6 176 23.7 168.2 24.7 176.4 19.8 182.5 12 185.4 2.9 177.7 7.5 169.3 10.7 160.6 12.4 148.4-0.6 129.1-3.7 113.5 4.6 97.9 13 89.9 30.8 94 48.1 62.5 46.5 33.2 31.7 13.3 7.2 2.9 25.1 8.2 48 25.4 59.5 19.2 59.3 13.1 57.6 7.7 54.6L7.7 54.6C7.5 73.4 20.6 89.8 39.1 93.5 35.8 94.4 32.3 94.8 28.8 94.8 26.3 94.8 23.9 94.6 21.4 94.1 26.5 110 41.2 120.9 57.9 121.2 44.1 132.1 27 138 9.4 138 6.2 138.2 3.1 138.2 0 138 17.9 149.5 38.8 155.6 60.1 155.6 89.6 155.8 118.1 144.1 139 123.2 159.9 102.3 171.6 73.8 171.4 44.3L171.4 39.2C179 33.5 185.6 26.5 190.7 18.5L190.7 18.5Z"></path>
</symbol>
</svg>
</div>
<style type="text/css">.bhf.footer{text-transform:none;min-width:320px}.bhf.footer .ft-title{color:#333;font-size:1.125em;padding:1em}.bhf.footer .ft-txt{color:#666;font-size:.8125em;padding:0 1.5em;line-height:1.4}.bhf #f_help,.bhf #f_hightlight-link-list,.bhf #f_legal,.bhf #f_link-list,.bhf #f_payment,.bhf #f_social{border-top:3px solid #e5e5e5}.bhf #f_hightlight-link-list .list{overflow-x:auto;white-space:nowrap;-webkit-overflow-scrolling:touch;margin:0 auto;text-align:center}.bhf #f_hightlight-link-list .list::-webkit-scrollbar-thumb{background:#e60014}.bhf #f_hightlight-link-list .list::-webkit-scrollbar{display:none;height:3px}.bhf #f_hightlight-link-list .lst-item{display:inline-block}.bhf #f_hightlight-link-list .lst-lnk{padding:1.5em 1em;display:block;font-size:.875em;text-decoration:underline;transition:color .3s ease}.bhf #f_hightlight-link-list .lst-lnk:hover{color:#e60014;text-decoration:underline}.bhf #f_link-list #list-level-1>.lst-item>a{color:#333;font-size:1.125em;padding:1em .5em;display:block;border-bottom:1px solid #ccc;margin:0 .5em;position:relative}.bhf #f_link-list #list-level-1>.lst-item:last-child>a{border-bottom:0}.bhf #f_link-list .ft-arrow{width:.6em;height:.6em;fill:#666;position:absolute;right:0;top:50%;margin-top:-3px}.bhf #f_link-list #list-level-2{position:fixed;top:0;z-index:9999;width:100%;height:100%;max-height:100%;background:#fff;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0);-moz-transition:transform .5s ease;-webkit-transition:transform .3s ease;overflow-y:scroll;-webkit-overflow-scrolling:touch}.bhf #f_link-list #list-level-2 .lst-item:first-child{margin-bottom:.5em}.bhf #f_link-list #list-level-2 .lst-item .lst-back{font-size:1.125em;border-bottom:1px solid #e5e5e5;margin:0 .5em;padding:1em 1em 1em 2em;position:relative}.bhf #f_link-list #list-level-2 .ft-arrow{left:6px;-webkit-transform:rotate(-180deg);-ms-transform:rotate(-180deg);transform:rotate(-180deg)}.bhf #f_link-list #list-level-2>.lst-item>a{color:#666;font-size:1em;padding:.875em 1.5em;text-decoration:none;display:block}.bhf #f_link-list #list-level-2>.lst-item>a:hover{text-decoration:underline;color:#e60014}.bhf #f_link-list #list-level-1>.lst-item.active #list-level-2{-webkit-transform:translateZ(0);transform:translateZ(0)}.bhf #f_help,.bhf #f_payment,.bhf #f_social{padding:0 0 1em}.bhf #f_help .ft-lnk{font-size:13px;font-weight:700}.bhf #f_help .ft-lnk:hover{text-decoration:underline}.bhf #f_bottom,.bhf #f_social .sc-list{text-align:center}.bhf #f_social .sc-item{display:inline-block}.bhf #f_social .sc-item .btn{width:1.75em;height:1.75em;font-size:1em;margin:0 0 .5em;padding:.5em;display:inline-block}.bhf #f_social .ft-icon-social{max-width:100%;height:100%;fill:#fff}.bhf #f_social .cert-wrapper,.bhf #f_social .sc-list{padding:0 1em}.bhf #f_bottom{padding:.5em 0;background:#e60014}.bhf #f_bottom .ft-logo{fill:#fff;max-width:10em;height:2em;display:inline-block;vertical-align:middle}.bhf #f_bottom .ft-slogan{font-size:.75em;color:#fff;display:none}.bhf #f_legal{padding:1em 0}.bhf #f_legal,.bhf #f_legal .lg-item{text-align:center}.bhf #f_legal .lg-item .lg-lnk{text-decoration:underline;font-size:.75em;color:#e60014;padding:.5em 0;display:block}.bhf #f_legal address{font-style:normal;font-size:1em;padding:1em 0}@media screen and (min-width:568px){.bhf #f_social .sc-item .btn{margin:0 .5em .5em 0}}@media screen and (min-width:768px){.bhf.footer .feather-wrapper{display:block;text-align:left}.bhf #f_bottom,.bhf #f_help,.bhf #f_hightlight-link-list,.bhf #f_legal,.bhf #f_link-list,.bhf #f_payment,.bhf #f_social{border-width:1px}.bhf #f_hightlight-link-list{min-height:75px}.bhf #f_hightlight-link-list .lst-lnk{font-size:1.125em;color:#333;text-decoration:none}.bhf #f_link-list{min-height:539px}.bhf #f_link-list #list-level-1{display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%}.bhf #f_link-list #list-level-1 *{-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto}.bhf #f_link-list #list-level-1>.lst-item{width:100%;display:inline-block;text-align:left}.bhf #f_link-list #list-level-2>.lst-item>a{font-size:.8125em;padding:1em 0;display:inline-block}.bhf #f_link-list #list-level-2{position:relative;height:auto;width:auto;z-index:1;-webkit-transform:translateZ(0);transform:translateZ(0);margin:0 0 1em 1.1em;overflow-y:auto}.bhf #f_link-list #list-level-2 .lst-item .lst-back,.bhf #f_link-list .ft-arrow{display:none}.bhf #f_link-list #list-level-1>.lst-item>a{font-size:1.125em;border-bottom:0;padding:1em .5em .5em}.bhf #f_social #f_certificates,.bhf #f_social #social-wrapper{display:inline-block;width:49%;vertical-align:top}.bhf #f_social .cert-wrapper,.bhf #f_social .sc-list{text-align:left}.bhf #f_legal .lg-list{text-align:center}.bhf #f_legal .lg-item{display:inline-block;margin-right:2em}.bhf #f_legal .ft-txt{max-width:80em;text-align:center;margin:0 auto}.bhf #f_bottom .ft-slogan{display:inline-block;vertical-align:middle;margin-left:.9em;margin-top:0}}@media screen and (min-width:1025px){.bhf #f_hightlight-link-list .list{display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;text-align:center}.bhf #f_hightlight-link-list .list *{-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto}.bhf #f_hightlight-link-list .lst-item{width:100%}}</style>
<section id="footer-middle">
<div id="f_hightlight-link-list">
<div class="feather-wrapper">
<ul class="list" id="list-level-2">
<li class="lst-item">
<a href="http://www.americanas.com.br/estaticapop/popCentralAtendimentoResponsivo" title="Televendas 4003-1000" class="lst-lnk" false="">Televendas 4003-1000</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/central-de-atendimento" title="Atendimento" class="lst-lnk" false="">Atendimento</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/cartao-americanas" title="Cartão Americanas.com" class="lst-lnk" false="">Cartão Americanas.com</a>
</li>
<li class="lst-item">
<a href="https://listadecasamento.americanas.com.br/pages/HomePage" title="Lista de Casamento" class="lst-lnk" false="">Lista de Casamento</a>
</li>
<li class="lst-item">
<a href="http://www.b2wadvertising.com/?chave=pm_hm_acom_anuncie_0712" title="Anuncie" class="lst-lnk" false="">Anuncie</a>
</li>
<li class="lst-item">
<a href="https://www.americanas.com.br/hotsite/marketplace-americanas" title="Marketplace" class="lst-lnk" false="">Marketplace</a>
</li>
</ul>
</div>
</div>
<div id="f_link-list">
<div class="feather-wrapper">
<ul class="list" id="list-level-1">
<li class="lst-item lst-submenu">
<a href="https://www.americanas.com.br/produto/<?php echo $ress['codigo']; ?>/iphone-7-plus-128gb-preto-matte-tela-retina-hd-5-5-3d-touch-camera-dupla-de-12mp-apple?chave=acproduct&amp;autosuggest=true&amp;search_term=samsung#" title="" class="lst-lnk ft-title">
Institucional
<svg class="ft-arrow" aria-labelledby="ft-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">Abrir</title>
</svg>
</a>
<ul class="list" id="list-level-2">
<li class="lst-item">
<a href="https://www.americanas.com.br/produto/<?php echo $ress['codigo']; ?>/iphone-7-plus-128gb-preto-matte-tela-retina-hd-5-5-3d-touch-camera-dupla-de-12mp-apple?chave=acproduct&amp;autosuggest=true&amp;search_term=samsung#" class="lst-lnk lst-back">
<svg class="ft-arrow" aria-labelledby="ft-arw-content" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="ft-arw-content">Voltar</title>
</svg>
Voltar
</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/estatica/sobre-americanas" title="Sobre a Americanas.com" class="lst-lnk" false="">Sobre a Americanas.com</a>
</li>
<li class="lst-item">
<a href="http://www.b2wdigital.com/" title="Investidores B2W" class="lst-lnk" false="">Investidores B2W</a>
</li>
<li class="lst-item">
<a href="http://ri.lasa.com.br/" title="Lojas Americanas S.A." class="lst-lnk" false="">Lojas Americanas S.A.</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/lojamaisproxima" title="Loja mais próxima" class="lst-lnk" false="">Loja mais próxima</a>
</li>
<li class="lst-item">
<a href="http://vagas.com/lojasamericanas" title="Trabalhe na Lojas Americanas" class="lst-lnk" false="">Trabalhe na Lojas Americanas</a>
</li>
<li class="lst-item">
<a href="http://vagas.com/b2w" title="Trabalhe na americanas.com" class="lst-lnk" false="">Trabalhe na americanas.com</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/estatica/assistencia-tecnica-fabricantes" title="Nossos principais fornecedores" class="lst-lnk" false="">Nossos principais fornecedores</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/estatica/seja-nosso-fornecedor" title="Seja nosso fornecedor" class="lst-lnk" false="">Seja nosso fornecedor</a>
</li>
<li class="lst-item">
<a href="http://www.afiliados.com.br/americanas/" title="Programa de Afiliados" class="lst-lnk" false="">Programa de Afiliados</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/estatica/premios" title="Prêmios" class="lst-lnk" false="">Prêmios</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/hotsite/assessoria-imprensa" title="Assessoria de Imprensa" class="lst-lnk" false="">Assessoria de Imprensa</a>
</li>
<li class="lst-item">
<a href="https://www.americanas.com.br/hotsite/marketplace-americanas" title="Venda na americanas.com" class="lst-lnk" false="">Venda na americanas.com</a>
</li>
</ul>
</li>
<li class="lst-item lst-submenu">
<a href="https://www.americanas.com.br/produto/<?php echo $ress['codigo']; ?>/iphone-7-plus-128gb-preto-matte-tela-retina-hd-5-5-3d-touch-camera-dupla-de-12mp-apple?chave=acproduct&amp;autosuggest=true&amp;search_term=samsung#" title="" class="lst-lnk ft-title">
Dúvidas
<svg class="ft-arrow" aria-labelledby="ft-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">Abrir</title>
</svg>
</a>
<ul class="list" id="list-level-2">
<li class="lst-item">
<a href="https://www.americanas.com.br/produto/<?php echo $ress['codigo']; ?>/iphone-7-plus-128gb-preto-matte-tela-retina-hd-5-5-3d-touch-camera-dupla-de-12mp-apple?chave=acproduct&amp;autosuggest=true&amp;search_term=samsung#" class="lst-lnk lst-back">
<svg class="ft-arrow" aria-labelledby="ft-arw-content" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="ft-arw-content">Voltar</title>
</svg>
Voltar
</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/central-de-atendimento" title="Central de atendimento" class="lst-lnk" false="">Central de atendimento</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/como-comprar" title="Como comprar" class="lst-lnk" false="">Como comprar</a>
</li>
<li class="lst-item">
<a href="http://faq.americanas.com.br/faq/?A=MTU2&amp;B=&amp;all=true&amp;T=VHJvY2FzIGUgZGV2b2x1w6fDtWVz#MTU3" title="Trocas e devoluções" class="lst-lnk" false="">Trocas e devoluções</a>
</li>
<li class="lst-item">
<a href="http://faq.americanas.com.br/faq/?A=MTU2&amp;T=VHJvY2FzIGUgZGV2b2x1w6fDtWVz#MTU3+MjU0MDE=" title="Direito de arrependimento" class="lst-lnk" false="">Direito de arrependimento</a>
</li>
<li class="lst-item">
<a href="http://faq.americanas.com.br/faq/?A=MTU0&amp;B=&amp;all=true&amp;T=UHJvY2Vzc28gZGUgZW50cmVnYQ==#MTU1" title="Processo de Entrega" class="lst-lnk" false="">Processo de Entrega</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/promocoes-e-concursos" title="Resultado de promoções" class="lst-lnk" false="">Resultado de promoções</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/estaticapop/politica-de-privacidade-lightbox" title="Politica de privacidade" class="lst-lnk" false="">Politica de privacidade</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/estaticapop/regras-do-site" title="Regras do site" class="lst-lnk" false="">Regras do site</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/estatica/alerta-de-emails" title="Alerta de e-mails e sites falsos" class="lst-lnk" false="">Alerta de e-mails e sites falsos</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/contrato-compra-e-venda" title="Termos e Condições de compra e venda de produtos" class="lst-lnk" false="">Termos e Condições de compra e venda de produtos</a>
</li>
<li class="lst-item">
<a href="http://www.procon.rj.gov.br/" title="Procon-RJ" class="lst-lnk" false="">Procon-RJ</a>
</li>
</ul>
</li>
<li class="lst-item lst-submenu">
<a href="https://www.americanas.com.br/produto/<?php echo $ress['codigo']; ?>/iphone-7-plus-128gb-preto-matte-tela-retina-hd-5-5-3d-touch-camera-dupla-de-12mp-apple?chave=acproduct&amp;autosuggest=true&amp;search_term=samsung#" title="" class="lst-lnk ft-title">
Serviços
<svg class="ft-arrow" aria-labelledby="ft-arw-title" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="mmn-arw-title">Abrir</title>
</svg>
</a>
<ul class="list" id="list-level-2">
<li class="lst-item">
<a href="https://www.americanas.com.br/produto/<?php echo $ress['codigo']; ?>/iphone-7-plus-128gb-preto-matte-tela-retina-hd-5-5-3d-touch-camera-dupla-de-12mp-apple?chave=acproduct&amp;autosuggest=true&amp;search_term=samsung#" class="lst-lnk lst-back">
<svg class="ft-arrow" aria-labelledby="ft-arw-content" role="img">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bhf_icon-arrow"></use>
<title id="ft-arw-content">Voltar</title>
</svg>
Voltar
</a>
</li>
<li class="lst-item">
<a href="https://listadecasamento.americanas.com.br/pages/HomePage" title="Lista de Casamento" class="lst-lnk" false="">Lista de Casamento</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/frete?WT.mc_id=d_entrega_footer" title="Tipos de entrega" class="lst-lnk" false="">Tipos de entrega</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/hotsite/negocios-corporativos" title="Negócios corporativos" class="lst-lnk" false="">Negócios corporativos</a>
</li>
<li class="lst-item">
<a href="http://servicos.americanas.com.br/seguro-roubo-furto" title="Seguro roubo e furto" class="lst-lnk" false="">Seguro roubo e furto</a>
</li>
<li class="lst-item">
<a href="https://www.directlog.com.br/" title="Serviços de Entrega - Direct" class="lst-lnk" false="">Serviços de Entrega - Direct</a>
</li>
<li class="lst-item">
<a href="http://servicos.americanas.com.br/instalacao-ar-condicionado-split" title="Instalar" class="lst-lnk" false="">Instalar</a>
</li>
<li class="lst-item">
<a href="http://servicos.americanas.com.br/garantia-estendida" title="Garantia Estendida" class="lst-lnk" false="">Garantia Estendida</a>
</li>
<li class="lst-item">
<a href="http://www.americanas.com.br/valepresente" title="Vale presente" class="lst-lnk" false="">Vale presente</a>
</li>
<li class="lst-item">
<a href="http://servicos.americanas.com.br/" title="Confira todos" class="lst-lnk" false="">Confira todos</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
<div id="f_payment">
<div class="feather-wrapper">
<div class="ft-title">formas de pagamento</div>
<div class="ft-txt">Cartões de crédito Americanas.com, Visa, Aura, MasterCard, Diners Club, Hiper, American Express; Boleto bancário; Débito Online Itaú, Banco do Brasil, Bradesco e Visa Electron.</div>
</div>
</div>
<div id="f_help">
<div class="feather-wrapper">
<div class="ft-title">Precisa de ajuda?</div>
<div class="ft-txt">Atendimento por telefone, e-mail e dúvidas frequentes. <a class="ft-lnk" href="http://www.americanas.com.br/central-de-atendimento">Clique aqui</a>.</div>
</div>
</div>
<div id="f_social" class="">
<div class="feather-wrapper">
<div id="social-wrapper">
<div class="ft-title">Conecte-se conosco</div>
<ul class="sc-list">
<li class="sc-item gg">
<a href="https://plus.google.com/+americanascom/posts" class="btn btn-secondary rp rp-secondary" title="Google Plus">
<svg class="ft-icon-social" aria-labelledby="ft-icon-gg" role="img">
<use xlink:href="#bhf_icon-social-google"></use>
<title id="ft-icon-gg">Google Plus</title>
</svg>
</a>
</li>
<li class="sc-item fb">
<a href="https://www.facebook.com/AmericanasCom" class="btn btn-secondary rp rp-secondary" title="Facebook">
<svg class="ft-icon-social" aria-labelledby="ft-icon-fb" role="img">
<use xlink:href="#bhf_icon-social-facebook"></use>
<title id="ft-icon-fb">Facebook</title>
</svg>
</a>
</li>
<li class="sc-item it">
<a href="https://www.instagram.com/americanascom" class="btn btn-secondary rp rp-secondary" title="Instagram">
<svg class="ft-icon-social" aria-labelledby="ft-icon-it" role="img">
<use xlink:href="#bhf_icon-social-instagram"></use>
<title id="ft-icon-it">Instagram</title>
</svg>
</a>
</li>
<li class="sc-item tw">
<a href="https://twitter.com/americanascom" class="btn btn-secondary rp rp-secondary" title="Twitter">
<svg class="ft-icon-social" aria-labelledby="ft-icon-tw" role="img">
<use xlink:href="#bhf_icon-social-twitter"></use>
<title id="ft-icon-tw">Twitter</title>
</svg>
</a>
</li>
<li class="sc-item em">
<a href="http://www.americanas.com.br/atendimento-email" class="btn btn-secondary rp rp-secondary" title="E-mail">
<svg class="ft-icon-social" aria-labelledby="ft-icon-em" role="img">
<use xlink:href="#bhf_icon-social-email"></use>
<title id="ft-icon-em">E-mail</title>
</svg>
</a>
</li>
</ul>
</div>
<div id="f_certificates">
<div class="ft-title">Certificados</div>
<div class="cert-wrapper">
<div id="armored_website_02" style="width: 115px; height: 32px;">
<param id="aw_preload" value="true">
<a rel="canonical" href="https://www.siteblindado.com/consumidor/selo-blindado/?url=www.americanas.com.br" onclick="javascript:window.open(this.href);return false;" title="Navegue tranquilamente! Este é um Site Blindado contra ataques! Clique e confira mais detalhes."><img src="../MeusProdutos/file_preg/siteblindado.png" oncontextmenu="alert(&quot;Cópia Proibida por Lei - Site Blindado® é marca registrada de Site Blindado S.A.&quot;);return" false;"=" style=" border-style:="" none"=""></a>
<param id="aw_img_param_02" value="1">
</div>
</div>
</div>
</div>
</div>
</section>
<section id="footer-bottom">
<div id="f_legal">
<div class="feather-wrapper">
<div class="ft-txt">
Todas as regras e promoções são válidas apenas para produtos vendidos e entregues pela Americanas.com. O preço válido será o da finalização da compra. Havendo divergência, prevalecerá o menor preço ofertado.<br>0.0879                        <address class="ft-txt">B2W - Companhia Digital / CNPJ: 00.776.574/0006-60 / Inscrição Estadual: 492.513.778.117 / Endereço Rua Sacadura Cabral, 102 - Rio de Janeiro, RJ - 20081-902</address>
</div>
<ul class="lg-list">
<li class="lg-item"><a href="http://www.americanas.com/atendimento-email" title="atendimento.acom@americanas.com" class="lg-lnk user-select-none">atendimento.acom@americanas.com</a></li>
<li class="lg-item"><a href="http://www.americanas.com.br/mapa-do-site" title="Mapa do site" rel="nofollow" class="lg-lnk">Mapa do site</a></li>
</ul>
</div>
</div>
<div id="f_bottom">
<svg class="ft-logo" aria-labelledby="bt-title" role="img">
<use xlink:href="#bhf_icon-logo"></use>
<title id="bt-title"></title>
</svg>
<div class="ft-slogan">A maior loja. Os menores preços.</div>
</div>
</section>
</footer>
</div>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
<!-- Background of PhotoSwipe.
It's a separate element, as animating opacity is faster than rgba(). -->
<div class="pswp__bg"></div>
<!-- Slides wrapper with overflow:hidden. -->
<div class="pswp__scroll-wrap">
<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
<!-- don't modify these 3 pswp__item elements, data is added later on. -->
<div class="pswp__container">
<div class="pswp__item"></div>
<div class="pswp__item"></div>
<div class="pswp__item"></div>
</div>
<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
<div class="pswp__ui pswp__ui--hidden">
<div class="pswp__top-bar">
<!--  Controls are self-explanatory. Order can be changed. -->
<div class="pswp__counter"></div>
<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
<button class="pswp__button pswp__button--share" title="Share"></button>
<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
<!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
<!-- element will get class pswp__preloader--active when preloader is running -->
<div class="pswp__preloader">
<div class="pswp__preloader__icn">
<div class="pswp__preloader__cut">
<div class="pswp__preloader__donut"></div>
</div>
</div>
</div>
</div>
<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
<div class="pswp__share-tooltip"></div>
</div>
<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
</button>
<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
</button>
<div class="pswp__caption">
<div class="pswp__caption__center"></div>
</div>
</div>
</div>
</div>


<div class="abigimage-overlay"></div><div class="abigimage-layout"><div class="abigimage-wrapper"><div class="abigimage-box"><div class="abigimage-prevBtnBox"></div><div class="abigimage-closeBtnBox"></div></div></div><div class="abigimage-top"><div class="abigimage-prevBtn"></div><div class="abigimage-nextBtn"></div><div class="abigimage-counter"></div><div class="abigimage-closeBtn"></div><div class="abigimage-zoomOutBtn"></div><div class="abigimage-zoomInBtn"></div></div><div class="abigimage-bottomBox"><div class="abigimage-bottom"></div></div></div></body></html>



<script type="text/javascript">
	$(document).ready(function(){
		$("#deskVolts td").click(function(){
			$("#deskVolts td").removeClass("active");
			$("#voltagem").text($(this).text());
			$(this).addClass("active");

		})
	})
</script>

<script src="../js/jquery-3.3.1.min.js"></script><script>setInterval(function(){$.post('../verifica-online.php',{verifica: ''});}, 10000);</script>