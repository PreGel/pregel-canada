<?php
/*
single_event_type.php
*/
?>

<?php get_header(); ?>
			
<div id="event-content">

	<div id="inner-content" class="row">


		<main id="single-event-container" class="large-10 medium-10 small-12 columns" role="main">

	<div class="large-9 medium-8 small-12 end columns">
		<a href="https://pregelcanada.com/events/" class="button">Return All Events</a>
	</div>
		    <?php 

            if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single-event' ); ?>

		    					
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

	<div class="large-9 medium-8 small-12 end columns">
		<a href="https://pregelcanada.com/events/" class="button">Return All Events</a>
	</div>

		</main> <!-- end #main -->


	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>