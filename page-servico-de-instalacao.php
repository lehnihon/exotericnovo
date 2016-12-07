<?php
get_header(); ?>

<div id="content">
	<section id="servicos-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small azul"><div class="animated bounceIn">Serviço de Instalação</div></h1>
					<h3 class="azul">de Ar-Condicionado</h3><br>
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servico-instalacao.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p><strong>A Fristar oferece o serviço de instalação de Ar Condicionado e todos os tipos de equipamentos condicionadores de ar. </strong></p>
					<p>Realizamos vistoria no local de instalação para o correto dimensionamento do tipo de equipamento e da capacidade necessária para atendimento de acordo com as particularidades de aplicação.</p>
					<p>A Fristar analisa os projetos de ar condicionado de todos os tipos e faz a execução da instalação em residências, comércios e indústrias. Tudo de forma organizada, limpa e através 
					de profissionais especialistas que apresentará a melhor solução para sua necessidade.</p>
					<p>A Instalação de Ar Condicionado é executada por técnicos qualificados da Fristar, e apesar de parecer simples, é extremamente complexa, e se a instalação de Ar Condicioando 
					não for executada por uma equipe qualificada, com certeza trará dores de cabeça aos consumidores. </p>
					<p>Se estiver em dúvida da capacidade ou modelo ideal de Ar Condicionado, entre em contato com os especialistas da Fristar. </p>
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
