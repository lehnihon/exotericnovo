	<footer id="footer">
		<div class="logo-footer text-center anima-a">
			<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.png"; ?>" />
		</div>
		<div class="footer-content anima-b">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="branco">Novidades e Promoções</h2>
						<h5>Receba todas as nossas novidades e promoções</h5>
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 3 ); } ?>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->			
		</div>
		<div class="copyrino anima-c">
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
