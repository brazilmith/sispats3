<?php
include_once('menu_principal.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>


	<title>Cadastro de Animais</title>

</head>

<body>

	<!----///////////////////CAROUSEL///////////////////////----->
	<div class="slideshow-container">

		<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
			<img src="https://afolhatorres.com.br/wp-content/uploads/2020/07/pag-18-CAES-E-GATOS.jpg" style="width:100%">
			<div class="text">Caption Text</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
			<img src="https://nutricaoesaudeanimal.com.br/wp-content/uploads/2020/08/VACCINAR-630x450.png" style="width:100%">
			<div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
			<img src="https://blogs.correiobraziliense.com.br/maisbichos/wp-content/uploads/sites/7/2018/02/c%C3%A3o-e-gato-juntos.jpg" style="width:100%">
			<div class="text">Caption Three</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>
	<br>

	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
	</div>


	<!----/////////////////////////////////////----->

	<!---------------------------BOOTSTRAP-------------------->


	<!-------->




	<!------------------>
	<div class="jumbotron">
		<div class="container text-center">
			<h1>My Portfolio</h1>
			<p>Some text that represents "Me"...</p>
		</div>
	</div>
	<!---------------------------FOOTER-------------------->
	<footer class="container-fluid text-center btn btn-secondary">
		<p>Trabalho de PHP LTDA</p>
	</footer>
	<!---------------------------BOOTSTRAP-------------------->
</body>

</html>