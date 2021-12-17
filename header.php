<?php /*
Theme Name: SINCO Engenharia
Theme URI: 
Description: SINCO Engenharia
Author: Estúdio RBianco
Author URI: https://www.estudiorbianco.com
Version: 1.0 - 12/2015
*/?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/icones/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/icones/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/icones/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/icones/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/icones/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/icones/safari-pinned-tab.svg" color="#ac101d">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="theme-color" content="#ffffff">
	<?php if(is_single() || is_page()){ ?>
	<title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
	<?php } else { ?>
		<title><?php bloginfo('name'); ?></title>
	<?php } ?>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/pure-min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/base-min.css">
	<!--[if lte IE 8]>
    	<link rel="stylesheet" href="css/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
	    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/grids-responsive-min.css">
	<!--<![endif]-->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.theme.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.transitions.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/nivo-lightbox.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/themes/default/default.css" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

	<style>
		/* nav#submenu-fixo .bloco-submenu-secoes {
			position: relative;
		}
		nav#submenu-fixo {
			height: auto;
		} */
	</style>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-96708856-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-9PVKTYMWCE"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-9PVKTYMWCE');
	</script>
	<?php wp_head(); ?>

		<style>
			h1, h2, h3, h4, h5, h6, a, p, li, input, textarea, legend, select, strong, td, th{
				font-family: 'Martel Sans', sans-serif!important;
				line-height: 1.5;
			}
			.title-box h1, .title-box h2{
				font-size: 22px!important;
			}
			#owl-empreendimentos .owl-item {
				height: 640px;
			}
			nav#submenu-sobre li a {
				padding: 5px 2em;
			}
			footer .copyright p, footer .copyright a {
				font-size: 11px;
				color: #969696;
				margin: 0;
				text-decoration: none;
			}
			#contato .localizacao>div p {
				color: #aaa;
				font-size: 13px;
				font-weight: 400;
				margin-top: 5px;
				margin-bottom: 14px;
			}
			#categoria .item .desc p {
				height: 65px;
			}
		</style>

</head>
<body>
<!--
<div id="loader">
	<div class="fullcenter">
	<span class="loader"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/logo-sinco-loading.png" class="logo-sinco"></span>
	<p>Carregando...</p>
	</div>
</div>
-->
	<header>
		<div class="container">
			<div class="pure-g custom-wrapper" id="menu">
				<div class="pure-u-1 pure-u-md-4-24">
					<div class="pure-menu">
						<a href="<?php bloginfo('url'); ?>" id="logo" class="pure-menu-heading custom-brand pure-menu-link">SINCO</a>
						<a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-20-24">
					<div class="pure-menu pure-menu-horizontal custom-can-transform">
					    <ul class="pure-menu-list pure-u-md-19-24 pure-u-lg-19-24 pure-u-1">
					    	<li class="pure-menu-item onlymobile"><a href="<?php bloginfo('url'); ?>" class="pure-menu-link">Home</a></li>
					    	
					        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover <?php if(is_page('sobre-a-sinco')){ ?>pure-menu-selected<?php } ?>">
					        	<a href="<?php bloginfo('url'); ?>/sobre-a-sinco" class="pure-menu-link">Sobre nós</a>
								<ul class="pure-menu-children">
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#nossa-historia" class="pure-menu-link">Nossa história</a></li>
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#diferenciais" class="pure-menu-link">Diferenciais</a></li>
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#missao-valores" class="pure-menu-link">Missão e valores</a></li>
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#cidade-sinco" class="pure-menu-link">Cidade Sinco</a></li>
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#responsabilidade" class="pure-menu-link">Responsabilidade socioambiental</a></li>
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#video" class="pure-menu-link">Vídeo institucional</a></li>
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#novidades" class="pure-menu-link">Novidades</a></li>
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#certificacoes" class="pure-menu-link">Certificações</a></li>
									
									<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/sobre-a-sinco#parceiros" class="pure-menu-link">Parceiros</a></li>
								</ul>
						    </li>
						    <li class="pure-menu-item pure-menu-selected"><a href="<?php bloginfo('stylesheet_directory'); ?>/35anos/35-anos.html" class="pure-menu-link">35 Anos</a></li>
							<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover onlymobile engenhariatopmobile"><a href="#" class="pure-menu-link">Engenharia <i class="fa fa-angle-down"></i></a></li>
							<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover onlymobile engenhariatopitem"><a href="<?php bloginfo('url'); ?>/engenharia/obras-em-andamento" class="pure-menu-link mobilesubtop"><i class="fa fa-angle-right"></i> Obras em andamento</a></li>
							<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover onlymobile engenhariatopitem"><a href="<?php bloginfo('url'); ?>/engenharia/obras-realizadas" class="pure-menu-link mobilesubtop"><i class="fa fa-angle-right"></i> Obras realizadas</a></li>
						    <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover pure-u-0 <?php if(is_category('engenharia')||in_category('engenharia')&&!is_home()&&!is_page()&&!is_search()&&!is_category('incorporadora')){ ?>pure-menu-selected<?php } ?>">
						        	<a href="#" class="pure-menu-link">Engenharia</a>
						        	<ul class="pure-menu-children">
						        		<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/engenharia/obras-em-andamento" class="pure-menu-link">Obras em andamento</a></li>
						        		<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/engenharia/obras-realizadas" class="pure-menu-link">Obras realizadas</a></li>
						        	</ul>
									<!-- <ul class="pure-menu-children">
										<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/engenharia/residenciais" class="pure-menu-link">Residencial</a></li>
										<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/engenharia/condominios-horizontais" class="pure-menu-link">Condomínios horizontais</a></li>
										<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/engenharia/comerciais" class="pure-menu-link">Comerciais</a></li>
										<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/engenharia/industriais" class="pure-menu-link">Industriais</a></li>
										<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/engenharia/hotelaria" class="pure-menu-link">Hotelaria</a></li>
										<li class="pure-menu-item"><a href="<?php bloginfo('url'); ?>/engenharia/educacional" class="pure-menu-link">Educacional</a></li>
									</ul> -->
						    </li>
						    <li class="pure-menu-item <?php if(is_category('incorporadora')&&!is_home()&&!is_page()&&!is_search()){ ?>pure-menu-selected<?php } ?>">
						        	<a href="<?php bloginfo('url'); ?>/incorporadora" class="pure-menu-link">Incorporadora</a>
						    </li>
						    <li class="pure-menu-item <?php if(is_page('pos-obra')){ ?>pure-menu-selected<?php } ?>"><a href="<?php bloginfo('url'); ?>/pos-obra" class="pure-menu-link">Pós Obra</a></li>
						    <li class="pure-menu-item socialtop">
										<a href="https://www.instagram.com/sinco_engenharia/" title="Instagram" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/instagram.png" alt="Instagram"></a>
										</a>
										<a href="https://www.facebook.com/sincoengenharia/" title="Facebook" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/facebook.png" alt="Facebook"></a>
										</a>
										<a href="https://br.linkedin.com/company/sincoengenharia" title="LinkedIn" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/linkedin.png" alt="LinkedIn"></a>
										</a>
									</li>
<!-- 						    <li class="pure-menu-item"><a href="https://parcerias.sincoengenharia.com.br/" class="pure-menu-link" style="color:#d8161a;font-weight: bold;" target="_blank">Portal do corretor</a></li>
 -->						</ul>
					    <form id="busca" class="pure-form pure-u-1 pure-u-1 pure-u-md-5-24 pure-u-lg-5-24" action="<?php bloginfo('home'); ?>/" method="get">
	    					<fieldset>
	    						<input type="text" placeholder="Busca Rápida" class="pure-u-4-5" name="s" id="s" value="<?php the_search_query(); ?>">
	    						<button type="submit" class="pure-button bgvermelho"><i class="fa fa-search"></i></button>
	    					</fieldset>
	    				</form>

					</div>

				</div>
			</div>
		</div>
	</header>