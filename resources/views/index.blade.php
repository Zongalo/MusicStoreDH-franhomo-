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

        <section class="vip-products">

		<div class="categoria-1">

			<div class="columna-cat-line-index">

	                <div><strong  class="categorias"> BIENVENIDO A MUSIC STORE </strong></div>
	                <p class="categorias">Más de miles de músicos de toda argentina ya confían en nosotros, ¿por qué no usted? <br> Le ofrecemos cerca de 400 000 artículos disponibles al mejor precio.</p>
	        </div>

	    </div>


        <!-- Listado de productos -->
		<section class="vip-products">
					<article class="product">
						<h2 class="product">Novedades</h2>
						<p class="product">Descubrí todas nuestras novedades</p>
						<a href="#" target="_blank">
						<img src="images/home-novedades.jpg" alt="pdto 01">
						</a>
					</article>
					<article class="product">
						<h2 class="product">Artistas</h2>
						<p class="product">Todos los artistas de nuetras marcas</p>
						<a href="#" target="_blank">
						<img src="images/home-artistas.jpg" alt="pdto 02">
						</a>
					</article>
					<article class="product">
						<h2 class="product">Videos</h2>
						<p class="product">Tecnología en Instrumentos de viento</p>
						<a href="https://www.youtube.com/channel/UC-9-kyTW8ZkZNDHQJ6FgpwQ" target="_blank">
						<img src="images/home-videos.jpg" alt="pdto 03">
						</a>
					</article>

					<div class="categoria-1">

						<div class="columna-marc-line">
							<div><strong  class="categorias-index"> NUESTRAS MARCAS </strong></div>
							<a href="#"> 
								<img src="/images/nuestras-marcas.jpg" alt="Nuestras marcas" class="marcas">
							</a>
						
						</div>

					</div>

		</section>

					<div class="categoria-1">

						<div class="columna-cat-line-index">

				                <div>
				                	<div><strong  class="categorias-index"> ALGUNAS CATEGORIAS </strong></div>
				                	<p class="categorias-index">Aca se encuentran alguna de las Categorias que te podrian interesar, hace click en los iconos para ver mas.</p>
				            	</div>

				            	<div class="categorias-index-box uno">
									<strong class="categorias-index-box">Vientos</strong>
									<a href="viento">
									<img class="categoria" src="/images/Viento.jpg" alt="pdto 01">
									</a>
									<p class="categorias-index">Descubrí todas nuestras novedades</p>
								</div>
								<div class="dos categorias-index-box">
									<strong class="categorias-index-box">Cuerdas</strong>
									<a href="cuerda">
									<img class="categoria" src="/images/Cuerdas.jpg" alt="pdto 02">
									</a>
									<p class="categorias-index">Todos los artistas de nuetras marcas</p>
								</div>
								<div class="categorias-index-box tres">
									<strong class="categorias-index-box">Percuciòn</strong>
									<a href="percucion">
									<img class="categoria" src="/images/Percucion.jpg" alt="pdto 03">
									</a>
									<p class="categorias-index">Tecnología en Instrumentos de viento</p>
								</div>

				        </div>

				    </div>
	

@endsection
