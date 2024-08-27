<section id="slider-section" class="slider-area home-slider">
  <!-- <div class="slideinning"></div> -->
  <!-- start of hero --> 
  <section class="hero-slider hero-style">
      <div class="halloween_shopswiper-container">
          <div class="swiper-wrapper">
            <?php for($p=1; $p<6; $p++) { ?>
            <?php if( get_theme_mod('slider'.$p,false)) { ?>
            <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
            <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
              $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
            <?php 
              if(has_post_thumbnail()){
                $img = esc_url($image[0]);
              }
              if(empty($image)){
                $img = get_template_directory_uri().'/assets/images/default.png';
              }

            ?>

              <div class="halloween_shopswiper-slide">
                  <div class="halloween_shopslide-inner slide-bg-image">      
                      <div class="slidercontent">
                          <div class="slide-title">
                            <h2><?php the_title_attribute(); ?></h2>   
                          </div>    
                          <div class="slide-text" >
                              <?php the_excerpt(); ?>
                          </div>
                          <div class="slide-btns">
                              <a class="ShopNow" href="<?php echo esc_html(get_theme_mod('sliderbtnlink')); ?>"><?php esc_html_e('Shop Now','halloween-shop'); ?></a>   
                          </div>
                      </div>
                      <div class="clearfix"></div>
                    <img class="slide-mainimg slidershape1" src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">
                  </div>
              </div>
            <?php endwhile;
               wp_reset_postdata(); ?>
            <?php } } ?>
            <div class="clear"></div> 

          </div>
         <!-- swipper controls -->
          <!-- <div class="halloween_shopswiper-pagination"></div> -->
          <!-- <div class="halloween_shopswiper-button-next"><i class="fa fa-angle-right"></i></div>
          <div class="halloween_shopswiper-button-prev"><i class="fa fa-angle-left"></i></div> -->
      </div>
  </section>
  <!-- end of hero slider -->
</section>
