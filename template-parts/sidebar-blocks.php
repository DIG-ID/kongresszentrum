<?php

$sidebar_blocks = get_field( 'sidebar_blocks' );

if ( $sidebar_blocks ) :
	foreach ( $sidebar_blocks as $sidebar_block ) :

		$block_title    = get_the_title( $sidebar_block->ID );
		$block_buttons  = get_field( 'block_buttons', $sidebar_block->ID );
		$block_template = 'block';

		if ( 'dark' === get_field( 'block_template', $sidebar_block->ID ) ) :
			$block_template = 'block block-inverted';
		endif;
		?>
		<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-12 px-15">
			<div class="<?php echo $block_template; ?>">
				<h3 class="block__title"><?php echo esc_html( $block_title ); ?></h3>
				<p class="block__text"><?php the_field( 'block_description', $sidebar_block->ID ); ?></p>
				<?php
				if ( $block_buttons ) :
					foreach ( $block_buttons as $block_button ) :
						$button_title = $block_button['title'];
						$button_link  = $block_button['link'];
						echo '<a class="block__btn" href="' . esc_url( $button_link ) . '">' . esc_html( $button_title ) . '</a>';
					endforeach;
				endif;
				?>
			</div>
		</div>
		<?php
	endforeach;
endif;
