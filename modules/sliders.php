<link rel="stylesheet" href="css/jquery.animateSlider.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/slider.css">



	<ul class="anim-slider">

		<!-- Slide No1 -->
		<li class="anim-slide">
			<h1 id="s1t1">PAGUE A TIEMPO SU IMPUESTO VEHICULAR EVITE SANCIONES E INTERESES POR MORA</h1>
			<h4 id="s1d1">Cancele  en los tres primeros meses del año sus impuestos evítese sanciones, intereses, embargos</h4>
			<h2 id="s1s1">DENOS EL GUSTO DE ATENDERLOS LE PODEMOS CANCELAR SUS IMPUESTOS EN CUALQUIER PARTE DEL PAIS</h2>
		</li>


		<!-- Slide No2 -->
		<li class="anim-slide">
			<h1 id="s2t1">LICENCIA DE CONDUCCIÓN</h1>
			<h4 id="s2d1">Le asesoramos en la obtención de su licencia de conducción, primera vez, refrendación, duplicado, otros. De acuerdo a la necesidad que usted tenga. Nuestra experiencia en el mercado por más de veinte años  hace que le garanticemos nuestro trabajo en el mercado</h4>
		</li>

		<!-- Slide No3 -->
		<li class="anim-slide">
			<h1 id="s3t1">¿POR QUÉ  LES SIGUE LLEGANDO EL FORMULARIO DE AUTOLIQUIDACIÓN DE IMPUESTOS  A SU NOMBRE, A PESAR DE QUE EL AUTO YA NO LES PERTENECE?</h1>
			<h4 id="s3d1">Si la licencia de transito del vehículo que vendió sigue estando a su nombre, ante los ojos de la ley usted sigue teniendo obligaciones sobre él</h4>
		</li>

		<!-- Arrows -->
		<nav class="anim-arrows">
			<span class="anim-arrows-prev"></span>
			<span class="anim-arrows-next"></span>
		</nav>
		<!-- Dynamically created dots -->

	</ul>

<script src="js/jquery.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.animateSlider.js"></script>


<script>
 $(".anim-slider").animateSlider(
 	{
 		autoplay	:true,
 		interval	:8000,
 		animations 	:
		{
			0	: 	//Slide No1
			{
				h1:{
					show   	  : "bounceIn",
					hide 	  : "flipOutX",
					delayShow : "delay1s"
				},
				h4:{
					show 	  : "bounceInUp",
					hide 	  : "fadeOutLeftBig",
					delayShow : "delay1-5s"
				},
				h2:{
					show 	  : "fadeInUpBig",
					hide 	  : "fadeOutDownBig",
					delayShow : "delay2s"
				}
			},
			1	: //Slide No2
			{
				h1:{
					show   	  : "bounceIn",
					hide 	  : "flipOutX",
					delayShow : "delay1s"
				},
				h4:{
					show 	  : "bounceInUp",
					hide 	  : "fadeOutLeftBig",
					delayShow : "delay1-5s"
				}
			},
			2	: //Slide No3
			{
				h1:{
					show   	  : "bounceIn",
					hide 	  : "flipOutX",
					delayShow : "delay1s"
				},
				h4:{
					show 	  : "bounceInUp",
					hide 	  : "fadeOutLeftBig",
					delayShow : "delay1-5s"
				}
			}
		}
 	});
</script>
