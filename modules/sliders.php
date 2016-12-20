<link rel="stylesheet" href="css/jquery.animateSlider.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/slider.css">




	<ul class="anim-slider">

		<!-- Slide No1 -->
		<li class="anim-slide">
			<h1 id="slider">Animate Slider</h1>
			<h2 id="plugin">jQuery Plugin</h2>
			<h3 id="license">MIT License</h3>
			<h4 id="version">v.1.0.6</h4>
		</li>


		<!-- Slide No2 -->
		<li class="anim-slide">
			<h3 id="todo">So what you can do ...</h3>

			<h3 id="bounce">bounce</h3>
			<h4 id="bounceUp">bounceInUp</h4>
			<h4 id="bounceRight">bounceInRight</h4>

			<h3 id="fade">fade</h3>
			<h4 id="fadeUp">fadeInUp</h4>
			<h4 id="fadeDown">fadeInDown</h4>

			<h3 id="rotate">rotate</h3>
			<h4 id="rotateRight">rotateInUpRight</h4>
			<h4 id="rotateLeft">rotateInUpLeft</h4>
		</li>

		<!-- Slide No3 -->
		<li class="anim-slide">
			<h2 id="css3">css3</h2>
			<h2 id="html5">html5</h2>
			<h2 id="jquery">jquery</h2>
			<h2 id="modernizr">modernizr</h2>
			<h2 id="animatecss">Animate.css</h2>
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
 		interval	:5000,
 		animations 	:
		{
			0	: 	//Slide No1
			{
				h1	:
				{
					show   	  : "bounceIn",
					hide 	  : "flipOutX",
					delayShow : "delay1s"
					},
					h2:
					{
						show 	  : "fadeInUpBig",
					hide 	  : "fadeOutDownBig",
					delayShow : "delay1-5s"
					},
					h3 	:
					{
					show   	  : "bounceInRight",
					hide 	  : "fadeOutRightBig",
					delayShow : "delay1-5s"
					},
					h4:
					{
						show 	  : "bounceInUp",
					hide 	  : "fadeOutLeftBig",
					delayShow : "delay2s"
				}
			},
			1	: //Slide No2
			{
				"#todo":
				{
					show 		: "fadeIn",
					hide 		: "fadeOut",
					delayShow   : "delay0-5s"
				},
				"#bounce" 	:
				{
					show 	 	: "bounceIn",
					hide 	 	: "bounceOut",
					delayShow 	: "delay2s"
				},
				"#bounceUp":
				{
					show 	 	: "bounceInDown",
					hide 	 	: "bounceOutLeft",
					delayShow 	: "delay2-5s"
				},
				"#bounceRight":
				{
					show 	 	: "bounceInRight",
					hide 	 	: "bounceOutRight",
					delayShow 	: "delay3s"
				},
				"#fade" :
				{
					show 	 	: "fadeInLeft",
					hide 	 	: "fadeOutLeft",
					delayShow 	: "delay3-5s"
				},
				"#fadeUp":
				{
					show 	 	: "fadeInUpBig",
					hide 	 	: "fadeOutUpBig",
					delayShow 	: "delay4s"
				},
				"#fadeDown":
				{
					show 	 	: "fadeInDownBig",
					hide 	 	: "fadeOutDownBig",
					delayShow 	: "delay4-5s"
				},
				"#rotate" :
				{
					show 	 	: "rotateIn",
					hide 	 	: "rotateOut",
					delayShow 	: "delay5-5s"
				},
				"#rotateRight" :
				{
					show 	 	: "rotateInUpRight",
					hide 	 	: "rotateOutDownRight",
					delayShow 	: "delay6s"
				},
				"#rotateLeft" :
				{
					show 	 	: "rotateInUpLeft",
					hide 	 	: "rotateOutDownLeft",
					delayShow 	: "delay6-5s"
				}
			},
			2	: //Slide No3
			{
				"#css3"	:
				{
					show 	  : "flipInY",
					hide 	  : "flipOutY",
					delayShow : "delay0-5s"
				},
				"#html5"	:
				{
					show 	  : "flipInY",
					hide 	  : "flipOutY",
					delayShow : "delay0-5s"
				},
				"#jquery"  :
				{
					show 	  : "bounceIn",
					hide 	  : "flipOutY",
					delayShow : "delay1-5s"
				},
				"#modernizr" :
				{
					show 	  : "rollIn",
					hide 	  : "flipOutY",
					delayShow : "delay2s"
				},
				"#animatecss"	:
				{
					show 	  : "lightSpeedIn",
					hide 	  : "flipOutY",
					delayShow : "delay2-5s"
				}
			}
		}
 	});
</script>
