<?php
/**
 * Title: 404 page
 * Slug: electionsfse/template-404
 * Categories:  template
 */

$url = trailingslashit(get_template_directory_uri()) . 'assets/images/404.png';


?>

<!-- wp:group {"align":"full","style":{"color":{"background":"#eeeeee"}},"textColor":"text-color","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-text-color-color has-text-color has-background" style="background-color:#eeeeee"><!-- wp:image {"align":"center","width":616,"sizeSlug":"large","style":{"color":{"duotone":"unset"}}} -->
    <figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url($url) ?>" alt="" style="width:616px" width="616"/></figure>
 <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"textColor":"text-color","fontSize":"xx-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-text-color-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:800">OOPS!</h2>
    <!-- /wp:heading -->
    
  <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"black","fontSize":"medium"} -->
<p class="has-text-align-center has-black-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600">The page you are looking for is not here.  </p>
<!-- /wp:paragraph --></div>
    <!-- /wp:group -->





<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center"} -->
<div class="wp-block-button"><a href="<?php echo home_url(); ?>" class="wp-block-button__link has-text-align-center wp-element-button"><strong>Back to Home</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->