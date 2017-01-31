<?php if(get_theme_mod('jlsites_has_publicacoes_setting')): ?>
<section class="publicacoes" id="publicacoes">
	<div class="container">

		<!-- SECTION HEADER -->
		<div class="section-header">
			<!-- SECTION TITLE -->
			<h2 class="dark-text">Publicações</h2>
		</div><!-- / END SECTION HEADER -->

		
		<div class="row">
			<?php
				if (is_active_sidebar('jlsites-theme-publicacoes')) {
					dynamic_sidebar('jlsites-theme-publicacoes');
				}
			?>
		</div>


	</div> <!-- / END CONTAINER -->
</section> <!-- END ABOUT US SECTION -->
<?php endif; ?>