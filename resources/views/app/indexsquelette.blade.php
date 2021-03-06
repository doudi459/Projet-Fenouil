<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="http://localhost/www/Prog/public/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="http://localhost/www/Prog/public/images/favicon.ico" rel="icon" type="image/x-icon" />
<!-- Plombiers Title -->
<title>Fenouil - Application</title>
<!-- css file -->
<link rel="stylesheet" href="http://localhost/www/Prog/public/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/www/Prog/public/css/style.css">
	<link rel="stylesheet" href="http://localhost/www/Prog/public/css/bootstrap.min1.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="http://localhost/www/Prog/public/css/responsive.css">
	<!-- REVOLUTION LAYERS STYLES -->
<link rel="stylesheet" type="text/css" href="http://localhost/www/Prog/public/revolution-slider/css/settings.css">
<link rel="stylesheet" type="text/css" href="http://localhost/www/Prog/public/revolution-slider/css/layers.css">
<link rel="stylesheet" type="text/css" href="http://localhost/www/Prog/public/revolution-slider/css/navigation.css">


<style>
	.label-input100 {

		font-family: Poppins-SemiBold;
		font-size: 18px;
		color: #999999;
		line-height: 1.2;
		padding-left: 2px;

	}
	.input100 {
		border-color: #dc3545 ;
		border-left-style: none;
		border-left-width: 0px;
		border-right-style: none;
		border-right-width: 0px
		display: block;
		width: 100%;
		height: 50px;
		background: transparent;
		font-family: Poppins-Regular;
		font-size: 22px;
		color: #555555;
		line-height: 1.2;
		padding: 0 2px;

	}
</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
<div class="preloader"></div>
  	<div class="et-header-topped">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-5">
  					<ul class="list-inline et-ht-cntct-details">
  						<li><a href="#"><i class="lnr lnr-map-marker"></i> IBGBI Univérsité D'Evry Val D'Essonne </a></li>
  					</ul>
  				</div>
  				<div class="col-md-7">
  					<div class="et-social-linked pull-right">
  						<ul class="list-inline">
  							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
  							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
  							<li><a href="#"><i class="fa fa-skype"></i></a></li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

	<!-- Header Styles -->
	<div class="header-nav">
		<div class="main-header-nav scrollingto-fixed">
			<div class="container">
				<nav id="menuzord" class="menuzord">
					<a href="#" class="menuzord-brand"><img src="http://localhost/www/Prog/public/images/header-logo.png" alt=""></a>
					<ul class="menuzord-menu">
						<li><a href="{{route('Deco')}}">Décoration</a></li>
						<li><a href="{{route('Bricolage')}}">Bricolage</a></li>
						<li><a href="#Contact">Nous Contacté</a></li>
					</ul>


					 <ul class="navbar-right menuzord-menu">

						 @if (Route::has('login'))

								 @auth



									 <li class="menuzord-menu"><a href="#"><span class="glyphicon glyphicon-user"></span> Profil</a>
										 <ul class="dropdown animated zoomIn">
											 <li><a href="#"><i class="ti-user"></i>Nom  {{ Auth::user()->name }} </a></li>
											 <li><a href="#"><i class="ti-wallet"></i>Prenom  {{ Auth::user()->prenom }}</a></li>
											 <li><a href="#"><i class="ti-email"></i> Email  {{ Auth::user()->Email }} </a></li>
											 <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>

													 Déconection
													 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														 @csrf
													 </form>



												 </a></li>

										 </ul>
									 </li>
									 <li class="menuzord-menu"><a href="#"><span class="glyphicon glyphicon glyphicon-envelope"></span> Notification</a>


										 <ul class="dropdown dropdown-menu dropdown-menu-right mailbox animated zoomIn">
											 <li>
												 <div class="drop-title">VOS MESSAGE</div>
											 </li>
											 <li style="overflow: visible;">
												 <div class="slimScrollDiv" style="position: relative; overflow-x: visible; overflow-y: hidden; width: auto; height: 250px;"><div class="message-center" style="overflow: hidden; width: auto; height: 250px;">


														 <a href="#">
															 <div class="user-img"> <img src= "images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>

															 <div class="mail-contnet">
																 <h5></h5> <span class="mail-desc"></span>
															 </div>
														 </a>



													 </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
											 </li>
											 <li>
												 <a class="nav-link text-center" href="javascript:void(0);"> <strong>Voir Tout les Notification</strong> <i class="fa fa-angle-right"></i> </a>
											 </li>
										 </ul>



									 </li>
								      <li class="menuzord-menu"><a href="{{route('ValidéCommande')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
									 @if (Auth::user()->Fonction != null)
										 <li class="menuzord-menu"><a href="{{route('dashbord')}}"><span class="glyphicon  glyphicon-cog"></span> Dashbord</a></li>

									@endif








								 @else
									 <li class="menuzord-menu"><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>

									 @if (Route::has('register'))
									 <li class="menuzord-menu" ><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Register</a></li>
									 @endif
								 @endauth

						 @endif

    				</ul>


				</nav>
			</div>
		</div>
	</div>

	<!-- Home Design -->
@yield('contenu')

	<!-- First Divider -->
	<section class="et-section-divider" style="background-image:none;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="text-uppercase">Contacté Nous Par Email Au</h2>
					<h2 class="text-uppercase et-cell">dhialayadi@gmail.com</h2>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer Section -->
	<footer id="contact" class="footer et-footer" style="background-image:none;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="et-foter-title">
						<p class="et-foter-sub-title text-uppercase">Nos Reseaux</p>
					</div>
					<div class="et-twitter-feed-widget">
						<img src="" alt="">
						<p class="text-uppercase">Vous Pouvez Contacté avengers via Nous résaux ICI</p>
						<div class="foter-logo">
						<ul class="list-inline">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 text-center">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="et-foter-title">
						<p class="et-foter-sub-title text-uppercase">Discription</p>
					</div>
					<div class="et-flickr-widget">
						<div class="row">
							<p>l'application fenouil a etait réalisé par les etudiant de asr (Archetecture des systems d'information et logicielle) de l'université d'evry encadré par l'ensegnien fabien palacios  </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="copyright">Copyright ©2019 <span class="text-thm">Avengers.</span>  All Rights Reserved</p>
				</div>
			</div>
		</div>
	</footer>




<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="http://localhost/www/Prog/public/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/scrollto.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/menuzord.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/jquery-SmoothScroll-min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/fancybox.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/wow.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/js/owl.carousel.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="http://localhost/www/Prog/public/js/script.js"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
@yield('js')
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
		(Load Extensions only on Local File Systems ! 
		 The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="http://localhost/www/Prog/public/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<!-- END REVOLUTION SLIDER -->
<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_4_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_4_1");
		}else{
			revapi4 = tpj("#rev_slider_4_1").show().revolution({
				sliderType:"auto",
				sliderLayout:"fullwidth",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"zeus",
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:30,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:30,
							v_offset:0
						}
					}
					,
					bullets: {
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						style:"metis",
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:30,
						space:5,

					}
				},
				viewPort: {
					enable:true,
					outof:"pause",
					visible_area:"80%"
				},
				responsiveLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[800,800,500,400],
				lazyType:"none",
				parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,50],
				},
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
	});	/*ready*/
</script>
</body>
</html>