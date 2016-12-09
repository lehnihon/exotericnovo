<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="small"><div class="animated bounceIn">Anúncie no Portal dos Terapeutas</div></h1>
		<h4>Nossa equipe de atendimento está esperando seu contato!</h4>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>
				</div>
				<div class="col-md-6 text-left ">
					<div class="quadro">
						<p>
							<strong>Email</strong>
							contato@portaldosterapeutassp.com.br
						</p>
						<p>
							<strong>Telefone</strong>
							11 3203-1478  |  11 98937-2110
						</p>
						<p>
							<strong>Endereço</strong>
							Rua Silveira Martins, 160 - Conjunto 02 - Praça da Sé São Paulo - SP
						</p>
						<p>
							Após o preenchimento do formulário e do nosso contato, nos envie até 10 fotos.
						</p>
						<p>
							<strong>Não aceitamos fotos nuas, de lingerie ou ensaio sensual.</strong>
						</p>
						<p>Para sua credibilidade e qualidade do Portal dos Terapeutas, 
as fotos que você enviar devem ter resolução mínima de 
600px X 600px. </p>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
