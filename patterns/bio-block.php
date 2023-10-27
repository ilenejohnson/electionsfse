<?php
/**
 * Title: Bio Block
 * Slug: electionsfse/bio-block
 * Categories: electionsfse, electionsfse-page-parts
 *
 */

$url = trailingslashit(get_template_directory_uri()) . 'assets/images/header-image-pic.png';
?>
<!-- wp:group {"align":"full","backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><strong>meet the candidate</strong></h2>
<!-- /wp:heading -->

<!-- wp:media-text {"mediaPosition":"right","mediaId":193,"mediaLink":"http://wp.tdev/header-image-pic/","mediaType":"image","verticalAlignment":"top"} -->
<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-top"><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">Lorem ipsum dolor sit amet. Aut blanditiis autem id dolores officiis cum dicta omnis rem obcaecati reprehenderit et maiores sint aut nihil officiis est alias quia. Sit aperiam dolor non molestiae tempore ea ratione asperiores vel internos voluptate et enim sint qui quos sunt. In nemo iure sed commodi distinctio et quidem praesentium sit cumque aliquam non facere reiciendis. Sed sequi laudantium non numquam ducimus non rerum consequuntur est magnam voluptas est natus nihil non facilis quia. Ut saepe laboriosam rem galisum blanditiis in veniam aliquam eos perspiciatis illum non odit voluptatem et magnam eligendi ad unde ullam. Ad nulla facilis et similique cupiditate sed dolor dolores et voluptas modi eum quae quia. Cum harum fugiat cum dolor voluptate sed autem numquam qui quam cupiditate.</p>
<!-- /wp:paragraph --></div><figure class="wp-block-media-text__media"><img src="<?php echo esc_url($url) ?>" alt="" class="wp-image-193 size-full"/></figure></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->