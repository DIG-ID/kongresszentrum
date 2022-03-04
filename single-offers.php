<?php
/**
 * The template for displaying offers single posts
 */

get_header(); ?>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12">
					<article class="block-image block-image--slider">
						<?php
						$offer_gallery = get_field( 'offers_gallery' );
						if ( $offer_gallery ) :
							?>
							<div class="swiper-container-wide-slider">
								<div class="swiper-wrapper">
									<?php foreach ( $offer_gallery as $gallery_img ) : ?>
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
							<div class="block-image__text"><?php the_content(); ?></div>
							<div class="block-image__btn--wrapper">
								<?php icl_link_to_element( 718, 'post', esc_html__( 'Back to Overview', 'kongresszentrum-kreuz' ) ); ?>
								<a class="block-image__btn block-image__btn--dark" href="mailto:<?php the_field( 'offer_send_request_link' ); ?>" target="_blank"><?php esc_html_e( 'ANFRAGE SENDEN', 'kongresszentrum-kreuz' ); ?></a>
							</div>
						</div>
					</article>
				</div>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
