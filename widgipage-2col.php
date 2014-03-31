<?php
/*
 * Template Name: WidgiPage (Two Column)
 * Description: A Two-Column Widgetised Page
 */

get_header();
?>

<div class="container-fluid widgipage widgipage-two">
    <!-- Magic Widgi-Row -->
    <div class="row">
	<div id="widgi-container-left" class="col-md-6">
	    <?php dynamic_sidebar( 'widgipage-col-1' ); ?>
	</div><!-- /#widgi-container-left -->
	<div id="widgi-container-right" class="col-md-6">
	    <?php dynamic_sidebar( 'widgipage-col-2' ); ?>
	</div><!-- /#widgi-container-right -->
    </div>
</div><!-- /.container-fluid -->

<?php get_footer(); ?>