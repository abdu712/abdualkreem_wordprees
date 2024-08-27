<div class="<?php if(esc_attr(get_theme_mod('halloweenshop_bestseller_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('halloweenshop_bestseller_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
<section id="bestsellerproduct-product-section" class="ht-section">
	
		<div class="bestsellerproduct-posts-box">
		<?php
			$bestsellerproduct_heading = get_theme_mod('bestsellerproduct_heading', 'EXPLORE OUR');
			$bestsellerproduct_subheading = get_theme_mod('bestsellerproduct_subheading', 'Best Seller');

		?> 
			<div class="row justify-content-center m-0">
				<div class="sec-titlebx">
					<div class="titl-brd"></div>
					<div class="section-title">
						<?php if($bestsellerproduct_heading){ ?>	
	                            <h2> <?php echo ($bestsellerproduct_heading);  ?></h2>
	                    <?php }?>
								<h3> <?php echo ($bestsellerproduct_subheading);  ?></h3>
							
						
					</div>
				</div>  
			</div>
			<div class="row m-0">  
				<?php
				if(function_exists('woocommerce_template_loop_add_to_cart') && function_exists('WC')){
					$meta_query   = WC()->query->get_meta_query();
					$tax_query   = WC()->query->get_tax_query();
					$tax_query[] = array(
						'taxonomy' => 'product_visibility',
						'field'    => 'name',
						'terms'    => 'featured',
						'operator' => 'IN',
					);
					$args = array(
						'post_type'   =>  'product',
						'stock'       =>  1,
						'posts_per_page' => 8, 
						'orderby'     =>  'date',
						'order'       =>  'DESC',
						'meta_query'  =>  $meta_query,
						'tax_query'   => $tax_query,
					);
					$loop = new WP_Query( $args );
					if($loop->post_count > 0){
						while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<div class=" col-lg-3 col-md-6 col-sm-6 product-bx ">  
					<div class="product-grid ">
						<!-- <div class="probg"></div> -->
						<div class="product-image">
							<a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php if (has_post_thumbnail( $loop->post->ID )) 
								echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
								else
									echo '<img class="pic-1" src="'.get_template_directory_uri().'/assets/images/default.png" alt="Placeholder" />'; ?>
								
							</a>
						</div>
						<div class="productcontent-wrap">
							<?php
								$productbutton = get_theme_mod('product_txt', 'Add to cart'); 
							?>
							<div class="pcontent">
								<a class="add-to-cart" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">	
									<h3><?php the_title(); ?></h3>
								</a>
							
								<span class="price"><?php echo $product->get_price_html(); ?></span>
								<?php if( get_theme_mod('product_button_display','show' ) == 'show') :
									?>	
									<div class="sec-btn">

										<a href="<?php echo esc_url(get_permalink()); ?>" class="more-button"><span></span><?php echo ($productbutton );  ?>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
									    </a>
								</div>
								<?php endif ?>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div> 
				<?php
					endwhile; 
						}else{ ?>
					<div class="alert alert-warning text-center">
						<strong>Sorry, no featured products to show.</strong>
					</div>
					<?php
							}
							?>
					<?php
					
				}?>
			</div> 	
		</div>
	
	<div class="clearfix"></div>
</section>
</div>