<?php
/**
 * Banner Section
 * 
 * slug: banner
 * title: Banner
 * categories: architect-construction
 */

return array(
    'title'      =>__( 'Banner', 'architect-construction' ),
    'categories' => array( 'architect-construction' ),
    'content'    => '<!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/slider-image.png","id":13,"dimRatio":0,"focalPoint":{"x":0.43,"y":0.73},"minHeight":650,"minHeightUnit":"px","tagName":"main","className":"wp-block-group alignfull"} -->
<main class="wp-block-cover wp-block-group alignfull" style="min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-13" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/slider-image.png" style="object-position:43% 73%" data-object-fit="cover" data-object-position="43% 73%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wow fadeInUp","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group wow fadeInUp"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"slider-banner"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center slider-banner"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontFamily":"nunito"} -->
<h2 class="wp-block-heading has-primary-color has-text-color has-nunito-font-family" style="font-size:40px;font-style:normal;font-weight:700">'. esc_html('Discover The Architectural Excellence Unveiling Innovative Design','architect-construction') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#8c93a6"},"elements":{"link":{"color":{"text":"#8c93a6"}}}},"fontSize":"medium","fontFamily":"nunito"} -->
<p class="has-text-color has-link-color has-nunito-font-family has-medium-font-size" style="color:#8c93a6">'. esc_html('We Specialize in Growing Your Company, No Matter How Small the Start.','architect-construction') .'</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"white","className":"theme-btn","fontSize":"upper-heading","fontFamily":"nunito"} -->
<div class="wp-block-button has-custom-font-size theme-btn has-nunito-font-family has-upper-heading-font-size"><a class="wp-block-button__link has-white-color has-accent-background-color has-text-color has-background wp-element-button" href="#"><strong>'. esc_html('Get Started','architect-construction') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0"}}},"className":"wow fadeInUp"} -->
<div class="wp-block-columns wow fadeInUp" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:0"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"></div>
<!-- /wp:column -->

<!-- wp:column {"className":"video-box"} -->
<div class="wp-block-column video-box"><!-- wp:image {"align":"left","id":19,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image alignleft size-full"><a href="https://youtu.be/D0UnqGm_miA" target="_blank" rel=" noreferrer noopener"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/video-icon.png" alt="" class="wp-image-19"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></main>
<!-- /wp:cover -->',
);