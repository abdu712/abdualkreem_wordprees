<?php
/**
 * Title: Banner Block
 * Slug: titan-bookseller/banner-block
 * Categories: banner
 * Block Types: core/template-part/banner-block
 */
?>

<!-- wp:group {"tagName":"main","align":"full","className":"header-banner-box","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group alignfull header-banner-box" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"10%","className":"is-side-box","backgroundColor":"primary"} -->
<div class="wp-block-column is-side-box has-primary-background-color has-background" style="flex-basis:10%"><!-- wp:paragraph {"align":"center","className":"red-header-text","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"lexend-deca"} -->
<p class="has-text-align-center red-header-text has-base-color has-text-color has-link-color has-lexend-deca-font-family" style="font-size:16px;font-style:normal;font-weight:400"><a href="#"><?php echo esc_html('LOGIN','titan-bookseller'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"red-header-text","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontFamily":"lexend-deca"} -->
<p class="has-text-align-center red-header-text has-base-color has-text-color has-link-color has-lexend-deca-font-family" style="font-size:16px;font-style:normal;font-weight:400"><a href="#"><?php echo esc_html('REGISTER','titan-bookseller'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":45,"width":"56px","height":"auto","aspectRatio":"1.0769230769230769","sizeSlug":"full","linkDestination":"custom","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/cart-icon.png" alt="" class="wp-image-45" style="aspect-ratio:1.0769230769230769;width:56px;height:auto"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"id":46,"sizeSlug":"full","linkDestination":"custom","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/search-icon.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","top":"var:preset|spacing|30","bottom":"var:preset|spacing|40","left":"53px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40);padding-left:53px;flex-basis:55%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"lexend-deca"} -->
<p class="has-primary-color has-text-color has-lexend-deca-font-family" style="font-size:18px;font-style:normal;font-weight:500"><?php echo esc_html('Welcome To Our Book Store','titan-bookseller'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"is-slide-heading","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.4","fontSize":"40px"},"color":{"text":"#2b2b35"}},"fontFamily":"lexend-deca"} -->
<h2 class="wp-block-heading is-slide-heading has-text-color has-lexend-deca-font-family" style="color:#2b2b35;font-size:40px;font-style:normal;font-weight:800;line-height:1.4"><?php echo esc_html('Biggest Books Store In','titan-bookseller'); ?> <br><?php echo esc_html('Your Area','titan-bookseller'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7","fontSize":"15px","fontStyle":"normal","fontWeight":"300"},"color":{"text":"#2b2b35"}},"fontFamily":"lexend-deca"} -->
<p class="has-text-color has-lexend-deca-font-family" style="color:#2b2b35;font-size:15px;font-style:normal;font-weight:300;line-height:1.7"><?php echo esc_html('It is a long established fact that a reader will distracted by the readable content of a ','titan-bookseller'); ?><br><?php echo esc_html('page hen looking at its layout.The point of using','titan-bookseller'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"base","className":"theme-btn","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"lexend-deca"} -->
<div class="wp-block-button has-custom-font-size theme-btn has-lexend-deca-font-family" style="font-size:14px;font-style:normal;font-weight:600"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="#" style="padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html('EXPLORE MORE','titan-bookseller'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%","style":{"spacing":{"padding":{"top":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;flex-basis:35%"><!-- wp:image {"id":33,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/banner-img.png" alt="" class="wp-image-33" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:group {"className":"middle-section-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group middle-section-box" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns "><!-- wp:column {"width":"64%","style":{"color":{"background":"#2f2f33"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column has-background" style="background-color:#2f2f33;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--60);flex-basis:64%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:columns {"className":"box-row"} -->
<div class="wp-block-columns box-row"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center","className":"middle-wrap"} -->
<div class="wp-block-columns are-vertically-aligned-center middle-wrap"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"id":38,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/small-img-1.png" alt="" class="wp-image-38"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"color":{"text":"#b5b5c2"},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"lexend-deca"} -->
<p class="has-text-color has-lexend-deca-font-family" style="color:#b5b5c2;font-size:17px;font-style:normal;font-weight:400"><?php echo esc_html('WARANTY','titan-bookseller'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"700"}},"textColor":"base","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-lexend-deca-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:700"><?php echo esc_html('GOOD QUALITY','titan-bookseller'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"verticalAlignment":"center","className":"middle-wrap"} -->
<div class="wp-block-columns are-vertically-aligned-center middle-wrap"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:image {"id":39,"sizeSlug":"full","linkDestination":"none","align":"right"} -->
<figure class="wp-block-image alignright size-full"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/small-img-2.png" alt="" class="wp-image-39"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"color":{"text":"#b5b5c2"},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"400"}},"fontFamily":"lexend-deca"} -->
<p class="has-text-color has-lexend-deca-font-family" style="color:#b5b5c2;font-size:17px;font-style:normal;font-weight:400"><?php echo esc_html('PAYMENT','titan-bookseller'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"700"}},"textColor":"base","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-lexend-deca-font-family" style="margin-top:0;margin-bottom:0;font-size:20px;font-style:normal;font-weight:700"><?php echo esc_html('EASY','titan-bookseller'); ?> &amp; <?php echo esc_html('SAVE','titan-bookseller'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"29.2%","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"primary"} -->
<div class="wp-block-column has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);flex-basis:29.2%"><!-- wp:columns {"className":"box-row","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns box-row" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"18px"}},"textColor":"base","fontFamily":"lexend-deca"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-lexend-deca-font-family" style="font-size:18px;font-style:normal;font-weight:500"><?php echo esc_html('Meet Our Cinema Staff','titan-bookseller'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"id":41,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/staff-img.png" alt="" class="wp-image-41"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->