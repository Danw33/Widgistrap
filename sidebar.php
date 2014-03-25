<aside id="sidebar" role="complementary">
    <div id="primary" class="widget-area">
	<ul class="widget-area-list">
	    <?php if( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
    	    <li id="search" class="primary-widget-area-widget widget widget-container widget_search">
		    <?php get_search_form(); ?>
    	    </li>
	    <?php endif; ?>
	</ul>
    </div>
</aside>