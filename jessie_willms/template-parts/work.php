<!-- work -->
<section class="work fullwidth">
	
	<header>
		<?php if ( get_field('work_section_label') ) : ?>
			<h2><?php the_field('work_section_label'); ?></h2>
		<?php endif; ?>
	</header>


	<section class="cf inner-wrap">
		<?php while( has_sub_field('work_experience') ): ?>
			
			<div class="fullwidth">
				
				<h3><?php the_sub_field('work_company_name'); ?></h3>
				<p class="hghlght"><?php the_sub_field('work_position_title'); ?></p>
				<p><?php the_sub_field('work_employment_period') ?></p>
				<p><?php the_sub_field('work_overview') ?></p>
				
				<ul>
					<?php while( has_sub_field('work_responsibilites') ): ?>
						<li class="col-3"><?php the_sub_field('work_accomplish') ?></li>
					<?php endwhile; // end the loop?>
				</ul>
				
				<div class="work-award-wrap">
					
					<?php if ( get_field('work_awards_title') ) : ?>
						<p class="hghlght"><?php the_sub_field('work_awards_title') ?></p>
					<?php endif; ?>

					<?php if ( get_field('work_awards_desc') ) : ?>
						<p class="hghlght"><?php the_sub_field('work_awards_desc') ?></p>
					<?php endif; ?>

					<?php if ( get_field('awards_award_date') ) : ?>
						<p class="hghlght"><?php the_sub_field('awards_award_date') ?></p>
					<?php endif; ?>

					<?php if ( get_field('award_awarded_for') ) : ?>
						<p><a href="<?php the_sub_field('award_awarded_for_url') ?>"><?php the_sub_field('award_awarded_for') ?></a></p>
					<?php endif; ?>
				</div>
				
			</div>

		<?php endwhile; // end the loop?>
	</section><!-- work -->
</section>