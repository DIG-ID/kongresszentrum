<?php
/**
 * Template Name: Banquet Page Template
 *
 * The template for displaying all content of the banquet page.
 */

get_header(); ?>
	<h1 class="screen-reader-text"><?php the_title(); ?></h1>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<?php
				$banquets_query_args = array(
					'post_type' => 'banquet',
					'nopaging'  => true,
					'order'     => 'ASC',
				);
				$banquets_query = new WP_Query( $banquets_query_args );
				if ( $banquets_query->have_posts() ) :
					while ( $banquets_query->have_posts() ) :
						$banquets_query->the_post();
						?>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
							<article class="main-block">
								<?php
								$banquet_gallery = get_field( 'banquet_gallery' );
								if ( $banquet_gallery ) :
									?>
									<div class="swiper-container-block-slider">
										<div class="swiper-wrapper">
											<?php foreach ( $banquet_gallery as $gallery_img ) : ?>
												<a href="<?php echo esc_url( get_permalink() ); ?>" class="swiper-slide">
													<?php echo wp_get_attachment_image( $gallery_img, 'main-block-thumbnail' ); ?>
												</a>
											<?php endforeach; ?>
										</div>
										<div class="swiper-button-prev swiper-button__banquets"></div>
										<div class="swiper-button-next swiper-button__banquets"></div>
									</div>
									<?php
								endif;
								?>
								<div class="main-block__content">
									<h2 class="main-block__title"><?php the_title(); ?></h2>
									<p class="main-block__subtitle">
										<span class="capacity"><?php esc_html_e( 'Capacity:', 'kongresszentrum-kreuz' ); ?> <?php the_field( 'banquet_capacity' ); ?></span>
										<span class="size"><?php esc_html_e( 'Room Size:', 'kongresszentrum-kreuz' ); ?> <?php the_field( 'banquet_room_size' ); ?></span>
									</p>
									<p class="main-block__text"><?php the_field( 'banquet_small_description' ); ?></p>
									<div class="main-block__btn--wrapper">
										<a href="<?php the_permalink(); ?>" class="main-block__btn "><?php esc_html_e( 'Details', 'kongresszentrum-kreuz' ); ?></a>
										<a href="<?php the_field( 'banquet_pdf_file' ); ?>" target="blank" class="main-block__btn main-block__btn--dark"><?php the_field( 'banquet_pdf_button_title' ); ?></a>
									</div>
								</div>
							</article>
						</div>
						<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div><!-- .row -->
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
				<div class="block-sidebar block-sidebar--inverted block-sidebar--overviews">
					<h3 class="block-sidebar__title"><?php the_field( 'banquet_overviews_title' ); ?></h3>
					<p class="block-sidebar__text "><?php the_field( 'banquet_overviews_description' ); ?></p>
					<a class="block-sidebar__btn" href="<?php the_field( 'banquet_overviews_button_1_file' ); ?>" target="_blank"><?php the_field( 'banquet_overviews_button_1_title' ); ?></a>
					<a class="block-sidebar__btn" href="<?php the_field( 'banquet_overviews_button_2_file' ); ?>" target="_blank"><?php the_field( 'banquet_overviews_button_2_title' ); ?></a>
				</div>
			</div>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
