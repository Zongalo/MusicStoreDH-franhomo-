@extends('masterPage')
@section('main')
<div class="container-fluid body-main-page">
        <section class="banner">
        	<img src="images/logo.png" alt="logotipo" class="logo logo-main">
			<img src="images/img-banner.jpg" alt="banner" class="banner-main">
			<div class="nav-header">
			<nav class="header-nav">
				<ul class="main-nav">
					<li class="header-nav"> <a href="index">HOME</a></li>
					<li class="header-nav"> <a href="categorias">CATEGORIAS</a></li>
					<li class="header-nav"> <a href="faq">FAQ</a></li>
					<li class="header-nav"> <a href="#">CONTACTO</a></li>
				</ul>
			</nav>
			</div>
		</section>


        <!-- Título Novedades -->
        <div class="container body-main">
			<div class="row">
				<div class="título-home space">
				</div>
			</div>
        </div>
        <div class="row clearfix">


        <!-- Listado de productos -->
		<section class="vip-products">

					<div class="categoria-1">

						<div class="columna-cat-line">

							<a href="viento"><img src="/images/vientos-cat.jpg" alt="img cat"></a>		
	                        <div><strong  class="categorias"> Instrumentos de Viento </strong></div>
	                         <p class="categorias">Aca se encuentran los instrumentos de viento. Hace <a class="a-fuq" href="registracion.php">"Click Aca"</a> o sobre la imagen para ver mas cosas sobre estos tipos de instrumentos.</p>

	                    </div>

						
					</div>

					<div class="categoria-2">

						<div class="columna-cat-line">
							<a href="cuerda"><img src="/images/cuerdas-cat.jpg" alt="img cat"></a>	
	                        <div><strong  class="categorias"> Instrumentos de Cuerda </strong></div>
	                         <p class="categorias">Aca se encuentran los instrumentos de Cuerda. Hace <a class="a-fuq" href="registracion.php">"Click Aca"</a> o sobre la imagen para ver mas cosas sobre estos tipos de instrumentos.</p>

	                    </div> 

						

					</div>

					<div class="categoria-3">

						<div class="columna-cat-line">
							<a href="percucion"><img src="/images/percucion-cat.jpg" alt="img cat"></a>	
	                        <div><strong  class="categorias"> Instrumentos de Percuciòn </strong></div>
	                         <p class="categorias">Aca se encuentran los instrumentos de Percuciòn. Hace <a class="a-fuq" href="registracion.php">"Click Aca"</a> o sobre la imagen para ver mas cosas sobre estos tipos de instrumentos.</p>

	                    </div>

						

					</div>

					<div class="categoria-otros">

						<div class="columna-cat-line">
							<a href="#"><img src="" alt="img cat"></a>	
	                        <div><strong  class="categorias"> Instrumentos de Otro </strong></div>
	                         <p class="categorias">Aca se encuentran los instrumentos de Otro. Hace <a class="a-fuq" href="registracion.php">"Click Aca"</a> o sobre la imagen para ver mas cosas sobre estos tipos de instrumentos.</p>

	                    </div>

						

					</div>


		</section>
		@endsection



3
 
$questions = Question::orderByRaw('RAND()')->take(10)->get();