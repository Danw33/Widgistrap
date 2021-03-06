<?php get_header(); ?>

<div class="container-fluid single">
    <div class="row">
	<div id="content-container" class="col-md-9">
	    <section id="content" role="main">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php if( ! post_password_required() ) comments_template( '' , true ); ?>
			<?php
		    endwhile;
		endif;
		?>
		<footer class="footer">
		    <?php get_template_part( 'nav' , 'below-single' ); ?>
		</footer>
	    </section>
	</div><!-- /#content-container -->

	<div id="sidebar-container" class="col-md-3">
	    <?php get_sidebar(); ?>
	</div><!-- /#sidebar-container -->
    </div>
</div><!-- /.container-fluid -->

<?php get_footer(); ?>