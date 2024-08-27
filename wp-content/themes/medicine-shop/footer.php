</div>
<footer class="footer-area">  
   <div class="container"> 
		<?php $medicine_shop_footer_widgets_setting = get_theme_mod('medicine_shop_footer_widgets_setting','1');
		do_action('medicine_shop_footer_above'); 
			if ( is_active_sidebar( 'medicine-shop-footer-widget-area' ) ) { 
				if( $medicine_shop_footer_widgets_setting != ''){?> ?>
				<div class="row footer-row"> 
					<?php dynamic_sidebar( 'medicine-shop-footer-widget-area' ); ?>
				</div>  
			<?php } ?>
		<?php }?>
	</div>
	
	<?php 
		$medicine_shop_footer_copyright = get_theme_mod('medicine_shop_footer_copyright','');
	?>
	<?php $medicine_shop_footer_copyright_setting = get_theme_mod('medicine_shop_footer_copyright_setting','1');
	 if( $medicine_shop_footer_copyright_setting != ''){?> 
	<div class="copy-right"> 
		<div class="container">
			<p class="copyright-text">
				<?php
					echo esc_html( apply_filters('medicine_shop_footer_copyright',($medicine_shop_footer_copyright)));
			    ?>
				<?php if($medicine_shop_footer_copyright == "") { ?>
						
						<?php
						    echo esc_html(__('Copyright &copy; 2024,', 'medicine-shop'));
						?>
						<a href="https://www.seothemesexpert.com/wordpress/free-medicine-wordpress-theme/" target="blank">
							<?php
							    echo esc_html(__('Medicine Shop', 'medicine-shop'));
							?>
						</a>
						<span> | </span>
						<a href="https://wordpress.org/">
						    <?php
						        echo esc_html(__('WordPress Theme', 'medicine-shop'));
						    ?>
						</a>

				<?php } ?>
			</p>
		</div>
	</div>
	<?php }?>
	<?php $medicine_shop_scroll_top = get_theme_mod('medicine_shop_scroll_top_setting','1');
      if($medicine_shop_scroll_top == '1') { ?>
		<a id="scrolltop"><span><?php esc_html_e('TOP','medicine-shop'); ?><span></a>
	<?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>