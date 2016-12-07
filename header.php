<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-6">
						<span>Atendimento: <strong>11 2561-5068</strong></span> 
						<span style="margin-left: 10px">WhatsApp.: <strong>11 95373-9510</strong></span>
						<ul class="redes_sociais_header">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href="https://www.instagram.com/FristarAr/"></a></li>
							<li class="twitter"><a target="_blank" href="https://twitter.com/FristarAr"></a></li>
							<li class="facebook"><a target="_blank" href="https://www.facebook.com/Fristar.arcondicionado"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav class="princ">
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" /></a>
					</div>
					<div class="col-md-8 col-md-offset-1">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
							<li><a href="<?php echo home_url( '/' ); ?>">início</a></li
							><li><a href="<?php echo home_url( '/' )."sobre"; ?>">sobre</a></li
							><li><a href="<?php echo home_url( '/' )."servicos"; ?>">terapeutas</a></li
							><li><a href="<?php echo home_url( '/' )."calculadora-btus"; ?>">locação de salas</a></li
							><li><a href="<?php echo home_url( '/' )."contato"; ?>">anúncie</a></li
							><li><a href="<?php echo home_url( '/' )."contato"; ?>">fale conosco</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">fale conosco</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">anúncie</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/calculadora-btus' ).""; ?>">locação de salas</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/servicos' ).""; ?>">terapeutas</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."sobre"; ?>">sobre</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">início</a></div>
						</div>
					</div>					
				</div>
			</div>
		</nav>
		<nav class="aux">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
							<li><a href="<?php echo home_url( '/' ); ?>">início</a></li
							><li><a href="<?php echo home_url( '/' )."sobre"; ?>">sobre</a></li
							><li><a href="<?php echo home_url( '/' )."servicos"; ?>">terapeutas</a></li
							><li><a href="<?php echo home_url( '/' )."calculadora-btus"; ?>">locação de salas</a></li
							><li><a href="<?php echo home_url( '/' )."contato"; ?>">anúncie</a></li
							><li><a href="<?php echo home_url( '/' )."contato"; ?>">fale conosco</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">fale conosco</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">anúncie</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/calculadora-btus' ).""; ?>">locação de salas</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/servicos' ).""; ?>">terapeutas</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."sobre"; ?>">sobre</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">início</a></div>
						</div>
					</div>					
				</div>
			</div>
		</nav>
	</section>


