<?php
get_header(); ?>

<div id="content">
	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h1 class="small azul"><div class="animated bounceIn">Sobre a FRISTAR</div></h1>
					<p>A Fristar Ar Condicionado, foi fundada em setembro de 2015.<br>
						Foi através de um trabalho sério, dedicado e com um atendimento diferenciado que conquistou seu espaçõ no mercado, ampliando sua carteira de clientes e os fidelizando.</p>
					<p>Hoje é reconhecida por sua excelência na prestação de serviços pois investe em produtos de alta qualidade, visando sempre inovar e criar novas formas de atender e satisfazer as necessidades de seus clientes, visando o conforto e o bem-estar.</p>
					<p>Os seus serviços estão direcionados a instalação de ar condicionado e manutenção em geral, com a qualidade e garantia necessária para atender todos os tipos de consumidores, seja industrial ou residencial aonde a ética, honestidade, caráter, profissionalismo e responsabilidade ambiental, fazem parte do nosso cotidiano equacionando um diferencial no mercado de refrigeração e oferecendo o que há de melhor em climatização.</p>
					<ul>
						<li>Manutenção Preventiva</li>
						<li>Manutenção Corretiva</li>
						<li>Higienização e Limpeza</li>
						<li>PMOC</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."contato"; ?>" class="btn-confira btn-azul">CONTATO</a>				
				</div>
				<div class="col-md-6">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/ar-condicionado.jpg"; ?>"/>
				</div>
			</div>	
		</div>	
	</section>

	<section id="maps">
		<div class="container">
			<div class="row text-left detalhes-maps">
				<div class="col-md-12">
					<h2 class="branco">Nossa localização</h2>
					<p>
						Rua Capitão Eugênio de Macedo, 353 - Itaim Paulista - São Paulo - SP
					</p>
					<p>
						<strong>Telefone.: </strong>11 2561-5068 | 11 98359-1900  <strong>Email.: </strong>carolina@fristar.com.br
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.0745529549595!2d-46.53579738443502!3d-23.637500970294973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce42b832ebfd53%3A0x6ba710aa9626a2ea!2sR.+Silveira+Martins%2C+160+-+Santa+Teresinha%2C+Santo+Andr%C3%A9+-+SP%2C+09210-520!5e0!3m2!1spt-BR!2sbr!4v1470075254982" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
