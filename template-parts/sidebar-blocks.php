<?php

$sidebar_blocks = get_field( 'sidebar_blocks' );

if ( $sidebar_blocks ) :
	foreach ( $sidebar_blocks as $sidebar_block ) :

		$block_title    = get_the_title( $sidebar_block->ID );
		$block_buttons  = get_field( 'block_button_link', $sidebar_block->ID );
		$block_template = 'block-sidebar';

		if ( 'dark' === get_field( 'block_template', $sidebar_block->ID ) ) :
			$block_template = 'block-sidebar block-sidebar--inverted';
		endif;
		?>
		<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
			<div class="<?php echo $block_template; ?>">
				<h3 class="block-sidebar__title"><?php echo esc_html( $block_title ); ?></h3>
				<p class="block-sidebar__text"><?php the_field( 'block_description', $sidebar_block->ID ); ?></p>
				<?php
				if ( $block_buttons ) :
					echo '<a class="block-sidebar__btn" href="' . get_field( 'block_button_link', $sidebar_block->ID ) . '">' . get_field( 'block_button_title', $sidebar_block->ID ) . '</a>';
				endif;
				?>
			</div>
		</div>
		<?php
	endforeach;
endif;
