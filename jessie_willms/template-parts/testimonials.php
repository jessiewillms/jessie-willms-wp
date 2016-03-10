<!-- work -->
<section class="testimonials fullwidth">

	<!-- section header -->
	<header>
		<?php if ( get_field('testimonials_section_label') ) : ?>
			<h2><?php the_field('testimonials_section_label'); ?></h2>
		<?php endif; ?>
	</header>

	<!-- section: testimonials details -->
	<section class="cf inner-wrap">
		<?php while( has_sub_field('testimonials') ): ?>
			
			<ul class="cf fullwidth">

				<li><?php the_sub_field('testimonials_name'); ?></li>
				<li><?php the_sub_field('testimonials_position') ?></li>
				<li><?php the_sub_field('testimonials_company') ?></li>

				<li><?php the_sub_field('testimonials_date'); ?></li>
				<li><?php the_sub_field('testimonials_text_long'); ?></li>
				<li><?php the_sub_field('testimonials_text_short'); ?></li>
				
			</ul>

		<?php endwhile; // end the loop?>
	</section><!-- work -->
</section>