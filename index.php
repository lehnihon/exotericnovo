<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<div class="col-md-12">
					<?php putRevSlider( "banner-index" ) ?>
				</div>
			</div><br><br>
		</div>
	</section>
	<section class="servicos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small animated bounceIn">Massagens</h1>
				</div>
			</div><br>
			<div class="row">
			<?php
			$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'orderby' => 'rand'  );

			$myposts = get_posts( $args );
			$i = 0;
			foreach ( $myposts as $post ) : setup_postdata( $post );
			?>
				<div class="col-md-3 text-left">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-claro img-responsive",
							)); ?>
						</a>
					<?php endif; ?>
					<h4><?php the_title(); ?></h4>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn-saiba-mais">saiba mais ></a>
				</div>
			<?php 
			endforeach; 
			wp_reset_postdata();
			?>
			</div>
		</div>
	</section>

	<section class="servicosb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Terapeutas</h2>
				</div>
			</div><br>
			<?php
			$args = array( 'posts_per_page' => 12, 'offset'=> 0, 'orderby' => 'rand'  );

			$myposts = get_posts( $args );
			$i = 0;
			foreach ( $myposts as $post ) : setup_postdata( $post );
			?>
				<?php
				if($i % 4 == 0):
				?>
					<div class="row">
				<?php endif ?>
				<div class="col-md-3 text-left">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-claro img-responsive",
							)); ?>
						</a>
					<?php endif; ?>
					<h4><?php the_title(); ?></h4>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn-saiba-mais">saiba mais ></a>
				</div>
	            <?php 
	            $i++;
	            if($i % 4 == 0): 
	            ?>
					</div><br><br>
				<?php endif ?>
			<?php 
			endforeach; 
			wp_reset_postdata();
			?>
		</div>		
	</section>

	<section class="servicos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Estética e Beleza</h2>
				</div>
			</div><br>
			<div class="row">
			<?php
			$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'orderby' => 'rand'  );

			$myposts = get_posts( $args );
			$i = 0;
			foreach ( $myposts as $post ) : setup_postdata( $post );
			?>
				<div class="col-md-3 text-left">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-claro img-responsive",
							)); ?>
						</a>
					<?php endif; ?>
					<h4><?php the_title(); ?></h4>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>" class="btn-saiba-mais">saiba mais ></a>
				</div>
			<?php 
			endforeach; 
			wp_reset_postdata();
			?>
			</div>
		</div>
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h2>Portal dos Terapeutas de São Paulo</h2><br>
					<p>O Portal dos Terapeutas de São Paulo não é uma clínica ou agência, mas sim, 
					um portal de divulgação e propaganda dos terapeutas de São Paulo.</p>
					<p>
						O Portal dos Terapeutas se trata de um núcleo de profissionais liberais 
					qualificados que locam nossos espaços e divulgam nesse portal.
					</p>
					<p>
						Os profissionais do Portal dos Terapeutas SP são especializados em massagens 
					terapêuticas, massagens tântricas, Mix Massagem, Shiatsu, Quick Massagem, 
					Acumputura e todos os tipos de massagem.
					</p>
					<p>
						Também oferecem cursos de massagens, massagens corporativas, Quiropraxia, 
					Yoga, banhos de ofurô e serviços de estética e beleza.
					</p>
					<p>
						O Portal dos Terapeutas também oferece o serviço de locação de salas para 
					massoterapeutas de São Paulo.
					</p>
					<p>
						Você poderá agendar os seus horários de acordo com a sua necessidade.
					Ao locar as nossas salas, você terá um local requintado e aconchegante para 
					atender aos seus clientes e dispor de toda a nossa infraestrutura.
					</p><br>
					<a href="<?php echo esc_url( home_url( '/' ) )."sobre"; ?>" class="btn-confira margin-responsivo">CONFIRA</a>
				</div>
				<div class="col-md-6 text-left">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/ar-condicionado.jpg"; ?>"/>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.886412271463!2d-46.40424858551352!3d-23.500600465235326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce638221e3bf09%3A0xc096822a20507e28!2sRua+Capit%C3%A3o+Eugenio+de+Macedo%2C+353+-+Vila+Silva+Teles%2C+S%C3%A3o+Paulo+-+SP%2C+08110-150!5e0!3m2!1spt-BR!2sbr!4v1478214412715" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
