<?php
/*
	Template Name: 404
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'jessie_willms' ); ?></h1>
				</header><!-- .page-header -->
				
				<div class="page-content">
					
					<?php if ( get_field('baby_photos_title') ) : ?>
						<h2><?php the_field('baby_photos_title'); ?></h2>
					<?php endif; ?>

					<?php while( has_sub_field('404_page_baby_photos') ): ?>
						<div>
							<?php $image = get_sub_field('baby_photo'); ?>
							<img src="<?php echo $image['sizes']['large'] ?>">

							<?php if ( the_field('caption') ) : ?>

							<?php endif; ?>

						</div>
					<?php endwhile; // end the loop?>


					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'jessie_willms' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( jessie_willms_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'jessie_willms' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'jessie_willms' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
