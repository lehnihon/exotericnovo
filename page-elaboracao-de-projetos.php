<?php
get_header(); ?>

<div id="content">
	<section id="servicos-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small azul"><div class="animated bounceIn">Elaboração de</div></h1>
					<h3 class="azul">Projetos de Climatização</h3><br>
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/projetos.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p>Nós da Fristar Ar Condicionado, realizamos os orçamentos com uma equipe multidisciplinar, formada por engenheiros, técnicos e administradores. Sempre buscamos trabalhar de forma unificada.</p>
					<p>Buscamos em nossos projetos de climatização sempre atender todas as necessidades de nossos clientes e parceiros. </p>
					<p>Procurando com patibilizar todas as opções disponíveis no mercado em prol do conforto, desempenho e economia das instalações, otimizando desta forma asinstalações e tornando a execução das mesmas tecnicamente viáveis e ecologicamente corretas, atendendo assim o conceito de sustentabilidade.</p>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>" class="btn-confira btn-azul">Fale com um Especialista</a>
				</div>
			</div>
		</div>		
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
