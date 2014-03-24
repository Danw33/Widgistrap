<footer id="footer" role="contentinfo">
    <div id="copyright">
	<?php
	echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.' , 'widgistrap' ) , '&copy;' , date( 'Y' ) , esc_html( get_bloginfo( 'name' ) ) ) ;
	echo sprintf( __( ' Theme By: %1$s.' , 'widgistrap' ) , '<a href="http://www.danielwilson.me/">Daniel Wilson</a>' ) ;
	?>
    </div>
</footer>
</div><!-- /#outer-container -->
<?php wp_footer() ; ?>
</body>
</html>