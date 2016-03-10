<section class="about fullwidth">
	<!-- section header -->
	<header>
		
		<?php
		if ( is_front_page() && is_home() ) : ?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<!-- image -->
			<?php $image = get_field('homepage_logo');
			if( !empty($image) ): ?>
				
				<div style="background-size: cover; background-position: center, center; background-image: url('<?php the_field('homepage_logo') ?>')">
					
					<div class="header-inner-wrap">
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h2><?php bloginfo('description'); ?> </h2>
					</div>

					<div class="camera-wrap animated pulse infinite">
						<i class="fa fa-2x fa-camera-retro"></i>
						<p class="hide">Show a "professional" photo.</p>
					</div>

				</div>

			<?php endif; ?>
			
		<?php endif; ?>

		<?php if ( get_field('homepage_tagline') ) : ?>
			<p><?php the_field('homepage_tagline'); ?></p>
		<?php endif; ?>
	</header>

</section>