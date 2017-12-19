<?php
get_header(); ?>

<div id="content">
	<div id="terapeutas-cat">
		<div class="container">

			<h1>Terapeutas - Yoga</h1><br>
			<?php
			$args = array( 'posts_per_page' => 16, 'offset'=> 0, 'orderby' => 'rand', 'category_name' => 'yoga'  );
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