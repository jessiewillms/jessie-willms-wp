<section class="skills fullwidth">
	
	<!-- section header -->
	<header>
		<?php if ( get_field('skills_section_label') ) : ?>
			<h2 id="clients"><?php the_field('skills_section_label'); ?></h2>
		<?php endif; ?>
	</header>
	
	<!-- section: skills -->
	<section class="inner-wrap cf">

		<ul class="cf col-4">
			<?php if ( get_field('skills_main_label') ) : ?>
				<h3><?php the_field('skills_main_label'); ?></h3>
			<?php endif; ?>
			
			<!-- list -->
			<?php while( has_sub_field('skills_main') ): ?>
				<li><?php the_sub_field('skills_core_skills'); ?></li>
			<?php endwhile; // end the loop?>
		</ul>

		<ul class="cf col-4">
			<?php if ( get_field('skills_sec_label') ) : ?>
				<h3><?php the_field('skills_sec_label'); ?></h3>
			<?php endif; ?>
			
			<!-- list -->
			<?php while( has_sub_field('skills_secondary_skills') ): ?>
				<li><?php the_sub_field('skills_sec_skills'); ?></li>
			<?php endwhile; // end the loop?>
		</ul>

		<ul class="cf col-4">
			<?php if ( get_field('skills_learning') ) : ?>
				<h3><?php the_field('skills_learning'); ?></h3>
			<?php endif; ?>

			<!-- list -->
			<?php while( has_sub_field('skills_learning') ): ?>
				<li><?php the_sub_field('skills_currently_learning'); ?></li>
			<?php endwhile; // end the loop?>
		</ul>
	
		<!-- tools -->
		<ul class="cf col-4">
			<?php if ( get_field('skills_tools_label') ) : ?>
				<h3><?php the_field('skills_tools_label'); ?></h3>
			<?php endif; ?>

			<!-- list -->
			<?php while( has_sub_field('skills_tooling') ): ?>
				<li><?php the_sub_field('tools'); ?></li>
			<?php endwhile; // end the loop?>
		</ul>
	</section><!-- .skills -->
</section>