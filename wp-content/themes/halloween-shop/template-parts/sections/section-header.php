<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		$stickyheader = esc_attr(halloweenshop_sticky_menu());
	?>
<div class="main">
    <header class="main-header site-header <?php echo esc_attr(halloweenshop_sticky_menu()); ?>">
		<!-- <div class="container-fluid"> -->
		<div class="tpf-head">
			<div class="container">
				<p>
					<?php 
						echo '<img src="'.get_template_directory_uri().'/assets/images/tpheadtxt.png" class="img-responsive" />';
					?>
					
					<?php echo esc_html(get_theme_mod('announcementbar_text')); ?>

					<?php 
						echo '<img src="'.get_template_directory_uri().'/assets/images/tpheadtxt.png" class="img-responsive" />';
					?>
				</p>
			</div>
		</div>
		
		<div class="header-section">
			<div class="head-oly"></div>
			<div class="container">
				<div class="headfer-content row m-rl">
					<div class="col-lg-3 col-md-3 col-sm-6 pd-0 logo-box">
						<div class="site-logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
							?>
							<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
								<?php 
									echo esc_html(bloginfo('name'));
								?>
							</a>	
							<?php 						
								}
							?>
						</div>
						<div class="box-info">
							<?php
								$halloweenshop_site_desc = get_bloginfo( 'description');
								if ($halloweenshop_site_desc) : ?>
									<p class="site-description"><?php echo esc_html($halloweenshop_site_desc); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-6  pd-0">
						<div class="row tophead m-0">
							<?php if(class_exists('woocommerce')){ ?>
							<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
								<div class="col-lg-9 col-md-9 col-sm-12 pd-0 search-box">
									
									<?php //this prints out your search form 
									get_search_form(); ?>

									<div class="clearfix"></div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-12 pd-0 h-cart signin">
									<!-- <i class="fa fa-heart-o" aria-hidden="true"></i> -->
									<a class="h-cart" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" >
										<i class="fa fa-shopping-bag" aria-hidden="true"></i>
										<?php 
											
											$count = WC()->cart->cart_contents_count;
											$cart_url = wc_get_cart_url();
											if ( $count > 0 ) {
											?>
													<span><?php echo esc_html( $count ); ?></span>
											<?php 
											}
											else {
												?>
												<span><?php echo esc_html_e('0','halloween-shop'); ?></span>
												<?php 
											}
											
										?>
									</a>
									<i class="fa fa-user" aria-hidden="true"></i>
									<a class="signin" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
										<?php esc_html_e('Sign In','halloween-shop'); ?>
									</a>
								</div>
							<?php } ?>
							<?php } ?>
						</div>
						<div class="bottomhead">
							<div class="menu">
								<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-icon">
											<i class="fa fa-bars"></i>
										</span>
									</span>
								</button><!-- .nav-toggle -->
								<div class="header-navigation-wrapper">

								<?php
								if ( has_nav_menu( 'primary_menu' ) || ! has_nav_menu( 'expanded' ) ) {
								?>

									<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'halloween-shop' ); ?>">

										<ul class="primary-menu reset-list-style">

										<?php
										if ( has_nav_menu( 'primary_menu' ) ) {

											wp_nav_menu(
												array(
													'container'  => '',
													'items_wrap' => '%3$s',
													'theme_location' => 'primary_menu',
												)
											);

										} elseif ( ! has_nav_menu( 'expanded' ) ) {

											wp_list_pages(
												array(
													'match_menu_classes' => true,
													'show_sub_menu_icons' => true,
													'title_li' => false,
													'walker'   => new HalloweenShop_Walker_Page(),
												)
											);

										}
										?>
										</ul>
									</nav><!-- .primary-menu-wrapper -->

								<?php } ?>
								</div><!-- .header-navigation-wrapper -->
								<?php
								// Output the menu modal.
								get_template_part( 'template-parts/sections/modal-menu' );
								?>

							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

    </header>
	<div class="clearfix"></div>
</div>

