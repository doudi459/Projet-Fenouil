<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/www/Prog/public/images/fenouil.png" rel="shortcut icon" type="image/x-icon" />
    <link href="http://localhost/www/Prog/public/images/fenouil.png" rel="icon" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Plombiers Title -->
    <title>Fenouil - Application</title>
    <!-- css file -->
    <link rel="stylesheet" href="http://localhost/www/Prog/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/www/Prog/public/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="http://localhost/www/Prog/public/css/responsive.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="rhttp://localhost/www/Prog/public/evolution-slider/css/settings.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/www/Prog/public/revolution-slider/css/layers.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/www/Prog/public/revolution-slider/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/www/Prog/public/js/bootstrap-wysihtml5.css"></link>
    <link href="http://localhost/www/Prog/public/css/bootstrap.min1.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="http://localhost/www/Prog/public/css/styll.css" rel="stylesheet">

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
        .defaut{
            border-style: solid;
            border-color: #AAAAAA;
            border-width: 2px;
        }

        .selection{
            border-style: solid;
            border-color: #AAAAAA;
            border-width: 2px;
            background-color: #8888DD;
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

<div class="main-wrapper">
    <div class="preloader"></div>
    <div class="et-header-topped">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <ul class="list-inline et-ht-cntct-details">
                        <li><a href="#"><i class="lnr lnr-map-marker"></i> IBGBI Université  D'EVRY Val D'Essonne </a></li>
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
        <div class="main-header-nav ">
            <div class="container">
                <nav id="menuzord" class="menuzord">
                    <a href="#" class="menuzord-brand"><img src="http://localhost/www/Prog/public/images/fenouil.png" alt=""></a>
                    <ul class="menuzord-menu">
                        <li><a href="/Deco">Décoration</a></li>
                        <li><a href="/Bricolage">Bricolage</a></li>
                        <li><a href="contact">Nous Contacté</a></li>
                    </ul>
                    <ul class="navbar-right  menuzord-menu">

                        <li class="menuzord-menu"><a href="#"><span class="glyphicon glyphicon-user"></span> Profil</a>
                            <ul class="dropdown animated zoomIn">
                                <li><a href="#"><i class="ti-user"></i>Nom {{ Auth::user()->name }} </a></li>
                                <li><a href="#"><i class="ti-wallet"></i>Prenom {{ Auth::user()->prenom}}  </a></li>
                                <li><a href="#"><i class="ti-email"></i> Email {{ Auth::user()->Email }} </a></li>
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
                                            <!-- Message -->

                                            <a href="#">
                                                <div class="user-img"> <img src= "images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>

                                                <div class="mail-contnet">
                                                    <h5></h5> <span class="mail-desc"></span>
                                                </div>
                                            </a>

                                            <!-- Message -->

                                        </div><div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Voir Tout les Notification</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>



                        </li>


                    </ul>

                </nav>
            </div>
        </div>


    </div>


    <section class="et-section-divider" style="padding-top: 10px;padding-bottom: 10px;background-image:none;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-3 text-center">
                    <h2 class="text-uppercase">Bienvenu A Vous</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Home Design -->

    <div class="left-sidebar" style="overflow: visible;background-color: #1e1e1e">
        <!-- Sidebar scroll-->
        <div class="slimScrollDiv" style="position: relative; overflow: visible; width: auto; height: 100%;">
            <div class="scroll-sidebar" style="overflow-x: visible; overflow-y: hidden; width: auto; height: 100%;">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav active" style="padding-top: 12px;background-color: #1e1e1e">
                    <ul id="sidebarnav">

                        <li> <a href="{{route('index')}}" style= "background-color: #1e1e1e"; ><i class="fa fa-tachometer" style=""></i><span style="font-size: 15px; "><b> FENOUIL </b> </span></a>
                        </li>

                        <li class="nav-label">Fonctionalité</li>

                        <li class="nav-devider"></li>
                        @if(Auth::user()->Fonction == 'Responsable du Routage')
                        <li> <a class="has-arrow " href="#" aria-expanded="false" style="background-color: #1e1e1e;" ><i class="fa fa-file"></i><span class="hide-menu">Publicité</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="">Toutes les Pubs</a></li>
                                <li><a href="ajouterpage.php">nouvelle Publicite</a></li>

                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->Fonction == 'administrateur')
                        <li> <a class="has-arrow "  href="#" aria-expanded="false" style="background-color: #1e1e1e;" ><i class="fa fa-edit"></i><span class="hide-menu">Article</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('allArt.index')}}">Tous les articles</a></li>
                                <li><a href="{{route('NewArt.index')}}">Ajouter nouveau</a></li>


                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->Fonction == 'Responsable du Routage'|| Auth::user()->Fonction == 'Responsable de stratigie')
                        <li> <a class="has-arrow  " href="#" aria-expanded="false" style="background-color: #1e1e1e;" ><i class="glyphicon glyphicon-download-alt"></i><span class="hide-menu">Cible de Routage</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Tout les cible actuelle </a></li>
                                <li><a href="#">Ajouter nouvelle cible</a></li>
                                <li><a href="#">Nouvell Cible</a></li>

                            </ul>
                        </li>
                        @endif
                        @if(Auth::user()->Fonction == 'Gestionnaire Administratif')
                        <li> <a class="has-arrow  " href="#" aria-expanded="false" style="background-color: #1e1e1e;" ><i class="glyphicon glyphicon-remove"></i><span class="hide-menu">Anomalie</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Consulté les anomalie </a></li>
                                <li><a href="#">Rédigé Courier</a></li>

                            </ul>
                        </li>
                        @endif
                        <li class="nav-label">Application</li>
                        <li class="nav-devider"></li>
                        @if(Auth::user()->Fonction == 'administrateur')
                        <li> <a class="has-arrow  " href="#" aria-expanded="false" style="background-color: #1e1e1e;"><i class="fa fa-users"></i><span class="hide-menu">Users</span></a></li>
                        @endif
                        <li> <a class="has-arrow  " href="#" aria-expanded="false" style="background-color: #1e1e1e;"><i class="fa fa-cog"></i><span class="hide-menu">Parametres</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Generale</a></li>
                                <li><a href="#">Edition</a></li>

                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>


            <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;"></div>
            <!-- End Sidebar scroll-->
        </div>
    </div>
















    <div class="page-wrapper" style="min-height: 591px;">


        @yield('contenu')




    </div>


    <!-- First Divider -->











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


<!-- Bootstrap tether Core JavaScript -->

<!-- slimscrollbar scrollbar JavaScript -->
<script src="http://localhost/www/Prog/public/js/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="http://localhost/www/Prog/public/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="http://localhost/www/Prog/public/js/sticky-kit-master/dist/sticky-kit.min.js"></script>

<!-- Amchart -->

<script src="http://localhost/www/Prog/public/js/owl-carousel/owl.carousel.min.js"></script>
<script src="http://localhost/www/Prog/public/js/owl-carousel/owl.carousel-init.js"></script>
<script src="http://localhost/www/Prog/public/js/scripts.js"></script>
<!-- scripit init-->

<script src="http://localhost/www/Prog/public/js/custom.min.js"></script>

<!-- END REVOLUTION SLIDER -->
@yield('js')
</body>
</html>