<!DOCTYPE HTML>
<!--
	FMV.COM Felipe Manriquez Front End Web Dev · Graphic design
-->
<html>
	<head>
		<title>FMV.com · Felipe Manriquez · Front End Web Dev + Graphic design</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/jqueryfullpage.css">
		<link rel="stylesheet" href="assets/css/baloon.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		<script src="assets/js/jqueryfullpage.js"></script>
		<script src="assets/js/scrolloverflow.js"></script>
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Catamaran:500" rel="stylesheet">

		<?php
			$bg = array('background: #D38312;background: -webkit-linear-gradient(to right, #A83279, #D38312);background: linear-gradient(to right, #A83279, #D38312);', 
						'background: #73C8A9;background: -webkit-linear-gradient(to right, #373B44, #73C8A9);background: linear-gradient(to right, #373B44, #73C8A9);', 
						'background: #70e1f5;background: -webkit-linear-gradient(to right, #3a2e1e, #70e1f5);background: linear-gradient(to right, #3a2e1e, #70e1f5);', 
						'background: #489a84;background: -webkit-linear-gradient(to right, #489a84, #0d2f0c);background: linear-gradient(to right, #489a84, #0d2f0c);',);
			$i = rand(0, count($bg)-1); 
			$selectedBg = "$bg[$i]"; 
		?>

		<style type="text/css">
				#section0{
				<?php echo $selectedBg; ?>
				}
				#section2{
				<?php echo $selectedBg; ?>
				}
		</style>


		<script type="text/javascript">
				$(document).ready(function() {
					$('#fullpage').fullpage({
						sectionsColor: ['gray', 'whitesmoke', '#7BAABE', 'whitesmoke', '#ccddff']
					});
				});

				$(document).on('click', '.scroll', function(){
				$.fn.fullpage.moveSectionDown();
				});
		</script>

	</head>

	<body>


			<div id="fullpage">

				<div class="section active colorz" id="section0">
					<div id='img'>
					<img src='assets/img/logo.png'>
					</div>
					<p class="nombre">Felipe Manriquez</p>
					<hr>
					<p>Graphic Design & Front-End WebDev</p>
					<div class="scroll"></div>

				</div>


				<div class="section" id="section2">

					<div id="textwrapper">
						<p>Desde <a href="#">branding</a> pasando por <a href="#">ilustración</a> y <a href="#">Front-End web (HTML, CSS, JS, PHP)</a>. Puedes conocer más de mi trabajo visitando mi <a href="#">portafolio en behance</a>. O se parte de mi <a href="#">red de contactos en linkedin.</a> <br>Escribeme a <a href="mailto:work@felipemanriquez.com"><i>work@felipemanriquez.com</i></a> y trabajemos juntos.</p>
						<div class="iconos">
							<a href="#" class="icon-block"class="icon-block" data-balloon-length="large" data-balloon="mr.manriquez@gmail.com" data-balloon-pos="up">
								<i class="fa fa-envelope fa-1x"></i>
							</a>
							<a href="#" class="icon-block"class="icon-block" data-balloon-length="medium" data-balloon="LinkedIn" data-balloon-pos="up">
								<i class="fa fa-linkedin-square fa-1x"></i>
							</a>
							<a href="#" class="icon-block" data-balloon-length="medium" data-balloon="GitHub" data-balloon-pos="up" class="icon-block">
								<i class="fa fa-github fa-1x"></i>
							</a>
							<a href="#" class="icon-block" data-balloon-length="medium" data-balloon="76151542" data-balloon-pos="up">
								<i class="fa fa-phone-square fa-1x"></i>
							</a>

					</div>		

				</div>

				</div>

		</div>


	</body>
</html>