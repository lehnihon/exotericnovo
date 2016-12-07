<?php
get_header(); ?>

<div id="content">
	<section id="servicos-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small azul"><div class="animated bounceIn">Calculadora de BUTs</div></h1>
					<h3 class="azul">Como fazer o cálculo de BUTs</h3><br>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-10 text-right">
							Área do ambiente em m²
						</div>
						<div class="col-md-2">
							<input type="text" class="input-contato area form-control">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-10 text-right">
							Quantidade de pessoas no ambiente
						</div>
						<div class="col-md-2">
							<input type="text" class="input-contato pessoas form-control">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-10 text-right">
							Quantidade de aparelhos que irradiem calor(TV, lâmpada, computador, etc)
						</div>
						<div class="col-md-2">
							<input type="text" class="input-contato aparelhos form-control">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-10 text-right">
							Quantidade de paredes para oeste(paredes que recebem o sol da tarde)
						</div>
						<div class="col-md-2">
							<input type="text" class="input-contato paredes form-control">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-10 text-right">
							Quantidade de vidros para oeste(vidros que recebem o sol da tarde)
						</div>
						<div class="col-md-2">
							<input type="text" class="input-contato vidros form-control">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-6 col-md-offset-6 text-right">
							<input type="button" class="btn-enviar calculadora" value="Calcular">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-12 text-right azul">
							Carga térmica necessária para esse ambiente:  <span class="carga-total"></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-left">
					<br><br>
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/ar-btu.jpg"; ?>"/>
				</div>
			</div><br><br><br>
			<div class="row">
				<div class="col-md-12">
					<a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>" class="btn-confira btn-azul">Fale com um Especialista</a>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					Obs.: As informações acima podem variar dependendo de diversos fatores, como sol, eletrônicos, pessoas entre outros. 
					Para um cálculo ideial de ar condicionado, solicite uma visita técnica de um profissional da Fristar.					
				</div>
			</div>
		</div>		
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
