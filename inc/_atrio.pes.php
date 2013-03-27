    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
    <!-- color box -->	
<!--
    <script src="http://gsa.blinktheseries.dev/js/jquery.colorbox-min.js"></script>
		<script>
			$(document).ready(function(){
				$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344, returnFocus:false, width: "50%"});
			});
		</script>
-->
		
<!--
    <script src="js/jquery.fitvids.min.js"></script>       
			<script>
			  $(document).ready(function(){
			    // Target your .container, .wrapper, .post, etc.
			    $("#testDiv").fitVids();
			  });
			</script>
-->

	<!-- Add fancyBox main JS -->
	<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="/js/jquery.fancybox-media.js?v=1.0.5"></script>

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
	</script>
		
		
    <script src="js/compiled.js"></script>       

    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

    <!-- $DEV: Grid Set Overlay 
    <script src="https://get.gridsetapp.com/16974/overlay/"></script>-->
    </body>
</html>
