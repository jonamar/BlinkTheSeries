    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
 		
    <script src="js/compiled.js"></script>       

			<!-- Fancy Box -->
			<script type="text/javascript">
				$(document).ready(function() {
		
					/*
					 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
					*/
					$('.fancybox-media')
						.attr('rel', 'media-gallery')
						.fancybox({
							openEffect : 'fade',
							closeEffect : 'none',
							prevEffect : 'none',
							nextEffect : 'none', 
		
							arrows : false,
							helpers : {
								media : {},
							}
						});
		
				});
				
				$(document).ready(function() {

					$('.e7').hover(
						function(){ $('.overlay1').addClass('flash') },
						function(){ $('.overlay1').removeClass('flash') }
					);
					
				});

			</script>

    <script>
        var _gaq=[['_setAccount','UA-32898948-1'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

    </body>
</html>
