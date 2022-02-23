<?php
/**
 * Template Name: Foods & Beverages Page Template
 *
 * The template for displaying all content of the food & beverages page.
 */

get_header(); ?>
	<h1 class="screen-reader-text"><?php the_title(); ?></h1>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<?php
				// Check rows exists.
				if ( have_rows( 'food_&_beverages_block' ) ) :

					// Loop through rows.
					while ( have_rows( 'food_&_beverages_block' ) ) :
						the_row();
						$block_image = get_sub_field( 'image' );
						$block_link  = get_sub_field( 'pdf_file' );
						?>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
							<div class="main-block">
								<a href="<?php echo esc_url( $block_link ); ?>">
									<?php echo wp_get_attachment_image( $block_image, 'main-block-thumbnail' ); ?>
								</a>
								<div class="main-block__content">
									<h2 class="main-block__title"><?php the_sub_field( 'title' ); ?></h2>
									<p class="main-block__text"><?php the_sub_field( 'description' ); ?></p>
									<div class="main-block__btn--wrapper">
										<?php if ( $block_link ) : ?>
											<a href="<?php echo esc_url( $block_link ); ?>" target="_blank" class="main-block__btn"><?php the_sub_field( 'button_title' ); ?></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<?php
					endwhile;

				else :
				// Do something...
				endif;
				?>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
