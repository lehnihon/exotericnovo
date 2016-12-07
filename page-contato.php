<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="azul small"><div class="animated bounceIn">Contato</div></h1>
		<h3 class="azul">Entre em contato com a Fristar</h3>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
				</div>
				<div class="col-md-6 text-left ">
					<br>
					<div class="videoWrapperb">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.886412271463!2d-46.40424858551352!3d-23.500600465235326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce638221e3bf09%3A0xc096822a20507e28!2sRua+Capit%C3%A3o+Eugenio+de+Macedo%2C+353+-+Vila+Silva+Teles%2C+S%C3%A3o+Paulo+-+SP%2C+08110-150!5e0!3m2!1spt-BR!2sbr!4v1478214412715" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>					</div>
					<div class="quadro">
					<p>
						Rua Capitão Eugênio de Macedo, 353 - Itaim Paulista - São Paulo - SP
					</p>
					<p>
						<strong>Telefone.: </strong>11 2561-5068 | 11 98359-1900 
						<strong>WhatsApp.: </strong>11 94944-3706
						<strong>Email.: </strong>assistencia@fristar.com.br						
					</p>

					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
