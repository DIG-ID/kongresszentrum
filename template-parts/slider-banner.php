<section class="slider-banner-wrapper">
	<div class="swiper slider-banner-container">
		<div class="swiper-wrapper">
			<?php
			$slider_banner_args = array(
				'post_type' => 'seminare_rooms',
				'nopaging'  => true,
				'order'     => 'ASC',
			);
			$slider_banner_query = new WP_Query( $slider_banner_args );
			if ( $slider_banner_query->have_posts() ) :
				while ( $slider_banner_query->have_posts() ) :
					$slider_banner_query->the_post();
					?>
					<article class="slider-banner swiper-slide">
						<?php the_post_thumbnail( 'banner-slider' ); ?>
						<div class="slider-banner__content">
							<div class="slider-banner__inner-content">
								<h2 class="slider-banner__title"><?php the_title(); ?></h2>

								<p class="slider-banner__info">
									<span class="capacity"><?php esc_html_e( 'Capacity:', 'kongresszentrum-kreuz' ); ?> <?php the_field( 'seminare_room_capacity' ); ?></span>
									<span class="size"><?php esc_html_e( 'Room Size:', 'kongresszentrum-kreuz' ); ?> <?php the_field( 'seminare_room_room_size' ); ?></span>
								</p>

								<p class="slider-banner__description">
									<?php the_field( 'seminare_room_slider_description' ); ?>
								</p>
							</div>
							<a href="<?php the_permalink(); ?>" class="slider-banner__btn "><?php esc_html_e( 'Details', 'kongresszentrum-kreuz' ); ?></a>

						</div>
					</article>
					<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>

</section>
