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
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Porta dos Terapeutas.jpg"; ?>" />
<?php wp_head(); ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70607501-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-70607501-1');
</script>
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
							<li class="youtube"><a target="_blank" href="https://www.facebook.com/Portal-dos-Terapeutas-1651854558170816/"></a></li>
							<li class="instagram"><a target="_blank" href="#"></a></li>
							<li class="twitter"><a target="_blank" href="#"></a></li>
							<li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav class="princ">
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="img-responsive e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" /></a>
					</div>
					<div class="col-md-8 col-md-offset-1">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
							<li><a href="<?php echo home_url( '/' ); ?>">início</a></li
							><li><a href="<?php echo home_url( '/sobre' ).""; ?>">sobre</a></li
							><li class="drop-container"><a href="<?php echo home_url( '/' )."terapeutas"; ?>">terapeutas</a></li
							><li><a href="<?php echo home_url( '/' )."locacao-de-salas"; ?>">locação de salas</a></li
							><li><a href="<?php echo home_url( '/' )."anuncie-conosco"; ?>">anúncie</a></li
							><li><a href="<?php echo home_url( '/' )."contato"; ?>">fale conosco</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">fale conosco</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' )."anuncie-conosco"; ?>">anúncie</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/locacao-de-salas' ).""; ?>">locação de salas</a></div>
							<div class="menu-op drop-container drop-event"><a href="<?php echo home_url( '/terapeutas' ).""; ?>">terapeutas</a>
								<div class="drop-sub">>
									<div><a href="<?php echo home_url( '/' )."masculino"; ?>">masculino</a></div>
									<div><a href="<?php echo home_url( '/' )."feminino"; ?>">feminino</a></div>
									<div><a href="<?php echo home_url( '/' )."trans"; ?>">trans</a></div>
								</div>
							</div>
							<div class="menu-op"><a href="<?php echo home_url( '/sobre' ).""; ?>">sobre</a></div>
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
							<?php 
							$taxonomy = get_terms(array('taxonomy' => 'categoria_produto'));
							foreach($taxonomy as $tax):
							?>
								<li><a href="<?php echo home_url( '/' )."categoria_produto/".$tax->slug; ?>"><?php echo $tax->name; ?></a></li>
							<?php	
							endforeach;
							?>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<?php 
							$taxonomy = get_terms(array('taxonomy' => 'categoria_produto'));
							foreach($taxonomy as $tax):
							?>
								<div class="menu-op"><a href="<?php echo home_url( '/' )."categoria_produto/".$tax->slug; ?>"><?php echo $tax->name; ?></a></div>
							<?php	
							endforeach;
							?>
						</div>
					</div>					
				</div>
			</div>
		</nav>
	</section>


