<?php
get_header(); ?>

<div id="content">
	<section id="servicos-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small azul"><div class="animated bounceIn">Manutenção Corretiva</div></h1>
					<h3 class="azul">de Ar-Condicionado</h3><br>
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/manutencao-corretiva.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p>A manutenção corretiva do Ar condicionado tem a função de fazer todos os tipos de consertos e reparos nos equipamentos de ar condicionado, no próprio local ou em nossa oficina de reparo.</p>
					<p>Se o seu equipamento de ar condicionado já não tem mais o mesmo rendimento ou parou de funcionar, através de nossa manutenção corretiva conseguimos identificar o problema do equipamento, corrigí-lo e deixar seu equipamento novamente funcionando.</p>
					<p>Realizamos visita para orçamento e damos a tranquilidade que somente uma empresa como a Fristar pode dar.</p>
					<p>Todos nossos serviços de conserto acompanham a garantia da Fristar, dependendo da manutenção do ar condicionado que foi realizada.</p>
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
