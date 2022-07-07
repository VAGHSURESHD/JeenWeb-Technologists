<?php
/**
 * 404 content.
 */
return array(
	'title'      => __( '404', 'financio' ),
	'categories' => array( 'financio-basic' ),
	'content'    => '
            <!-- wp:group {"layout":{"wideSize":"","contentSize":""}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url( FINANCIO_URI ) . '/assets/img/achievement-analysis-brainstorming-business-business-plan-caucasian-1448601-pxhere.com.jpg","id":74,"dimRatio":90,"overlayColor":"black","focalPoint":{"x":"0.48","y":"0.51"},"contentPosition":"center center"} -->
            <div class="wp-block-cover"><span aria-hidden="true" class="has-black-background-color has-background-dim-90 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-74" alt="" src="' . esc_url( FINANCIO_URI ) . '/assets/img/achievement-analysis-brainstorming-business-business-plan-caucasian-1448601-pxhere.com.jpg" style="object-position:48% 51%" data-object-fit="cover" data-object-position="48% 51%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"260px","bottom":"260px"}}},"layout":{"wideSize":"1140px"}} -->
            <div class="wp-block-group" style="padding-top:260px;padding-bottom:260px"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"30px"}}},"fontSize":"extra-large"} -->
            <h2 class="has-text-align-center has-extra-large-font-size" style="margin-bottom:30px">Page Not Found</h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">It looks like nothing was found at this location. Maybe try a search?</p>
            <!-- /wp:paragraph -->
            <!-- wp:spacer {"height":"20px"} -->
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:search {"label":"Search...","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"radius":"5px"}},"borderColor":"fifth"} /--></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:group -->',
);
