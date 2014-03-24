<?php
global $wp_query;
if( $wp_query -> max_num_pages > 1 ) :
    ?>
    <nav id="nav-below" class="navigation" role="navigation">
        <ul class="pager">
    	<li class="previous"><?php next_posts_link( '&larr; Older' ) ?></li>
    	<li class="next"><?php previous_posts_link( 'Newer &rarr;' ) ?></li>
        </ul>
    </nav>

<?php endif; ?>