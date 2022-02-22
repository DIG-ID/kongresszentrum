<?php

$sidebar_blocks = get_field( 'sidebar_blocks_cf' );

if ( $sidebar_blocks ) :
	foreach ( $sidebar_blocks as $post ) :
		// Setup this post for WP functions (variable must be named $post).
		setup_postdata( $post );

		$block_template = 'block';

		if ( 'dark' === get_field( 'block_template' ) ) :
			$block_template = 'block block-inverted';
		endif;

		$block_button_url  = get_field( 'block_button_url' );
		$block_button_text = get_field( 'block_button_text' );

		?>
		<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
			<div class="<?php echo $block_template; ?>">
				<?php if ( get_field( 'block_banner_check' ) ) : ?>
					<span class="block__badge"><?php the_field( 'block_banner_content' ); ?></span>
				<?php endif; ?>
				<h3 class="block__title"><?php the_title(); ?></h3>
				<p class="block__text"><?php the_field( 'block_text' ); ?></p>
				<?php if ( $block_button_url && $block_button_text ) : ?>
					<a class="block__btn" href="<?php echo esc_url( $block_button_url ); ?>"><?php echo $block_button_text ?></a>
				<?php endif; ?>
			</div>
		</div>
		<?php
	endforeach;
	// Reset the global post object so that the rest of the page works correctly.
	wp_reset_postdata();
endif;
