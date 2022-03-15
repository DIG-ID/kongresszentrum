<?php
/**
 * Template Name: Contacts Page Template
 *
 * The template for displaying all contact page
 */

get_header(); ?>
	<h1 class="screen-reader-text"><?php the_title(); ?></h1>
	<?php do_action( 'wrapper_open' ); ?>

		<?php do_action( 'before_main_content' ); ?>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 px-15">
					<section class="google-maps-wrapper">
						<?php
							$location = get_field( 'google-map' );
							if ( $location ) : ?>
								<div class="acf-map map-contacts" data-zoom="12">
									<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
								</div>
						<?php endif; ?>
					</section>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
					<div class="block block-large">
						<h3 class="block__title"><?php the_field( 'location_title' ); ?></h3>
						<p class="block__text"><?php the_field( 'location_description' ); ?></p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 px-15">
					<div class="block block-large">
						<h3 class="block__title"><?php the_field( 'how_to_get_there_title' ); ?></h3>
						<p class="block__text"><?php the_field( 'how_to_get_there_description' ); ?></p>
					</div>
				</div>
			</div>
		<?php do_action( 'after_main_content' ); ?>

		<?php do_action( 'before_main_sidebar' ); ?>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
				<div class="block-sidebar">
					<h3 class="block-sidebar__title"><?php the_field( 'contact_title' ); ?></h3>
					<p class="block-sidebar__text"><?php the_field( 'contact_content' ); ?></p>
					<a class="block-sidebar__btn" href="mailto:<?php the_field( 'contact_button_link' ); ?>"><?php the_field( 'contact_button_title' ); ?></a>
				</div>
			</div>
			<?php get_template_part( 'template-parts/sidebar-blocks' ); ?>
		<?php do_action( 'after_main_sidebar' ); ?>

	<?php do_action( 'wrapper_close' ); ?>

<?php get_footer();
