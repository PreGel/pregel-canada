<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>
 <?php get_header(); ?>
  <div id="content" class="pg-about-content"> 
<div class="grid-container">
   <div id="pg-events-container" class="grid-x">
	

	<div id="events-container">
	 <div id="pg-about-section-one">
	  <div class="" id="pg-about-content-row">
	   <div class="sidebar large-5 medium-6 small-12 cell end" role="complementary">
		<div id="sidebar-news" class="large-12 medium-12 small-12 cell">
				<h2 class="text-center" id="event-bar-title"><!-- <?php _e("Event Categories:", "jointstheme"); ?> --> <?php single_cat_title(); ?></h2>
        		 <?php $terms = get_terms('event_cat');
					echo '<ul id="event-cat-sidebar" class="text-center">';
						foreach ($terms as $term) {
						echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
						}
					echo '</ul>';
				 ?>
				<div class="large-9 medium-8 small-12 end cell">
				 <a href="https://www.pregelcanada.com/events/" class="button">Return All Events</a>
				</div>
	    </div>
	   </div>
	  </div>
	 </div>
    </div> 


			<?php global $query_string; 
	        $posts = query_posts($query_string.'&order=ASC'); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- To see additional archive styles, visit the /parts directory -->
			<?php get_template_part( 'parts/loop', 'event-cat'); ?>
						    
			<?php endwhile; ?>	

			<?php joints_page_navi(); ?>
							
			<?php else : ?>
				<div id="title-banner" class="large-centered cell">					
					<h2 class="text-center">
					    There are currently no events on our schedule.
						<br>
						Check back with us soon!
					</h2>
				</div>		
			<?php endif; ?>

			<?php wp_reset_query(); // reset the query ?>

			<div class="large-9 medium-8 small-12 end cell">
				<a href="https://www.pregelcanada.com/events/" class="button">Return All Events</a>
			</div>

  </div> <!-- end #pg-events-container -->	
  </div>		
 </div> <!-- end #content -->
<?php get_footer(); ?>