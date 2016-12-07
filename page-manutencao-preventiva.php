<?php
get_header(); ?>

<div id="content">
	<section id="servicos-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small azul"><div class="animated bounceIn">Manutenção Preventiva</div></h1>
					<h3 class="azul">Limpeza e Higienização</h3><br>
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/manutencao-preventiva.jpg"; ?>"/>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-left">
					<p><strong>Porque realizar a manutenção e limpeza periódica do ar-condicionado?</strong></p>
					<p>A manutenção preventiva do ar-condicionado, uma prática que vai além da limpeza dos filtros feita a cada quinze dias, deve ser realizada periódicamente por um especialista.</p>
					<p><strong>Os benefícios da manutenção preventiva do ar-condicionado</strong></p>
					<p><strong>Prevenção de panes</strong><br>
						Como ar-condicionado fica em ambiente fechado, está exposto ao acúmulo de poeira que pode obstruir os filtros, as turbinas e as serpentinas diminuindo a eficácia da máquina.<br>
						A manutenção preventiva do ar-condicionado previne esses problemas.</p>
					<p><strong>Sua saúde</strong><br>
						A poeira acumulada no aparelho volta para o ar a medida em que o condicionador é usado. Ela pode conter fungos, bactérias e outros poluentes causando problemas alérgicos, além de dores de cabeça e pele ressecada</p>
					<p><strong>Maior tempo de vida útil do ar-condicionado</strong><br>
						Além do acúmulo de poeira que diminui a vida útil do ar-condicionado, os aparelhos sem manutenção, mesmo se estarem sendo usados com frequência ou não, podem gerar enferrujamento e corrosão das peças, principalmente em cidades litorâneas</p>
					<p><strong>Economia para o seu bolso</strong><br>
						Quando o ar-condicionado está sujo, ele acaba forçando mais seu compressor para esfriar o ambiente e isso gera maior gastos de energia.</p>
					<p>A manutenção preventiva do ar-condicionado impede que você tenha gastos elevados ao se deparar com um problema maior do que o esperado em seu aparelho. É melhor economizar com prevenção do que com um conserto.</p>
					<p>Você tem motivos de sobra para investir na manutenção preventiva do seu ar-condicionado. Agende agora mesmo a visita de um especialista da Fristar e previna problemas futuros.</p>
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
