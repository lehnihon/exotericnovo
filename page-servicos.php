<?php
get_header(); ?>

<div id="content">
	<section id="servicos">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-corretiva"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-corretiva.jpg"; ?>"/></a>
					<p>A manutenção corretiva do Ar Condicionado tem a função de fazer todos os tipos de consertos e reparos nos equipamentos de ar condicionado.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-corretiva"; ?>" class="btn-confira">CONFIRA</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-preventiva"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-higienizacao.jpg"; ?>"/></a>
					<p>A Higienização e Limpeza do Ar Condicionado é uma prática que vai além da limpeza dos filtros e deve ser realizada periódicamente.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-preventiva"; ?>" class="btn-confira">CONFIRA</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."servico-de-instalacao"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-manutencao.jpg"; ?>"/></a>
					<p>Analisamos os projetos de Ar Condicionado de todos os tipos e fazemos a execução da instalação em residências, comércios e indústrias. </p>
					<a href="<?php echo esc_url( home_url( '/' ) )."servico-de-instalacao"; ?>" class="btn-confira">CONFIRA</a>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."consultoria-e-acessoria-tecnica"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-consultoria.jpg"; ?>"/></a>
					<p>Realizamos consultorias e assessorias constantes,supervisionando a evolução do ambiente onde nossos serviços são prestados.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."consultoria-e-acessoria-tecnica"; ?>" class="btn-confira">CONFIRA</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."elaboracao-de-projetos"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-projetos.jpg"; ?>"/></a>
					<p>Buscamos em nossos projetos de climatização sempre atender todas as necessidades de nossos clientes e parceiros.  </p>
					<a href="<?php echo esc_url( home_url( '/' ) )."elaboracao-de-projetos"; ?>" class="btn-confira">CONFIRA</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."plano-de-manutencao-operacao-controle"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-plano.jpg"; ?>"/></a>
					<p>O Plano de Manutenção Operação e Controle, busca garantir a qualidade do ambiente e preservar a saúde das pessoas.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."plano-de-manutencao-operacao-controle"; ?>" class="btn-confira">CONFIRA</a>
				</div>
			</div>
		</div>		
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
