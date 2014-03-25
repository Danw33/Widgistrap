<?php
/*
 * Widgistrap Copyright (C) 2014 Daniel Wilson
 *
 * This theme is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

get_header();
?>

<div class="container-fluid index">
    <div class="row">
	<div id="content-container" class="col-md-9">
	    <section id="content" role="main">
		<?php if( have_posts() ) : ?>
    		<header class="header">
    		    <h1 class="entry-title"><?php printf( __( 'Search Results for: %s' , 'widgistrap' ) , get_search_query() ); ?></h1>
    		</header>
		    <?php while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
		    <?php endwhile; ?>
		    <?php get_template_part( 'nav' , 'below' ); ?>
		<?php else : ?>
    		<article id="post-0" class="post no-results not-found">
    		    <header class="header">
    			<h2 class="entry-title"><?php _e( 'Nothing Found' , 'widgistrap' ); ?></h2>
    		    </header>
    		    <section class="entry-content">
    			<p><?php _e( 'Sorry, nothing matched your search. Please try again.' , 'widgistrap' ); ?></p>
			    <?php get_search_form(); ?>
    		    </section>
    		</article>
		<?php endif; ?>
	    </section>
	</div><!-- /#content-container -->

	<div id="sidebar-container" class="col-md-3">
	    <?php get_sidebar(); ?>
	</div><!-- /#sidebar-container -->
    </div>
</div><!-- /.container-fluid -->

<?php get_footer(); ?>