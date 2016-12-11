<?php
get_header(); ?>

<div id="content">
	<div id="terapeutas-cat">
		<div class="container">
			<h1 class="small"><?php single_cat_title(); ?></h1><br>
			<?php
			$cat_ID = get_queried_object()->term_id;
			$args = array( 'posts_per_page' => 12, 'offset'=> 0, 'orderby' => 'rand', 'tax_query' => array(array('taxonomy' => 'categoria_produto', 'terms' => $cat_ID) )  );
			$query = new WP_Query( $args );
			if ( $query->have_posts() ): ?>
				<div class="row">	
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
					<?php if( ($query->current_post+1) % 4 == 0): ?>
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