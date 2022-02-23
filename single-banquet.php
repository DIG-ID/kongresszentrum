<?php
/**
 * The template for displaying banquet rooms single posts
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12">
					<article class="block-image block-image--slider">
						<?php
						$banquet_gallery = get_field( 'banquet_gallery' );
						if ( $banquet_gallery ) :
							?>
							<div class="swiper-container-wide-slider">
								<div class="swiper-wrapper">
									<?php foreach ( $banquet_gallery as $gallery_img ) : ?>
										<div class="swiper-slide">
											<?php echo wp_get_attachment_image( $gallery_img, 'full' ); ?>
										</div>
									<?php endforeach; ?>
								</div>
								<div class="swiper-button-prev swiper-button__single-banquet"></div>
								<div class="swiper-button-next swiper-button__single-banquet"></div>
								<div class="swiper-pagination"></div>
							</div>
							<?php
						endif;
						?>
						<div class="block-image__content">
							<h1 class="block-image__title"><?php the_title(); ?></h1>
							<p class="block-image__subtitle">
								<span class="capacity"><?php esc_html_e( 'Capacity:', 'kongresszentrum-kreuz' ); ?> <?php the_field( 'banquet_capacity' ); ?></span>
								<span class="size"><?php esc_html_e( 'Room Size:', 'kongresszentrum-kreuz' ); ?> <?php the_field( 'banquet_room_size' ); ?></span>
							</p>
							<div class="block-image__text"><?php the_content(); ?></div>
							<div class="block-image__btn--wrapper">
								<?php //get_page_link(40); ?>
								<?php icl_link_to_element( 16, 'post', esc_html__( 'Back to Ovreview', 'kongresszentrum-kreuz' ) ); ?>
								<a class="block-image__btn block-image__btn--dark" href="<?php the_field( 'banquet_pdf_file' ); ?>" target="_blank"><?php the_field( 'banquet_pdf_button_title' ); ?></a>
							</div>
						</div>
					</article>
				</div>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
				<div class="block-sidebar">
					<h3 class="block-sidebar__title"><?php esc_html_e( 'Amenities', 'kongresszentrum-kreuz' ); ?></h3>
					<p class="block-sidebar__text"><?php the_field( 'banquet_amenities' ); ?></p>
				</div>
			</div>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
