<?php
/*
 * Wigistrap Copyright (C) 2014 Daniel Wilson
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

<div class="container-fluid">
    <div class="row">
	<div id="content-container" class="col-md-8">
	    <section id="content" role="main">
		<?php
		if( have_posts() ) {
		    while( have_posts() ) {
			the_post();
			get_template_part( 'entry' );
			comments_template();
		    }
		}

		get_template_part( 'nav' , 'below' );
		?>
	    </section>
	</div><!-- /#content-container -->

	<div id="sidebar-container" class="col-md-4">
	    <?php get_sidebar(); ?>
	</div><!-- /#sidebar-container -->
    </div>
</div><!-- /.container-fluid -->

<?php get_footer(); ?>