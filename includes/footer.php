        <footer>
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-4 widget">
							<h3>Siguenos:</h3><ul><h5><a target="_blank" class="iconos-sociales2" href="https://www.facebook.com/Servitramites-Exprees-256915627738258/"><span class="fa fa-facebook iconos">&nbsp;<span class="redes-sociales-footer">Facebook&nbsp;</span></span></a></h5></ul>					  		<br>
					  		<h3>Contactos:</h3><ul><h5><span class="fa fa-road iconos">&nbsp;Calle 12 No. 20-06 Av. Boyaca Pasto Nariño Colombia</span></h5><h5><span class="fa fa-phone iconos">&nbsp;722 7472  - Fax: 729 3998</span></h5><h5><span class="fa fa-mobile iconos">&nbsp;315 483 3830</span></h5><h5><span class="fa fa-envelope iconos">&nbsp;Info@servitramitesExpress.net</span></h5></ul>
						</div>
						<div class="col-xs-12 col-md-8 widget">
						<br>
							<iframe src="https://www.google.com/maps/d/embed?mid=zFDWK2fQUrk4.kKnfjXCbWqWw&amp;z=15" width="100%" height="300"></iframe>
						</div>
					</div>
				</div>
				<div class="container mg">
						<div class="pull-right"><br>© Servitramites Express 2016, Todos los derechos reservados.</div>
				</div>
			</div>
		</footer>




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
