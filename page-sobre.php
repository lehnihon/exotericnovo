<?php
get_header(); ?>

<div id="content">

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h1 class="small animated bounceIn">Portal dos Terapeutas de São Paulo</h1>
					<p>O Portal dos Terapeutas de São Paulo não é uma clínica ou agência, mas sim, 
					um portal de divulgação e propaganda dos terapeutas de São Paulo.</p>
					
					<p>O Portal dos Terapeutas se trata de um núcleo de profissionais liberais 
					qualificados que locam nossos espaços e divulgam nesse portal.</p>
					<p>Os profissionais do Portal dos Terapeutas SP são especializados em massagens 
					terapêuticas, massagens tântricas, Mix Massagem, Shiatsu, Quick Massagem, 
					Acumputura e todos os tipos de massagem.</p>

					<p>Também oferecem cursos de massagens, massagens corporativas, Quiropraxia, 
					Yoga, banhos de ofurô e serviços de estética e beleza.</p>
					<p>O Portal dos Terapeutas também oferece o serviço de locação de salas para 
					massoterapeutas de São Paulo.</p>
					<p>Você poderá agendar os seus horários de acordo com a sua necessidade.
					Ao locar as nossas salas, você terá um local requintado e aconchegante para 
					atender aos seus clientes e dispor de toda a nossa infraestrutura.</p>

					

					
					<br>
					<a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>" class="btn-confira margin-responsivo">contato</a>
				</div>
				<div class="col-md-6 text-left">
					<div class="row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Portal dos Terapeutas 05.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Portal dos Terapeutas 06.jpg"; ?>"/>
						</div>
					</div>
					<div style="margin-top:25px" class="row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Portal dos Terapeutas 07.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Portal dos Terapeutas 08.jpg"; ?>"/>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</section>

	<section id="maps">
		<div class="container">
			<div class="row text-left detalhes-maps">
				<div class="col-md-12">
					<h2>Nossa localização</h2>
					<p>
						Rua Silveira Martins, 160 - Conjunto 02 - Praça da Sé - São Paulo - SP
					</p>
					<p>
						<strong>Telefone.: </strong>11 3203-1478 | 11 98937-2110
						<strong>Email.: </strong>contato@portaldosterapeutassp.com.br
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.4494996124085!2d-46.632920985442624!3d-23.55229438468739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce590747f2413b%3A0x2e7d616150104a8f!2sR.+Silveira+Martins%2C+160+-+S%C3%A9%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1481463621545" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
