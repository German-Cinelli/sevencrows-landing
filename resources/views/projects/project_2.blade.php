@extends('web')

@section('content')

<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
	<div class="header-body border-top-0 bg-dark box-shadow-none">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}">
							<a href="#" class="goto-top"><img alt="Porto" width="102" height="45" data-sticky-width="82" data-sticky-height="36" data-sticky-top="0" src="{{ asset('img/lazy.png') }}" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="img/landing/logo.png"></a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row">
						<div class="header-nav header-nav-links header-nav-light-text header-nav-dropdowns-dark">
							<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-mobile-dark header-nav-main-effect-1 header-nav-main-sub-effect-1 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}">
								<nav class="collapse">
									<ul class="nav nav-pills" id="mainNav">
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="{{ url('/') }}">
												INICIO
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="{{ url('/#nosotros') }}">
												NOSOTROS
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="{{ url('/#servicios') }}">
												SERVICIOS
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item" data-hash data-hash-offset="130" href="{{ url('/#contacto') }}">
												CONTACTO
											</a>
										</li>
										
									</ul>
								</nav>
							</div>

							<div class="header-column header-column-border-left flex-grow-0 justify-content-center">
								<div class="header-row pl-4 justify-content-end">
									<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean m-0">
										<li class="social-icons-facebook"><a href="http://www.facebook.com/sevencrows" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-white"></i></a></li>
										<li class="social-icons-linkedin"><a href="http://www.linkedin.com/sevencrows" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-white"></i></a></li>
										<li class="social-icons-instagram"><a href="http://www.instagram.com/sevencrows" target="_blank" title="Instagram"><i class="icon-social-instagram icons text-white"></i></a></li>
									</ul>
									<button class="btn header-btn-collapse-nav ml-0 ml-sm-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Current Page CSS -->
<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/layers.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/rs-plugin/css/navigation.css') }}">


<div role="main" class="main">

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md ">
					<div class="container-fluid">
						<div class="row align-items-center">

							<!--<div class="col">
								<a href="#" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
									<div class="d-flex align-items-center line-height-1">
										<i class="fas fa-arrow-left text-dark text-4 mr-3"></i>
										<div class="d-none d-sm-block line-height-1">
											<span class="text-dark opacity-4 text-1">ANTERIOR PROYECTO</span>
											<h4 class="font-weight-bold text-3 mb-0">Homeopatía && Cosméticos</h4>
										</div>
									</div>
								</a>
							</div>-->

							<div class="col">
								<div class="row">
									<div class="col-md-12 align-self-center p-static order-2 text-center">
										<div class="overflow-hidden pb-2">
											<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Nuestro Portafolio</h2>
										</div>
									</div>
									<!--<div class="col-md-12 align-self-center order-1">
										<ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
											<li><a href="#">Home</a></li>
											<li><a href="#">Portfolio</a></li>
											<li class="active">Small Slider</li>
										</ul>
									</div>-->
								</div>
							</div>

							<!--<div class="col">
								<a href="#" class="portfolio-next text-decoration-none d-block float-right appear-animation" data-appear-animation="fadeInLeftShorter">
									<div class="d-flex align-items-center text-right line-height-1">
										<div class="d-none d-sm-block line-height-1">
											<span class="text-dark opacity-4 text-1">SIGUIENTE PROYECTO</span>
											<h4 class="font-weight-bold text-3 mb-0">Homeopatía && Cosméticos</h4>
										</div>
										<i class="fas fa-arrow-right text-dark text-4 ml-3"></i>
									</div>
								</a>
							</div>-->

						</div>
					</div>
				</section>

				<div class="container pt-2 pb-4">

					<div class="row pb-4 mb-2">
						<div class="col-md-6 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">

							<div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
								<div>
									<div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
										<img src="{{ asset('img/projects/project-santoremedio.png') }}" class="img-fluid border-radius-0" alt="">
									</div>
								</div>
								<div>
									<div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
										<img src="{{ asset('img/projects/project-santoremedio-2.png') }}" class="img-fluid border-radius-0" alt="">
									</div>
								</div>
							</div>

							<!--<hr class="solid my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">-->

							<!--<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100">
								<strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
								<ul class="social-icons">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>-->

						</div>
						<div class="col-md-6">
							<div class="overflow-hidden">
								<h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600"> <strong class="font-weight-extra-bold">Descripción</strong></h2>
							</div>
							<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"></p>
                            <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Tienda Online dedicada a la venta de productos homeopáticos, cosméticos y cuidado personal.</p>

							<div class="overflow-hidden mt-4">
								<h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1000"> <strong class="font-weight-extra-bold">Detalles</strong></h2>
							</div>
							<ul class="list list-icons list-primary list-borders text-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Cliente:</strong> SantoRemedio</li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Fecha:</strong> Noviembre 2021</li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Tipo:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">WEBSITE</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">ECOMMERCE</a></li>
								<li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Enlace:</strong> <a href="#" target="_blank" class="text-dark">https://vamosdecompras.uy/</a></li>
							</ul>
						</div>
					</div>

				</div>

			</div>

			<section class="section section-height-3 bg-color-grey m-0 border-0">
				<div class="container py-4">
					<h4 class="mb-3 text-4 text-uppercase">Otros <strong class="font-weight-extra-bold">Proyectos</strong></h4>
					<div class="row">

                        <div class="col-12 col-sm-6 col-lg-3 mb-4">
							<div class="portfolio-item">
								<a href="{{ url('/proyecto-insumos-informaticos') }}">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="{{ asset('img/projects/project-sevenparts.png') }}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Insumos informáticos</span>
												<span class="thumb-info-type">Ecommerce</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
						
						<div class="col-12 col-sm-6 col-lg-3 mb-4">
							<div class="portfolio-item">
								<a href="{{ url('/proyecto-homeopatia-cosmeticos') }}">
									<span class="thumb-info thumb-info-lighten thumb-info-no-borders border-radius-0">
										<span class="thumb-info-wrapper border-radius-0">
											<img src="{{ asset('img/projects/project-santoremedio.png') }}" class="img-fluid border-radius-0" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Homeopatía & Cosmética</span>
												<span class="thumb-info-type">ECOMMERCE</span>
											</span>
											<span class="thumb-info-action">
												<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

					</div>
				</div>
			</section>
</div>

<!-- Current Page Vendor and Views -->
<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Examples -->
<script src="{{ asset('js/examples/examples.portfolio.js') }}"></script>

@endsection