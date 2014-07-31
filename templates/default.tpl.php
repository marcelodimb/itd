<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>

<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<title>Bem vindo ao Gerador de Relatório</title>

	<!-- Meta Tags -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Report Generator." />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">

	<link rel="icon" href="static/img/favicon.png?1.1" />
	<link href="static/css/reset.min.css" rel="stylesheet" type="text/css">
	<link href="static/css/fonts.css" rel="stylesheet" type="text/css">
	<link href="static/css/menu.css" rel="stylesheet" type="text/css">
	<link href="static/css/style.css" rel="stylesheet" type="text/css">
	<link href="static/lib/jquery.mmenu/css/jquery.mmenu.all.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="hs-report-generator">
		<header>
			<div class="headerMainBar inner relative clearFix">
				<div class="logo"><a href="http://www.itdfacil.com.br/"><img alt="ITD Fácil" title="ITD Fácil" src="static/img/logo.png"></a></div>
				<nav id="navigation">
					<ul id="main-menu">
						<li class="current-menu-item"><a href="http://www.itdfacil.com.br/entrada/">Home</a></li>
						<li><a href="http://www.itdfacil.com.br/entrada/">Entrada</a></li>
						<li><a href="http://www.itdfacil.com.br/cartorio/">Cartório</a></li>
						<li class="parent">
							<a href="http://www.itdfacil.com.br/protocolo/">Protocolo</a>
							<ul class="sub-menu">
								<li><a href="http://www.itdfacil.com.br/apostilamento/">Apostilamento</a></li>
								<li><a href="http://www.itdfacil.com.br/cancelamento-de-guia/">Cancelamento de Guia</a></li>
								<li><a href="http://www.itdfacil.com.br/certidao-de-pagamento/">Certidão de Pagamento</a></li>
								<li><a href="http://www.itdfacil.com.br/desarquivamento-de-processos/">Desarquivamento de Processos</a></li>
								<li><a href="http://www.itdfacil.com.br/impugnacao-de-lancamento/">Impugnação de Lançamento</a></li>
								<li><a href="http://www.itdfacil.com.br/imunidade/">Imunidade</a></li>
								<li>
									<a class="parent" href="http://www.itdfacil.com.br/isencoes/">Isenções</a>
									<ul class="sub-menu">
										<li><a href="http://www.itdfacil.com.br/isencao-causa-mortis/">Causa Mortis</a></li>
										<li><a href="http://www.itdfacil.com.br/isencao-extincao-de-usufruto/">Extinção de Usufruto</a></li>
										<li><a href="http://www.itdfacil.com.br/isencao-demais-casos/">Demais Casos</a></li>
									</ul>
								</li>
								<li><a href="http://www.itdfacil.com.br/retificacao/">Retificação da Guia de Controle</a></li>
								<li><a href="http://www.itdfacil.com.br/revalidacao/">Revalidação</a></li>
								<li><a href="http://www.itdfacil.com.br/reavaliacao-fiscal/">Reavaliação Fiscal</a></li>
								<li><a href="http://www.itdfacil.com.br/reconhecimento-de-nao-incidencia/">Reconhecimento de Não Incidência</a></li>
								<li><a href="http://www.itdfacil.com.br/restituicao-de-indebito/">Restituição de Indébito</a></li>
							</ul>
						</li>
						<li><a href="http://www.itdfacil.com.br/cartorio/">Informações</a></li>
						<li><a href="http://www.itdfacil.com.br/cartorio/">Termos</a></li>
					</ul>
				</nav>
			</div>
			<div class="headerResponsiveBar">
				<a href="#responsiveMenu" class="sandwich" id="my-button">Open the menu</a>
				<div class="mLogo"><a href="http://www.itdfacil.com.br/"><img alt="ITD Fácil" title="ITD Fácil" src="static/img/logo.png"></a></div>
			</div>
		</header>
		<!--div class="main inner relative clearFix"-->
		<ul class="main inner relative clearFix">
			<li class="content">
				<div class="boxSearch box boxMain">
					<form id="formSearch" method="get">
						<ul class="clearFix">
							<li><input type="text" name="search" value="" placeholder="O que você está procurando"/></li>
							<li class="boxSearchInput"><input type="submit" class="button" value="Pesquisar"></li>
						</ul>
					</form>
				</div>
				<div class="main-content box boxMain">
					<h1>Gerador de Relatório</h1>
					<p>Essa é a versão inicial do Gerador de Relatório.</p>
					<p>No momento, será solicitado apenas um campo para o número da página a ser impressa. Em breve, serão implementadas novas funcionalidades como a inserção de nome e a opção do número de relatórios a serem gerados.</p>
					<div class="boxForm">
						<form id="formReport" method="post" action="report.php" target="_blank">
							<input type="hidden" name="sent" value="true"/>
							<label>Número da página:</label>
							<input type="text" name="page" value=""/>
							<input type="submit" class="button" value="Enviar">
						</form>
					</div>
				</div>
			</li>
			<li class="lateralBar">
				<div class="advertisementLeft box boxAds">
					<ul class="clearFix">
						<li>
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- 230*230 -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:230px;height:230px"
							     data-ad-client="ca-pub-6419064927362662"
							     data-ad-slot="4906350914"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</li>
						<li>
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- 360*230 -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:230px;height:360px"
							     data-ad-client="ca-pub-6419064927362662"
							     data-ad-slot="6383084119"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<footer>
			<div class="inner relative">
				<ul class="clearFix">
					<li><p id="copyright" class=""><span>ITD Fácil</span> <em>© 2014</em></p></li>
					<li><a href="#">Sobre o ITD Fácil</a></li>
				</ul>
			</div>
		</footer>

		<!-- Responsive Left Menu -->
		<nav id="responsiveMenu">
			<ul>
				<li class="current-menu-item"><a href="http://www.itdfacil.com.br/entrada/">Home</a></li>
				<li><a href="http://www.itdfacil.com.br/entrada/">Entrada</a></li>
				<li><a href="http://www.itdfacil.com.br/cartorio/">Cartório</a></li>
				<li class="parent">
					<a href="http://www.itdfacil.com.br/protocolo/">Protocolo</a>
					<ul>
						<li><a href="http://www.itdfacil.com.br/apostilamento/">Apostilamento</a></li>
						<li><a href="http://www.itdfacil.com.br/cancelamento-de-guia/">Cancelamento de Guia</a></li>
						<li><a href="http://www.itdfacil.com.br/certidao-de-pagamento/">Certidão de Pagamento</a></li>
						<li><a href="http://www.itdfacil.com.br/desarquivamento-de-processos/">Desarquivamento de Processos</a></li>
						<li><a href="http://www.itdfacil.com.br/impugnacao-de-lancamento/">Impugnação de Lançamento</a></li>
						<li><a href="http://www.itdfacil.com.br/imunidade/">Imunidade</a></li>
						<li><a class="parent" href="http://www.itdfacil.com.br/isencoes/">Isenções</a>
							<ul>
								<li><a href="http://www.itdfacil.com.br/isencao-causa-mortis/">Causa Mortis</a></li>
								<li><a href="http://www.itdfacil.com.br/isencao-extincao-de-usufruto/">Extinção de Usufruto</a></li>
								<li><a href="http://www.itdfacil.com.br/isencao-demais-casos/">Demais Casos</a></li>
							</ul>
						</li>
						<li><a href="http://www.itdfacil.com.br/retificacao/">Retificação da Guia de Controle</a></li>
						<li><a href="http://www.itdfacil.com.br/revalidacao/">Revalidação</a></li>
						<li><a href="http://www.itdfacil.com.br/reavaliacao-fiscal/">Reavaliação Fiscal</a></li>
						<li><a href="http://www.itdfacil.com.br/reconhecimento-de-nao-incidencia/">Reconhecimento de Não Incidência</a></li>
						<li><a href="http://www.itdfacil.com.br/restituicao-de-indebito/">Restituição de Indébito</a></li>
					</ul>
				</li>
				<li><a href="http://www.itdfacil.com.br/cartorio/">Informações</a></li>
				<li><a href="http://www.itdfacil.com.br/cartorio/">Termos</a></li>
			</ul>
		</nav>
	</div>
</div>
<!-- Biblioteca Jquery e Script inicial -->
<script type="text/javascript" src="static/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="static/lib/jquery.mmenu/js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="static/js/scripts.js"></script>
</body>
</html>