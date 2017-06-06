
	        	

    </div> <!-- end #canvas -->
         
      <div id="footer">
      	<div class="footer-inner">
		<?php if (is_active_sidebar( 'footer_content')): ?>
	 	    <?php dynamic_sidebar( 'footer_content' ); ?>
	 	<?php endif; ?>
       <p id="copyright">Copyright &copy; <?php echo date('Y');?>  <?php bloginfo('name'); ?> created by <a href="http://mobiapp121.com/">MobiApp121.com</a></p>
      	</div><!-- end .footer-inner -->
      </div><!-- end #footer -->
      
 
        <?php wp_footer(); ?>
  </body>
</html>