<?php
/*
 * Template Name: WidgiPage (Two Column)
 * Description: A Two-Column Widgetised Page
 */

get_header();
?>

<div class="container-fluid widgipage widgipage-two">
    <!-- Post/Page Row -->
    <div class="row">
	<div id="content-container" class="col-md-12">
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
    </div>
    <!-- Magic Widgi-Row -->
    <div class="row">
	<div id="widgi-container-left" class="col-md-6">
	    <?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</div><!-- /#sidebar-container -->
	<div id="widgi-container-right" class="col-md-6">
	    <?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</div><!-- /#sidebar-container -->
    </div>
</div><!-- /.container-fluid -->

<?php get_footer(); ?>