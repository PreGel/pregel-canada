<div class="off-canvas position-left" id="off-canvas" data-off-canvas data-position="left">

	<!-- pull in the products search from magento -->
	
	<?php //the_block('top.wpsearch'); ?>
	
	<ul id="mobile-menu" class="vertical menu accordion-menu" data-accordion-menu>
		
		<?php echo m2i_get_block_html( 'topnavwp' ); ?>
		
		<?php joints_off_canvas_nav_getleft(); ?>
		<li>
			<a href="https://canada.pregel-itc.com/training">Training</a>
			<ul class="vertical menu">
				<li><a href="https://canada.pregel-itc.com/training/schedule-registration/">Schedule &amp; Registration</a></li>
				<li><a href="https://canada.pregel-itc.com/training/calendar/">Calendar</a></li>
				<li><a href="https://canada.pregel-itc.com/training/curriculums/">Curriculums</a></li>
				<li><a href="https://canada.pregel-itc.com/training/classes/">Classes</a></li>
				<li><a href="https://canada.pregel-itc.com/training/locations/">Locations</a></li>
				<li><a href="https://canada.pregel-itc.com/training/training-center-instructors-staff/">Instructors &amp; Staff</a></li>
				<li><a href="https://canada.pregel-itc.com/training/general-information-policies/">Information &amp; Policies</a></li>
				<li><a href="https://canada.pregel-itc.com/training/my-bookings/">My Bookings</a></li>
				<!-- <li><a href="https://canada.pregel-itc.com/training/sponsors/">Sponsors</a></li>
				<li><a href="https://canada.pregel-itc.com/training/five-star-ambassadors/">5-Star Ambassadors</a></li> -->
			</ul>
		</li>
		
		<?php joints_off_canvas_nav_getright(); ?>
		
		<?php joints_off_canvas_nav(); ?>
	</ul>
	
</div>