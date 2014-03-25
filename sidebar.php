<aside id="sidebar" role="complementary">
    <?php if( is_active_sidebar( 'primary-right' ) ) : ?>
        <div id="primary" class="widget-area">
    	<ul class="widget-area-list">
		<?php dynamic_sidebar( 'primary-right' ); ?>
    	</ul>
        </div>
    <?php endif; ?>
</aside>