<?php wp_enqueue_script( 'wmu-slider',  get_stylesheet_directory_uri() . '/js/jquery.wmuSlider.js'); ?>

<script type="text/javascript">
	function setMargins() {		
		width = jQuery(window).width();
		containerWidth = jQuery(".wmuSliderPagination").width();  
		leftMargin = (width-containerWidth)/2;    
		jQuery(".wmuSliderPagination").css("marginLeft", leftMargin);
	}

	jQuery(document).ready(function() {
		//setMargins();
		jQuery(window).resize(function() {
			//setMargins();    
		});
		jQuery('.wmuSlider').wmuSlider();
	});			
</script>

<section class="service" id="service">
	<!-- SECTION HEADER -->

	<!--<div class="section-header">
		OUR SERVICE
	</div>-->

	<div class="row">
		<div class="wmuSlider our_service_slider">
			<div class="wmuSliderWrapper our_service_background">
				<article style="position: absolute; width: 100%; opacity: 0;">
					<div class="container">
						<div class="col-md-6 slider-left">
							<h3>Eu to feliz</h3>
							<h4>alto astral</h4>
							<p class="top">Tô sorrindo a toa</p>
							<p class="middle">Curtindo numa boa</p>							
							<p class="bottom">Pra liberar geral</p>
						</div>						
						<div class="col-md-6">
							Direita
						</div>					
						 <div class="clearfix"> </div>						
					</div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;">
					<div class="container">
						<div class="col-md-6">
							Esquerda
						</div>						
						<div class="col-md-6 slider-left">
							<h3>Eu tô feliz</h3>
							<h4>alto astral</h4>
							<p class="top">Tô sorrindo a toa</p>
							<p class="middle">Curtindo numa boa</p>							
							<p class="bottom">Pra liberar geral</p>
						</div>			
						 <div class="clearfix"> </div>						
					</div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;">
					<div class="container">
						<div class="col-md-6 slider-left">
							<h3>Eu tô feliz</h3>
							<h4>alto astral</h4>
							<p class="top">Tô sorrindo a toa</p>
							<p class="middle">Curtindo numa boa</p>							
							<p class="bottom">Pra liberar geral</p>
						</div>						
						<div class="col-md-6">
							Direita
						</div>			
						 <div class="clearfix"> </div>						
					</div>
				</article>
				<article style="position: absolute; width: 100%; opacity: 0;">
					<div class="container">
						<div class="col-md-6">
							<div style=""></div>
						</div>						
						<div class="col-md-6 slider-left">
							<h3>Eu tô feliz</h3>
							<h4>alto astral</h4>
							<p class="top">Tô sorrindo a toa</p>
							<p class="middle">Curtindo numa boa</p>							
							<p class="bottom">Pra liberar geral</p>
						</div>		
						 <div class="clearfix"> </div>						
					</div>
				</article>
			</div>

			<script>//jQuery('.wmuSlider').wmuSlider();</script>
		</div>
	</div>
		
</section> 