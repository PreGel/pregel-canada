<?php get_header(); ?>
			
	<div id="content" class="pg-about-content">
	 <div id="pg-about-banner-container">
	  <div id="pg-about-banner"></div>
	</div>
	   			
	<div id="pg-events-container" class="grid-container">
		<div id="title-banner">
			<h1 class="text-center">Events</h1>							
		</div>
		<div id="events-container">
		 <div id="pg-about-section-one">
		  <div class="grid-x" id="pg-about-content-row">
		   <div id="event-blurb" class="small-12 large-8 cell">
			<p>PreGel travels the country throughout the year in an effort to get you the information you need about quality artisanal dessert ingredient solutions. At these events, not only do you have the opportunity to taste the final product our ingredients create, but you can enjoy the entire experience. See, smell, and learn about the tools that will enhance your business directly from our skilled staff of dedicated sales agents and trained chefs of our International Training Centers.  Join us for industry events, trainings, demos, workshops, or 5-Star Seminars lectured by world-renowned pastry chefs.</p>
			<p>For more information on any of the listed events, email us at <a href="mailto:events@pregelamerica.com">events@pregelamerica.com</a>.</p>
		   </div>

		   <div class="sidebar large-4 medium-5 small-12 cell end" role="complementary">
			<div id="sidebar-news" class="large-12 medium-12 small-12 cell">
				<h4 class="text-center" id="event-bar-title">Discover our Events</h4>
        		 <?php $terms = get_terms('event_cat');
					echo '<ul id="event-cat-sidebar" class="text-center">';
						foreach ($terms as $term) {
						echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
						}
					echo '</ul>';
				 ?>
			</div>
		   </div>
			
		  </div>
		 </div>
        </div>
<?php 

// query
$the_query = new WP_Query(array(
	'post_type' => 'event_type',
    'posts_per_page'	=> -1,
    'meta_key'			=> 'event_date_start',
	'orderby'			=> 'meta_value',
    'order' => 'ASC',
));

?>
<?php if( $the_query->have_posts() ): ?>
	
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
		
		$class = get_field('featured') ? 'class="featured"' : '';
		
		?>
		<div id="single-event-container" class="large-12 medium-12 small-12 cell">

	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

		<header class="article-header">	
			<div id="event-title" class="large-12 medium-12 small-12 cell">
				<h3 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			</div>
		</header> <!-- end article header -->
		
		<section class="entry-content" itemprop="articleBody">
			<div class="grid-container">
				<div class="grid-x">
					
					<div id="event-img-container" class="large-5 medium-6 small-12 cell">
						<a href="<?php the_permalink() ?>">


		  	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned
		  		the_post_thumbnail('medium_large');
						} else { // if not then display a default image
							echo '<img src="http://pregel2.com/wp-content/uploads/2016/07/LOGO-AMERICAWEB-01.jpg" alt="" />';
						} 
						?>
					</a>
				</div>
				
				<div id="event-description" class="large-7 medium-6 small-12 cell">
					<div class="grid-container">
						<div class="grid-x">
							<div class="large-12 small-12 cell">
								<?php $terms = get_the_terms( $post->ID , 'event_cat' ); 
								foreach ( $terms as $term ) {
									$term_link = get_term_link( $term, 'event_cat' );
									if( is_wp_error( $term_link ) )
										continue;
									echo '<a href="' . $term_link . '">' . $term->name . '</a>';
								} 
								?> 
							</div>
							<h4 id="event-date" class="large-12 small-12 columns"><?php the_field('event_date_start'); ?></h4>
							<h4 id="event-date" class="large-12 small-12 columns"><?php the_field('event_date_end'); ?></h4>
							<h4 id="event-local" class="large-12 small-12 columns"><?php the_field('event_local'); ?></h4>
							<div id="event-time" class="large-8 small-8 columns"><?php the_field('event_time'); ?></div>
							<div id="event-booth" class="large-8 small-8 columns"><?php the_field('event_booth'); ?></div>
							<div id="event-blurb" class="large-12 small-12 columns"><?php the_field('event_blurb'); ?></div>
							<h4 id="event-url" class="large-12 columns end"><?php the_field('event_url'); ?></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><!-- <?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?> --></p>	
	</footer> <!-- end article footer -->

</article> <!-- end article -->

</div> <!-- end container div -->

	<?php endwhile; ?>

	<?php else : ?>
			<div id="title-banner" class="large-centered cell">					
				<h2 class="text-center">
				    There are currently no events on our schedule.
					<br>
					Check back with us soon!
				</h2>
			</div>
	
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

		
	</div> <!-- end #pg-events-container -->
	</div> <!-- end #content -->

<?php get_footer(); ?>