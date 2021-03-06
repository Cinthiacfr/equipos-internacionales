			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<div class="sc-footerContact">

						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
	    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
	    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
	    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
	    					'theme_location' => 'footer-links',             // where it's located in the theme
	    					'before' => '',                                 // before the menu
	    					'after' => '',                                  // after the menu
	    					'link_before' => '',                            // before each link
	    					'link_after' => '',                             // after each link
	    					'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>
						<p>TEL: (506) 2268-3753 / FAX: (506) 2268-3754</p>
						<p>APDO 148-3017, San Isidro de Heredia, Costa Rica</p>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</div>
					<div class="sc-footerLogo">
						<img class="logo" src="http://localhost:8888/wordpress/wp-content/themes/eddiemachado-bones-9db85e4/library/images/general/logo-equipos.png">
					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
