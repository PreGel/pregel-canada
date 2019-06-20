<?php get_header(); ?>
	
	<div id="content">
		<div id="intro">
			<?php masterslider("pg-home"); ?>
		</div>
		<div id="product-bar">
			<div class="grid-x expanded">
				<div class="large-3 small-12 cell link gelato"><a href="https://products.pregelcanada.com/enpgca/products/gelato-sorbetto.html"><h3>Gelato</h3></a></div>
				<div class="large-3 small-12 cell link froyo"><a href="https://products.pregelcanada.com/enpgca/products/soft-serve.html"><h3>Soft&nbsp;Serve</h3></a></div>
				<div class="large-3 small-12 cell link pastry"><a href="https://products.pregelcanada.com/enpgca/products/pastry-confections.html"><h3>Pastry</h3></a></div>
				<div class="large-3 small-12 cell link bev"><a href="https://products.pregelcanada.com/enpgca/products/specialty-beverages.html"><h3>Beverages</h3></a></div>
			</div>
		</div>

		<div id="holiday-notice">
		<div class="row">
			<div class="large-12 cell text-center">
				<p><strong>Please Note: </strong>PreGel’s Toronto office will be closed June 24th, 2019 for physical inventory and on July 1st for Canada Day. Please note, no orders will be placed, processed or shipped on this day.</p>
			</div>
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
		<div class="grid-x expanded large-collapse">
			<div class="large-4 cell">

				<div id="homeGridOne" class="homeGrid">

					<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_one'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  


					<div class="widget_sp_image">
		
					<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	
					    		<?php the_post_thumbnail('home-feature-six-grid') ?>

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

			<div class="large-4 cell">

				<div id="homeGridTwo" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_two'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="widget_sp_image">
						 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	
					    		<?php the_post_thumbnail('home-feature-six-grid') ?>

					    		<div class="pg-text-overlay">
					
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

			<div class="large-4 cell">

				<div id="homeGridThree" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_three'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					 <div class="widget_sp_image">
					 	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					 
					    		<?php the_post_thumbnail('home-feature-six-grid') ?>

					    		<div class="pg-text-overlay">
		
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

				</div>   <!-- end homeGrid -->
			</div>  <!-- end column -->

		</div> <!-- end row -->
		<!-- end home widget grid -->
		<?php 

						$image = get_field('bottom_banner');
						$link = get_field('link_bottom_banner');

						if( !empty($image) ): ?>
						<div class="alt-background-light-blue">
							<div class="grid-x">
								<div class="small-12 cell ">
									 <a href="<?php echo $link ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>
							</div>
						</div>

		<?php endif; ?>

	  <!-- <div id="gelato-shop" class="row expanded large-collapse">
	  	<div id="gelato-shop-img" class="large-6 cell"></div>
	  	<div id="gelato-shop-text" class="large-6 cell">
	  		
	  	</div>
	  </div> -->
	</div> <!-- end #content -->

<?php get_footer(); ?>