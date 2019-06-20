<?php get_header(); ?>

	<div id="content">
		<div id="pg-featured-article-banner" class="large-12">			
					<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Article News Page');

					$my_query = new WP_Query( $args );
					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					
				<div class="grid-container">
				<div class="grid-x">
					   <article class="">
					   	<!-- custom thumbnail size 600px wide -->
								<div class="cell" id="featured-article-title-container">
								<div class="large-10 large-centered cell" id="fatured-article-title-inner-container">	
								<div id="featured-image-banner-container">
									<section id="featured-image-banner" itemprop="articleBody">
									<?php the_post_thumbnail('full'); ?>
								    </section>
								</div>
								<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?>
						        <a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a>
						        </div>
								</div>
						      
					    </article>
					  
					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar();
					}
					?>
				</div>
			</div>
			</div>
			<div id="pg-news-container" class="grid-container">
			  	<h1>PreGel News</h1>
			  	<div class="grid-x">
				<div class="large-12 cell">
			    	<p>When PreGel has something new to share, we want you to be the first to know about it. Look here to get informed about the latest product launches, current industry trends, company holiday schedules, upcoming trade shows and recaps, useful business advice, and more. We invite you to explore our collection of informative and educational material in our effort to keep you ahead of the curve.</p>
					<p>Our press room is also available with the latest press releases and media kit for all media interest and contacts. Please feel free to contact our Marketing Department with any questions at <a href="mailto:marketing@pregelamerica.com">marketing@pregelamerica.com</a>.</p>
			    </div>
			  </div>
			  <div id="cat-filter">
			  	<!-- <div class="large-12 cell"> -->
			  	<h4>Browse by Category</h4>
			  		 <?php $terms = get_terms('article_cat');
						echo '<div id="news-cat-list" class="grid-x grid-margin-x">';
						 foreach ($terms as $term) {
						 echo '<div id="news-cat-button" class="auto cell"><a class="button expanded" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
						  }
						echo '</div>';
						?>

			  	<!-- </div> -->
			  </div>
			</div>
			<div class="grid-container">	
			    <div id="news-grid-feed" class="grid-x grid-margin-x">
			   <!--  <div class="large-12 medium-12 small-12 cell" role="main"> -->
			    
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid-news' ); ?>
									    
					<?php endwhile; ?>	

						<?php joints_page_navi(); ?>
										
					<?php else : ?>
																
						<?php get_template_part( 'parts/content', 'missing' ); ?>
											
					<?php endif; ?>
				</div>
			    </div><!-- end #news-grid-feed -->
		

	</div> <!-- end #content-->

<?php get_footer(); ?>