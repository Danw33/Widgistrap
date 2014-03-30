<aside id="sidebar" role="complementary">
    <div id="primary" class="widget-area">
	<?php
	if( ! dynamic_sidebar( 'primary-widget-area' ) ) :
	    get_search_form();
	endif;
	?>
    </div>
</aside>