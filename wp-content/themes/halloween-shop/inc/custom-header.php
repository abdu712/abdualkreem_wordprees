<?php
function halloweenshop_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'halloweenshop_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'halloweenshop_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'halloweenshop_custom_header_setup' );

if ( ! function_exists( 'halloweenshop_header_style' ) ) :

function halloweenshop_header_style() {
	$header_text_color = get_header_textcolor();

  	$bestseller_disable_section = esc_attr(get_theme_mod('bestseller_disable_section','YES'));
  	$collection_disable_section = esc_attr(get_theme_mod('collection_disable_section','YES'));


	$halloweenshop_bestseller_section_topmargin = esc_attr(get_theme_mod('halloweenshop_bestseller_section_topmargin','0'));
	$halloweenshop_bestseller_section_bottommargin = esc_attr(get_theme_mod('halloweenshop_bestseller_section_bottommargin','0'));
  

	?>
	<style type="text/css">


		<?php 
		
		?>


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		


		
	 
	
		header .tpf-head {
			background: <?php echo esc_attr(get_theme_mod('header_topheadbgcolor')); ?>;
		}

		header .tpf-head p {
			color: <?php echo esc_attr(get_theme_mod('header_topheadtextcolor')); ?>;
		}
		
		header .head-oly {
			background: <?php echo esc_attr(get_theme_mod('header_bgcolor')); ?>;
		}

		.primary-menu a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor,
		.primary-menu li.current-menu-item > a, .primary-menu li.current-menu-item > .link-icon-wrapper > a {
			color: <?php echo esc_attr(get_theme_mod('header_menushovercolor')); ?>;
		}

		.primary-menu li ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.primary-menu ul {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu > li > .icon {
			color: <?php echo esc_attr(get_theme_mod('header_submenusiconcolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor {
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?> !important;
		}

		.nav-toggle {
			background: <?php echo esc_attr(get_theme_mod('header_mobilemenutogglebgcolor')); ?>;
		}

		.nav-toggle {
			color: <?php echo esc_attr(get_theme_mod('header_mobilemenutoggleiccolor')); ?>;
		}

		header .tophead i,header .signin,.search-submit i,header input[type="search"],
		header .h-cart span,header .search-box {
			color: <?php echo esc_attr(get_theme_mod('header_iconscolor')); ?> !important;
			border-color: <?php echo esc_attr(get_theme_mod('header_iconscolor')); ?> !important;
		}

		header button[type="submit"],header .h-cart span {
			background: <?php echo esc_attr(get_theme_mod('header_searchiconandnobgcolor')); ?> !important;
		}
	




		.hero-style .slide-title h2 {
			color: <?php echo esc_attr(get_theme_mod('slider_titlecolor')); ?> !important;
		}


		.hero-style .slide-text p {
			color: <?php echo esc_attr(get_theme_mod('slider_descriptioncolor')); ?>;
		}

		.hero-style .slide-btns a {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxt1color')); ?> !important;
		}

		.hero-style .slide-btns a {
			background: transparent linear-gradient(90deg, <?php echo esc_attr(get_theme_mod('slider_btnbgcolor1')); ?> 0%, <?php echo esc_attr(get_theme_mod('slider_btnbgcolor2')); ?> 100%) 0% 0% no-repeat padding-box;
		}

		.hero-style .slide-btns a:hover {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxthovercolor')); ?> !important;
		}




		#bestsellerproduct-product-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('bestseller_headingcolor')); ?>;
		}

		#bestsellerproduct-product-section .section-title h3 {
			color: <?php echo esc_attr(get_theme_mod('bestseller_subheadingcolor')); ?>;
		}

		#bestsellerproduct-product-section .product-grid {
			background: <?php echo esc_attr(get_theme_mod('bestseller_boxbgcolor')); ?>;
		}

		#bestsellerproduct-product-section .pcontent h3  {
			color: <?php echo esc_attr(get_theme_mod('bestseller_titlecolor')); ?>;
		}

		#bestsellerproduct-product-section .product-bx .price,
		#bestsellerproduct-product-section .woocommerce-Price-amount ins, #bestsellerproduct-product-section .woocommerce-Price-amount.amount{
			color: <?php echo esc_attr(get_theme_mod('bestseller_pricecolor')); ?>;
		}

		#bestsellerproduct-product-section .sec-btn a {
			color: <?php echo esc_attr(get_theme_mod('bestseller_btntxtcolor')); ?>;
		}

		#bestsellerproduct-product-section .sec-btn a {
			background: transparent linear-gradient(180deg,  <?php echo esc_attr(get_theme_mod('bestseller_btnbgcolor1')); ?> 0%,  <?php echo esc_attr(get_theme_mod('bestseller_btnbgcolor2')); ?> 100%) 0% 0% no-repeat padding-box;
		}

		#bestsellerproduct-product-section .sec-btn a:hover {
			color: <?php echo esc_attr(get_theme_mod('bestseller_btntxthovercolor')); ?>;
		}


		#bestsellerproduct-product-section {
			margin-top: <?php echo apply_filters('halloweenshop_bestseller', $halloweenshop_bestseller_section_topmargin); ?>em;
			margin-bottom: <?php echo apply_filters('halloweenshop_bestseller', $halloweenshop_bestseller_section_bottommargin); ?>em;
		}




		#collection-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('collection_headingcolor')); ?>;
		}

		#collection-section .section-title h3 {
			color: <?php echo esc_attr(get_theme_mod('collection_subheadingcolor')); ?>;
		}

		#collection-section .swiper-slide {
			background: <?php echo esc_attr(get_theme_mod('collection_boxbgcolor')); ?>;
		}

		#collection-section .pro-cat-content h5 a {
			color: <?php echo esc_attr(get_theme_mod('collection_titlecolor')); ?>;
		}

		
	

		.footer-area .s-icn li i {
			color: <?php echo esc_attr(get_theme_mod('footer_socialiconscolor')); ?>;
		}

		.footer-area .s-icn li {
			background: <?php echo esc_attr(get_theme_mod('footer_socialiconbgcolor')); ?>;
		}

		.copy-right {
			background: <?php echo esc_attr(get_theme_mod('footer_copyrightbgcolor')); ?>;
		}

		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li:before,.footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($bestseller_disable_section == 1):
	?>
		#bestsellerproduct-product-section {
			display: none;
		}
	<?php
		else :
	?>
		#bestsellerproduct-product-section {
			display: block;
		}
	<?php endif; ?>

	<?php
        if ($collection_disable_section == 1):
	?>
		#collection-section {
			display: none;
		}
	<?php
		else :
	?>
		#collection-section {
			display: block;
		}
	<?php endif; ?>



	</style>
	<?php
}
endif;
