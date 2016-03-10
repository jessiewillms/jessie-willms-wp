<section class="portfolio fullwidth">
	
	<header>
		<h2>portfolio</h2>
	</header>

	<?php $projectTerms = wp_get_post_terms( $post->ID, 'portfolio' ); 
	$projectQuery = new WP_Query( 
		array( 
		'posts_per_page' => -1, //-12
		'post_type' => 'portfolio', 
		'project_type' => $projectTerms,
		'post__not_in' => array( $post->ID ),
		'order' => 'ASC'
		) 
		); ?>
	

		<section class="inner-wrap cf">
		<?php if ( $projectQuery->have_posts() ) : ?>
			<?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>
				
				<!-- portfolio wrap -->
				<div class="col-3">
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail( $post->ID,'large') ; ?>
					<p><?php the_title(); ?></p> 
					<p><?php the_field('portfolio_item_details') ?></p>

					<div class="categories">
						<?php the_terms( $post->ID, 'technologies', 'Technologies: ', ', '); ?>
					</div>
				</a>
				</div><!-- .portfolio wrap indiv-->

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>
		
		<?php else:  ?>
			<p>No portfolio items to see! Try <a href="https://ca.linkedin.com/in/jessie-willms-79095a1a">my LinkedIn</a> instead.</p>
		<?php endif; ?>

		</section><!-- .inner wrap -->

</section><!-- .portfolio -->