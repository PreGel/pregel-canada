<?php get_header(); ?>
<!-- 	 <script>
  	
		jQuery( document ).ready( function( $ ) {
	    // $() will work as an alias for jQuery() inside of this function
	    function getTimeRemaining(endtime) {
		  var t = Date.parse(endtime) - Date.parse(new Date());
		  var seconds = Math.floor((t / 1000) % 60);
		  var minutes = Math.floor((t / 1000 / 60) % 60);
		  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
		  var days = Math.floor(t / (1000 * 60 * 60 * 24));
		  return {
		    'total': t,
		    'days': days,
		    'hours': hours,
		    'minutes': minutes,
		    'seconds': seconds
		  };
		}

		function initializeClock(id, endtime) {
		  var clock = document.getElementById(id);
		  var daysSpan = clock.querySelector('.days');
		  var hoursSpan = clock.querySelector('.hours');
		  var minutesSpan = clock.querySelector('.minutes');
		  var secondsSpan = clock.querySelector('.seconds');

		  function updateClock() {
		    var t = getTimeRemaining(endtime);

		    daysSpan.innerHTML = t.days;
		    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
		    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
		    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

		    if (t.total <= 0) {
		      clearInterval(timeinterval);
		    }
		  }

		  updateClock();
		  var timeinterval = setInterval(updateClock, 1000);
		}

		var deadline = 'May 20 2017 09:00:00 GMT-0500';
		initializeClock('clockdiv', deadline);
			} );

	  </script> -->


	<div id="content">
		<div id="intro">
			<?php masterslider("pg-home"); ?>
		</div>
		<div id="product-bar">
			<div class="row expanded">
				<a href="https://products.pregelcanada.com/enpgca/products/gelato-sorbetto.html"><div class="large-3 small-6 columns link gelato"><h3>Gelato</h3></div></a>
				<a href="https://products.pregelcanada.com/enpgca/products/soft-serve.html"><div class="large-3 small-6 columns link froyo"><h3 id="soft-serve">Soft&nbsp;Serve</h3></div></a>
				<a href="https://products.pregelcanada.com/enpgca/products/pastry-confections.html"><div class="large-3 small-6 columns link pastry"><h3>Pastry</h3></div></a>
				<a href="https://products.pregelcanada.com/enpgca/products/specialty-beverages.html"><div class="large-3 small-6 columns link bev"><h3>Beverages</h3></div></a>
			</div>
		</div>
		
		
		<!-- home widget grid -->



		<!-- IE does not support calc ?? - was using calc for full responsive homepage grid to offset title in overlay -->
		<!-- <style>
			@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
             /* IE10+ CSS here */
		    .pg-text-overlay .widgettitle {
			  	/*transform: translateY(-140%) !important;*/
			  	transform: translateY(140%) !important;
			  	/*transform: translateY(calc(-100% - 10px)) !important;*/
				}
			.pg-caption:hover .pg-text-overlay {
				 transform: translateY(20%); 
				}
		    } 
		</style> -->

        <div id="home-top-banner-contianer" class="large-12 columns">
		 <div id="home-top-banner">
			<div class="row">
				
				<!-- <div id="countdown-img" class="large-5 medium-12 small-12 columns">
  
				</div>
				
				<div id="clockdiv" class="large-4 medium-12 end columns">
				  <div class="">
				    <span class="days"></span>
				    <div class="smalltext">Days</div>
				  </div>
				  <div class="">
				    <span class="hours"></span>
				    <div class="smalltext">Hours</div>
				  </div>
				  <div class="">
				    <span class="minutes"></span>
				    <div class="smalltext">Minutes</div>
				  </div>
				  <div class="">
				    <span class="seconds"></span>
				    <div class="smalltext">Seconds</div>
				  </div>
				</div> -->
			</div>
		 </div>
		</div>
		<div class="row expanded large-collapse">
			<div class="large-4 medium-12 columns">

				<div id="homeGridOne" class="homeGrid">

					<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid One');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  


					<div class="widget_sp_image">
						  <!-- test static headers -->
					<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->

						        
						        <!-- <h5 class="alt"><?php //echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5> -->
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>

						      


					    </article>
					</div>
					  

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid1');
					}
					?>


				</div> <!-- end homeGrid -->

			    </div> <!-- end column -->

			<div class="large-4 medium-12 columns">

				<div id="homeGridTwo" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Two');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="widget_sp_image">
						 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    			<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						        
						        <!-- <h5 class="alt"><?php //echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5> -->
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>


					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid2');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->
			<div class="large-4 medium-12 columns">

			<div id="homeGridThree" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Three');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					 <div class="widget_sp_image">
					 	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    			<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						        
						        <!-- <h5 class="alt"><?php //echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5> -->
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid3');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->
		<!-- </div> --> <!-- end row -->

		

			</div> <!-- end column -->


		</div> <!-- end row -->
		<!-- end home widget grid -->
		<?php 

						$image = get_field('bottom_banner');
						$link = get_field('bottom_banner_link');

						if( !empty($image) ): ?>
						<div id="home-bottom-banner" class="alt-background-light-blue">
							<div class="row">
								<div class="small-12 columns ">
									 <a href="<?php echo $link ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>
							</div>
						</div>

		<?php endif; ?>
	  <!-- <div id="gelato-shop" class="row expanded large-collapse">
	  	<div id="gelato-shop-img" class="large-6 columns"></div>
	  	<div id="gelato-shop-text" class="large-6 columns">
	  		
	  	</div>
	  </div> -->
	</div> <!-- end #content -->

<?php get_footer(); ?>