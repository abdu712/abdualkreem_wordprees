</div>
<footer class="footer-area">  
	<div class="f-oly"></div>
	<div class="image">
	
	</div>

	<div class="footer-top">
		<div class="container content"> 
			 <?php do_action('halloweenshop_footer_above'); 
			  if ( is_active_sidebar( 'halloween-shop-footer-widget-area' ) ) { ?>	
				 <div class="row footer-row"> 
					 <?php  dynamic_sidebar( 'halloween-shop-footer-widget-area' ); ?>
				 </div>  
			 <?php } ?>
		 </div>
	</div>
	
	<?php 
		$footer_copyright = get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');

		
	?>
	<div class="copy-right"> 
		<div class="container"> 
			<?php 
			if ( ! empty( $footer_copyright ) ): ?>
			<?php 	
				$halloweenshop_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="https://www.buywpthemes.net/products/free-halloween-wordpress-theme/" target="_blank">Halloween Shop</a>', 'halloween-shop')),
				);
			?>
		</div> 
		<div class="copyright-text">
			<div class="container">   
				<div class="row m-0"> 
					<div class="col-md-6"> 
						<div class="s-icn">
							<li><a href="<?php echo esc_url(get_theme_mod('footer_fblink')); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo esc_url(get_theme_mod('footer_instagramlink')); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo esc_url(get_theme_mod('footer_twitterlink')); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo esc_url(get_theme_mod('topheader_linkedinlink')); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
						</div>
					</div>
					<div class="col-md-6">                         
						<p >
							<?php
								echo apply_filters('halloweenshop_footer_copyright', wp_kses_post(halloweenshop_str_replace_assoc($halloweenshop_copyright_allowed_tags, $footer_copyright)));
							?>
						</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer Area  -->

<button class="scroll-top">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

</div>		
<?php wp_footer(); ?>
</body>
</html>

