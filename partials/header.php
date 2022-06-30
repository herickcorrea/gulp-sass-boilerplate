<?php header('Content-type: text/html; charset=utf-8'); ?>
<!doctype html>
<html amp lang="pt-br">
<head>
	<title><?php echo $settings['title']; ?></title>

	<link rel="icon" href="<?php echo $app['static']; ?>images/optimized/favicon-transparent-1.png" sizes="512x512" />
	
	<link rel="canonical" href="<?php echo $app['static'].'/'.urlRoutes()['page-name']; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $app['static']; ?>/css/template.min.css">

	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta name="robots" content="noindex,follow"/>
	
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $settings['title']; ?>" />
	<meta property="og:description" content="<?php echo $settings['description']; ?>" />
	<meta property="og:url" content="https://herickcorrea.com.br/<?php echo $settings['url']; ?>/" />
	<meta property="og:site_name" content="Comparadores Webitcoin" />
	<meta property="og:image" content="<?php echo $app['static']; ?>/images/optimized/favicon-transparent-1.png" />
	<meta property="og:image:secure_url" content="<?php echo $app['static']; ?>/images/optimized/favicon-transparent-1.png" />
	<meta property="og:image:width" content="520" />
	<meta property="og:image:height" content="520" />

	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="<?php echo $settings['description']; ?>" />
	<meta name="twitter:title" content="<?php echo $settings['title']; ?>" />
	<meta name="twitter:image" content="<?php echo $app['static']; ?>/images/optimized/favicon-transparent-1.png" />
</head>
<body class="<?php echo 'current-page-'.urlRoutes()['page-name']; ?>" data-path="/app/">
<header id="mainHeader">
	<div id="siteBar" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-xl-4 col-sm-3 col-md-4">
					<h1>
						<a href="/" title="Página Inicial">
							<span>Título do Projeto</span>
						</a>
					</h1>
					<h2>Descrição do Projeto</h2>
				</div>
				
				<hr>
				
				<div class="col-xs-6 col-xl-8 col-sm-9 col-md-8">
					<nav class="mainMenu">
						<h2 class="hide">Menu do Projeto</h2>
						<div class="wrapMenu">
							<?php
								mainMenu(array(
									'precos' => array(
										'title' => 'Site do desenvolvedor Herick Correa',
										'label' => '<strong>Site do desenvolvedor</strong> Herick Correa',
										'icon' => '',
										'url' => 'https://herickcorrea.com.br',
									),
									'taxas' => array(
										'title' => 'Portfolio Herick Correa',
										'label' => '<strong>Portfolio</strong> Herick Correa',
										'icon' => '',
										'url' => 'https://herickcorrea.com.br/portfolio/portfolio-web-designer/',
									),
									'acessos' => array(
										'title' => 'Contato Herick Correa',
										'label' => '<strong>Contato</strong> Herick Correa',
										'icon' => '',
										'url' => 'mailto:contato@herickcorrea.com.br',
									)
								));
							?>
						</div>
					</nav>
				</div>

				<hr>
				
			</div>
		</div>
	</div>
</header>