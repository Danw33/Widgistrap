<footer id="footer" role="contentinfo">
    <div class="container footer-container">
	<p class="text-muted"><?php
	    echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.' , 'widgistrap' ) , '&copy;' , date( 'Y' ) , esc_html( get_bloginfo( 'name' ) ) );
	    echo ' ' . sprintf( __( 'Theme By %1$s.' , 'widgistrap' ) , '<a href="http://www.danielwilson.me/">Daniel Wilson</a>' );
	    ?></p>
    </div>
</footer>
</div><!-- /#outer-container -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/static/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</div><!-- /.page-holder -->
</body>
</html>