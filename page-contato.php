<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="small"><div class="animated bounceIn">Fale Conosco</div></h1>
		<h4>Envie sua mensagem, te respondemos o mais breve possível.</h4>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 8 ); } ?>
				</div>
				<div class="col-md-6 text-left ">
					<br>
					<div class="videoWrapperb">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.4494996124085!2d-46.632920985442624!3d-23.55229438468739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce590747f2413b%3A0x2e7d616150104a8f!2sR.+Silveira+Martins%2C+160+-+S%C3%A9%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1481463621545" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
					<div class="quadro">
						<p>
							<strong>Email</strong>
							contato@portaldosterapeutassp.com.br
						</p>
						<p>
							<strong>Telefone</strong>
							11 3203-1478  |  11 3105-5158  |  11 97696-9630
						</p>
						<p>
							<strong>Endereço</strong>
							Rua Silveira Martins, 160 - Conjunto 02 <br>Praça da Sé São Paulo - SP
						</p>

					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
