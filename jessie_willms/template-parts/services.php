<section class="services fullwidth">
	
	<!-- section header -->
	<header>
		<?php if ( get_field('services_section_label') ) : ?>
			<h2><?php the_field('services_section_label'); ?></h2>
		<?php endif; ?>
	</header>
	
	<!-- section: skills -->
	<section class="inner-wrap cf">

		<ul class="cf col-4">
			<?php if ( get_field('services_main_label') ) : ?>
				<h3><?php the_field('services_main_label'); ?></h3>
				<p><?php get_field('services_main_label') ?></p>
			<?php endif; ?>
			
			<!-- list -->
			<?php while( has_sub_field('services_repeater') ): ?>
				
				<!-- icon -->
				<?php $image = get_field('services_image');
				if( !empty($image ) ): ?>
					<img src="<?php echo ['sizes']['large']; ?>" alt="<?php echo ['alt']; ?>" class="snippet img"/>
				<?php endif; ?>
				<!-- .icon -->

				<li><?php the_sub_field('service_label'); ?></li>
				<li><?php the_sub_field('service_description'); ?></li>
				<li><?php the_sub_field('services_details_extra') ?></li>
			<?php endwhile; // end the loop?>
		</ul>
	</section><!-- .skills -->
</section>