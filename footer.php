	   <footer >
	      <div id="footer-1">
		  <?php
			if(is_active_sidebar('footer-1')){
			dynamic_sidebar('footer-1');
			}
			
		  ?>
		  </div>
		 
		</footer>
	  <?php wp_footer(); ?>
	</body>
	</html>