<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      	<div class="wrapper">
      	<header>
      		<?php if ( get_field('portfolio_project_name') ) : ?>
      			<h2><?php the_field('portfolio_project_name'); ?></h2>
      		<?php endif; ?>

      		<?php if ( get_field('portfolio_date') ) : ?>
      			<p><?php the_field('portfolio_date'); ?></p>
      		<?php endif; ?>

      		<?php if ( get_field('portfolio_publication') ) : ?>
      			<p><?php the_field('portfolio_publication'); ?></p>
      		<?php endif; ?>
      	</header>
		
		<main>
			<div class="img-wrap">
				<?php $image = get_field('portfolio_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
				<?php endif; ?>
				
				<?php if (get_field('portfolio_caption')) : ?>
					<p><?php the_field('portfolio_caption'); ?></p>
				<?php endif ?>
			</div>
		</main>
		
		<aside>
			<div class="tech-used">
			  <?php while( has_sub_field('portfolio_technologies_used') ): ?>
			      <p><?php the_sub_field('portfolio_tech_main'); ?></p>
			      <p><?php the_sub_field('portfolio_secondary_technology_used') ?></p>
			  <?php endwhile; ?>
			</div>
		</aside>

		<section>
			<div class="desc">
				<?php if ( get_field('portfolio_short_description') ) : ?>
					<p><?php the_field('portfolio_short_description'); ?></p>
				<?php endif; ?>

				<?php if ( get_field('portfolio_long_description') ) : ?>
					<p><?php the_field('portfolio_long_description'); ?></p>
				<?php endif; ?>
			</div>
		</section>
		
		<section>
			<div class="link-url">
				<?php if ( get_field('portfolio_link') ) : ?>
					<p><a href="<?php the_field('portfolio_link'); ?>">View</a></p>
				<?php endif; ?>

			</div>
		</section>
		</div><!-- .wrapper -->
        
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>