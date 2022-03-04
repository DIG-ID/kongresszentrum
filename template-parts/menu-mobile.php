<div id="opener__menu" class="closed">
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container_class' => 'navbar-collapse',
			'container_id'    => 'navbar-mobile',
			'menu_class'      => 'navbar-nav ml-auto',
			'fallback_cb'     => '',
			'menu_id'         => 'main-menu',
			'depth'           => 2,
			'walker'          => '',
		)
	);
	?>
	<?php if ( is_active_sidebar( 'lang-switcher-mobile' ) ) : ?>
		<div id="lang-switcher" class="lang-switcher-mobile">
			<?php dynamic_sidebar( 'lang-switcher-mobile' ); ?>
		</div>
	<?php endif; ?>
	<div class="menu__container--mobile">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 button__booking--wrapper">
				<a href="https://www.simplebooking.it/ibe/hotelbooking/search?hid=3565&lang=en" target="_blank" class="main-block__btn main-block__btn--dark button__menumob"><?php esc_html_e( 'RESERVATION', 'kongresszentrum-kreuz' ); ?></a>
			</div>
		</div>
	</div>
</div>
