<?php
/*
 * Template Name: WidgiPage (Three Column)
 * Description: A Three-Column Widgetised Page
 */

get_header();
?>

<div class="container-fluid widgipage widgipage-three">
    <!-- Magic Widgi-Row -->
    <div class="row">
	<div id="widgi-container-left" class="col-md-4">
	    <?php dynamic_sidebar( 'widgipage-col-1' ); ?>
	</div><!-- /#widgi-container-left -->
	<div id="widgi-container-centre" class="col-md-4">
	    <?php dynamic_sidebar( 'widgipage-col-2' ); ?>
	</div><!-- /#widgi-container-centre -->
	<div id="widgi-container-right" class="col-md-4">
	    <?php dynamic_sidebar( 'widgipage-col-3' ); ?>
	</div><!-- /#widgi-container-right -->
    </div>
</div><!-- /.container-fluid -->

<?php get_footer(); ?>