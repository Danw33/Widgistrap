<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php wp_title( ' | ' , true , 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all" />
	<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
	    <nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
		    <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ) , 'widgistrap' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
		    </div>
		    <div class="collapse navbar-collapse" id="navbar-collapse">
			<?php
			wp_nav_menu( array(
			    'theme_location' => 'main-menu' ) );
			get_search_form();
			?>
		    </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	    </nav>
        </header>
        <div id="outer-container">