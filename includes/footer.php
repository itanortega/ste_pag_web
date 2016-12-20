        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <script>
            $(function(){
            	$(document).on( 'scroll', function(){
            		if ($(window).scrollTop() > 100) {
            			$('.scroll-top-wrapper').addClass('show');
            		} else {
            			$('.scroll-top-wrapper').removeClass('show');
            		}
            	});
            });

	        $('.scroll-top-wrapper').on('click', scrollToTop);

            function scrollToTop() {
            	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
            	element = $('body');
            	offset = element.offset();
            	offsetTop = offset.top;
            	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
            }
        </script>
    </body>
</html>
