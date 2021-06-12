<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo_menu.css" />
	<title>Cadastro de Animais</title>

</head>

<body>
	<img src="img/logo1.jpg" width="12%" height="12%" />
	<img src="img/nome_loja.png" width="12%" height="12%" />

	<conteiner>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark dropright">
			<!-- Brand -->
			<a class="navbar-brand" href="index.php">DogsCats & Cia</a>
			<!-- Links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Animais</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Donos</a>
				</li>
				<!-- Dropdown -->
				<li class="nav-item dropdown" class="btn btn-danger dropdown-toggle">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						Cadastro Básico
					</a>
					<div class="dropdown-menu btn btn-dark ">
						<a class="dropdown-item" href="lista_tipos.php">Tipos de Animais</a>
						<a class="dropdown-item" href="lista_raças.php">Raças de Animais</a>
						<a class="dropdown-item" href="lista_cores.php">Cores de Animais</a>
						<a class="dropdown-item" href="lista_cidades.php">Cidades</a>
						<a class="dropdown-item" href="lista_uf.php">UF</a>
					</div>
				</li>
			</ul>
		</nav>
	</conteiner>
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

	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
		}
	</script>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>