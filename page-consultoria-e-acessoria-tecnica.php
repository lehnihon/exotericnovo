<?php
get_header(); ?>

<div id="content">
	<section id="servicos-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small azul"><div class="animated bounceIn">Consultoria, Acessoria e</div></h1>
					<h3 class="azul">Supervisão Técnica</h3><br>
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/supervisao.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p>Tão importante quanto ter os projetos em mãos e executar manutenções de maneira periódica, é executá-los de forma correta. Daí a necessidade do acompanhamento e controle 
da execução por uma equipe especializada.</p>
					<p>Por isso, a Fristar Ar Condicionado realiza consultorias e assessoriasconstantes. Supervisionando e acompanhando a evolução do ambiente onde nossos serviços são prestados.</p>
					<p>Procuramos prevenir acidentes, aprimorar informações e orientar os nossos clientes sobre possíveis melhorias para a sua empresa. Dar toda tranquilidade no que se refere à 
qualidade técnica, através de adequação, acompanhamento e avaliação de conformidades de projeto e esclarecimento das dúvidas surgidas.</p>
					<p>Por esses motivos, a Fristar Ar Condicionado oferece os serviços de Consultoria, Assessoria e Supervisão Técnica.</p>
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
