<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php wp_title( ' | ' , true , 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/static/css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/static/css/magic-bootstrap.css" media="all" />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/static/css/bootstrap-theme.min.css" media="all" />-->
	<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	<div class="container page-holder">
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
			    $nav_config = array(
				'theme_location' => '' ,
				'menu' => '' ,
				'container' => 'div' ,
				'container_class' => 'navbar-collapse-inner' ,
				'container_id' => '' ,
				'menu_class' => 'nav navbar-nav' ,
				'menu_id' => 'nav-primary' ,
				'echo' => true ,
				'fallback_cb' => 'wp_page_menu' ,
				'before' => '' ,
				'after' => '' ,
				'link_before' => '' ,
				'link_after' => '' ,
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ,
				'depth' => 0 ,
				'walker' => ''
			    );

			    wp_nav_menu( $nav_config );
			    ?>
			    <form class="navbar-form navbar-right search-form" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
				<div class="form-group">
				    <input type="text" class="form-control search-field" value="" name="s" placeholder="<?php echo __( 'Search' , 'widgistrap' ); ?>">
				</div>
				<button type="submit" class="btn btn-default search-submit"><?php echo __( 'Search' , 'widgistrap' ); ?></button>
			    </form>
			</div><!-- /.navbar-collapse -->
		    </div><!-- /.container-fluid -->
		</nav>
	    </header>
	    <div id="outer-container">