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

                <div><strong  class="categorias"> $CATEGORIA-1 </strong></div>
                 <p class="categorias">Aca se encuentran los instrumentos de la Categoria X. Hace <a class="a-fuq" href="registracion.php">"Click Aca"</a> para ver mas cosas sobre estos tipos de instrumentos.</p>

            </div>

		@foreach ($vientos as $viento)
            <article class="product">
                <img src="images/img-pdto-1.jpg" {{--aca ba la ruta en formato $viento->thumnail--}} alt="pdto 01">
                <h2 class="product">{{$viento->name}}</h2>
                <p class="product">Descripccion: {{$viento->description}}</p>
                <small>Precio: {{$viento->price}}</small>
                <a href="#" class="product">ver más</a>
                {{--<a href="/viento/{{$viento->id}}" class="product">ver más</a>--}}
            </article>
        @endforeach

		<div class="container">
			    @foreach ($vientos as $viento)
			        {{ $viento->name }}
			    @endforeach
		</div>
		{{ $vientos->links() }}

		</section>
		@endsection
