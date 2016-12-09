<?php
get_header(); ?>

<div id="content">
	<div id="terapeutas-cat">
		<div class="container">
			<h1 class="small">Massagens</h1>
			<?php
			$args = array( 'posts_per_page' => 8, 'offset'=> 0, 'orderby' => 'rand', 'post_type' => 'produto', 'categoria_produto' => 'massagens'  );
			$query = new WP_Query( $args );
			if ( $query->have_posts() ): ?>
				fasfsa
				<div class="row">	
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md-3">
						<?php if ( has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<?php the_post_thumbnail('home-thumb', array(
									'class' => "e-claro img-responsive",
								)); ?>
							</a>
						<?php endif; ?>
						<h4><?php the_title(); ?></h4>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn-saiba-mais">CONFIRA</a>
					</div>
					<?php if($query->current_post == 3): ?>
						</div><br><div class="row">
					<?php endif; ?>		
				<?php endwhile; ?>										
				</div>
			<?php endif; ?>
		</div>
		<?php get_template_part( 'template-parts/redes-bot'); ?>
	</div>
</div>

<?php get_footer(); ?>