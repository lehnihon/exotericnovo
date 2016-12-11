	<footer id="footer">
		<div class="logo-footer text-center anima-a">
			<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" />
		</div>
		<div class="footer-content">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-offset-2">
						<h4>Portal dos Terapeutas SP</h4>
						<ul>
							<li><a href="<?php echo home_url( '/' )."sobre"; ?>">A Empresa</a></li>
							<li><a href="<?php echo home_url( '/' )."terapeutas"; ?>">Terapeutas</a></li>
							<li><a href="<?php echo home_url( '/' )."locacao-de-salas"; ?>">Locação de Salas</a></li>
							<li><a href="<?php echo home_url( '/' )."anuncie-conosco"; ?>">Anúncie no Portal</a></li>
							<li><a href="<?php echo home_url( '/' )."contato"; ?>">Fale Conosco</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<h4>Serviços</h4>
						<div class="row">
						<?php 
						$taxonomy = get_terms(array('taxonomy' => 'categoria_produto'));
						shuffle($taxonomy);
						$i = 0;
						foreach($taxonomy as $tax):
							if($i == 0 or $i == 6):
						?>
							<div class="col-md-6">
							<?php
							endif;
							?>
								<ul>
									<li><a href="<?php echo home_url( '/' )."categoria_produto/".$tax->slug; ?>"><?php echo $tax->name; ?></a></li>
								</ul>
							<?php 
							$i++;
							if($i == 6 ):
							?>
							</div>
							<?php endif; ?>
							<?php 
							if($i == 12):
							?>
							<?php 
							break;
							endif; ?>
						<?php 
						endforeach;
						?>
						</div>
						</div>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; Copyright <?php echo date('Y') ?> -  Portal dos Terapeutas SP
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
