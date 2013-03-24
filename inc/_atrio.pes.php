    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

        <script src="js/compiled.js"></script>
        
        <script>
				$(document).ready(function(){
				    function changeText(id, text){
				        $("#sequence ul li:nth-child("+id+")").children().children(".sequence-class").text(text);
				    }
				
				    var options = {
				        autoPlayDelay: 1000
				        }
				
				    var sequence = $("#sequence").sequence(options).data("sequence"); //initiate Sequence
				
				});
        </script>
       

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <!-- $DEV: Grid Set Overlay -->
        <script src="https://get.gridsetapp.com/16974/overlay/"></script>
    </body>
</html>
