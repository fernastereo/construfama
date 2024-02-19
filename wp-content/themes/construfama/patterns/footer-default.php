<?php
/**
 * Footer Default
 * 
 * slug: footer-default
 * title: Footer Default
 * categories: architect-construction
 */

return array(
    'title'      =>__( 'Footer Default', 'architect-construction' ),
    'categories' => array( 'architect-construction' ),
    'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}},"color":{"background":"#192427"}},"textColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background-color has-text-color has-background has-link-color" style="background-color:#192427"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"20px","left":"20px"}}},"className":"alignwide wow fadeInUp"} -->
<div class="wp-block-columns alignwide wow fadeInUp" style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"22px"}},"textColor":"white","fontFamily":"nunito"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-nunito-font-family" style="font-size:22px"><strong>'. esc_html('About Us','architect-construction') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.2"},"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}}},"textColor":"cyan-bluish-gray","className":"footer-about","fontSize":"medium","fontFamily":"nunito"} -->
<p class="footer-about has-cyan-bluish-gray-color has-text-color has-link-color has-nunito-font-family has-medium-font-size" style="line-height:2.2">'. esc_html('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','architect-construction') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600"}},"textColor":"white","fontFamily":"nunito"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-nunito-font-family" style="font-size:22px;font-style:normal;font-weight:600">'. esc_html('Quick Links','architect-construction') .'</h2>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"cyan-bluish-gray","className":"footer-menu-box","layout":{"type":"flex","justifyContent":"center"},"fontFamily":"nunito"} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Terms \u0026 Condition","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Privacy Policy","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}}},"textColor":"cyan-bluish-gray","fontSize":"medium","fontFamily":"nunito"} -->
<div class="wp-block-column has-cyan-bluish-gray-color has-text-color has-link-color has-nunito-font-family has-medium-font-size"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600"}},"textColor":"white","fontFamily":"nunito"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-nunito-font-family" style="font-size:22px;font-style:normal;font-weight:600">'. esc_html('Contact Us','architect-construction') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><span class="dashicons dashicons-email-alt"></span>  '. esc_html('support123@example.com','architect-construction') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="dashicons dashicons-phone"></span>  +123 456 7890</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><span class="dashicons dashicons-admin-home"></span>  '. esc_html('123, Red Hills, Chicago,IL, USA','architect-construction') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600"}},"textColor":"white","fontFamily":"nunito"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-nunito-font-family" style="font-size:22px;font-style:normal;font-weight:600">'. esc_html('Recent Post','architect-construction') .'</h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostContent":true,"excerptLength":10,"featuredImageAlign":"left","featuredImageSizeWidth":38,"featuredImageSizeHeight":38,"style":{"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}}},"textColor":"cyan-bluish-gray","fontSize":"medium","fontFamily":"nunito"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"accent","className":"footertext","layout":{"type":"constrained"}} -->
<div class="wp-block-group footertext has-accent-background-color has-background"><!-- wp:paragraph {"align":"center","className":"has-link-color","fontSize":"medium","fontFamily":"nunito"} -->
<p class="has-text-align-center has-link-color has-nunito-font-family has-medium-font-size"><strong><a href="https://www.wpradiant.net/blocks/free-contractor-wordpress-theme/">'. esc_html('Building Contractor WordPress Theme ','architect-construction') .'</a> By <a href="https://www.wpradiant.net/">'. esc_html('WP Radiant','architect-construction') .'</a> | '. esc_html('Proudly powered by','architect-construction') .' <a href="https://wordpress.org/">'. esc_html('WordPress','architect-construction') .'</a></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);