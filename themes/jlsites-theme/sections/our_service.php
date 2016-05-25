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
		<div class="index-banner our_service_background">
			<div class="wmuSlider our_service_slider">
				<div class="wmuSliderWrapper">
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="container">
							<div class="col-md-6 slider-left">
								<h3>Eu to feliz</h3>
								<h4>alto astral</h4>
								<p class="top">Tô sorrindo a toa</p>
								<p class="middle">Curtindo numa boa</p>							
								<p class="bottom">Pra liberar geral</p>
								<button class="btn btn-8 btn-8b visibility-hidden">
									<a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a>
								</button>
							</div>						
							<div class="col-md-6 slider-right">
								<img src="<?php echo get_stylesheet_directory_uri() . "/images/nosso_servico/banner/1.png"; ?>" />
							</div>					
							 <div class="clearfix"> </div>						
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="container">
							<div class="col-md-6 slider-right">
								<img src="<?php echo get_stylesheet_directory_uri() . "/images/nosso_servico/banner/2.png"; ?>" />
							</div>						
							<div class="col-md-6 slider-left">
								<h3>Eu tô feliz</h3>
								<h4>alto astral</h4>
								<p class="top">Tô sorrindo a toa</p>
								<p class="middle">Curtindo numa boa</p>							
								<p class="bottom">Pra liberar geral</p>
								<button class="btn btn-8 btn-8b visibility-hidden">
									<a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a>
								</button>								
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
								<button class="btn btn-8 btn-8b visibility-hidden">
									<a class="popup-with-zoom-anim" href="#small-dialog">Order Now</a>
								</button>								
							</div>						
							<div class="col-md-6 slider-right">
								<img src="<?php echo get_stylesheet_directory_uri() . "/images/nosso_servico/banner/3.png"; ?>" />
							</div>			
							 <div class="clearfix"> </div>						
						</div>
					</article>					
				</div>

				<script>//jQuery('.wmuSlider').wmuSlider();</script>
			</div>
		</div>
		<div class="container">
			<?php
				echo '<div class="buttons buttons-line">';
					echo '<a href="#howWeWork" class="blue_green_btn" id="blue_btn">Como trabalhamos</a>';
					echo '<a href="#focus" class="blue_green_btn" id="green_btn">Por quê fazer um site</a>';
				echo '</div>';
			?>
		</div>		
	</div>
	<div class="clearfix"> </div>				
		
</section> 