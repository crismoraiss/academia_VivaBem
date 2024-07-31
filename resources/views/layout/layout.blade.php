<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') - Academia Viva Bem </title>
    <meta name="description" content="Fitmas - Modelo HTML de Academia e Fitness">
    <meta name="keywords" content="Fitmas - Modelo HTML de Academia e Fitness">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Metas específicas para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Coloque o favicon.ico no diretório raiz -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
   {{-- CSS --}}
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/theme-support.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/jquery.flipster.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    {{-- <div class="preloader">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div> --}}


    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Pesquisar aqui..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href={{ url('/') }}><img src="../assets/img/logoVivaBem.svg" style="height: 170px; width: 210px; alt="logo></a>
                    </div>
                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à aptidão física e ao exercício, geralmente oferecendo uma variedade de atividades físicas.</p>
                    <div class="social-btn style2">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Links Rápidos</h3>
                <ul class="menu">
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="noticias">Notícia</a></li>
                    <li><a href="treino">Treinos</a></li>
                    <li><a href="modalidade">Modalidades</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Menu Móvel -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ asset('/') }}"><img src="../assets/img/logoVivaBem.svg"style="height: 170px; width: 210px; alt="logo></a>
                 </div>
                 <div class="mobile-menu">
                          <ul>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ asset('/modalidade') }}">Modalidades</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url('/treino') }}">Treino</a></li>
                            <li><a href="{{ url('/modalidade/musculacao') }}">Musculação</a></li>
                            <li><a href="{{ url('/modalidade/yoga') }}">Yoga</a></li>
                            <li><a href="{{ url('/modalidade/aerobica') }}">Aerobica</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ asset('/noticia') }}">Noticias</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ asset('/treino') }}">Treino</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ asset('/sobre') }}">Sobre</a>
                    </li>
                    <li>
                        <a href="{{ asset('/login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ asset('/contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a href="academiavivabem@gmail.com">academiavivabem@gmail.com</a></li>
                                <li><i class="far fa-clock"></i>Seg - Sab: 8.00 am - 10.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visite nossas páginas sociais</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">

            <!-- Área do Menu Principal -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href={{ url('/') }}><img src="../assets/img/logoVivaBem.svg" style="height: 170px; width: 210px; alt="logo></a>

                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>

                                    <li>
                                        <a href={{ url('/') }}>Home</a>
                                    </li>

                                    <li>
                                        <a href={{ url('/sobre') }}>Sobre</a>
                                    </li>
                                    <li>
                                        <a href={{ url('/treino') }}>Treino</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href={{ url('/modalidade') }}>Modalidade</a>
                                         <ul class="sub-menu">
                                            <li><a href={{ url('/modalidade/musculacao') }}>Musculação</a></li>
                                            <li><a href={{ url('/modalidade/treinofuncional') }}>Treino Funcional</a></li>
                                            <li><a href={{ url('/modalidade/meditacao') }}>Meditação</a></li>
                                            <li><a href={{ url('/modalidade/boxe') }}>Boxe</a></li>
                                            <li><a href={{ url('/modalidade/yoga') }}>Yoga</a></li>
                                        </ul>

                                    </li>
                                    <li>
                                        <a href={{ url('/noticia') }}>Noticia</a>
                                    </li>

                                    <li>
                                        <a href={{ url('/contato') }}>Contato</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+55 11999999999">+55 (11) 999999999</a>
                            </div>
                        </div>


                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                {{-- parte do login --}}
                                <a href={{ url('/login') }} class="btn style2 style-r0 d-xl-block d-none">
                                    Login
                                </a>


                                <a href={{ url('/contato') }} class="btn style2 style-r0 d-xl-block d-none">
                                    Obter um Orçamento
                                </a>
                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        {{-- vai ficar prendendo  --}}
    @yield('conteudo')
    </main>


    <footer class="footer-wrapper footer-layout1" data-bg-src="../assets/img/bg/footer-1-bg.png">
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="widget-about">
                                <div class="footer-logo">
                                    {{-- <a href="index.html"><img src="../assets/img/logo-white.svg" alt="Fitmas"></a> --}}
                                    <a href="{{ asset('/') }}"><img src="../assets/img/logoVivaBem.svg"style="height: 110px; width: 210px;" alt="VivaBem"></a>
                                </div>
                                <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à aptidão física e ao exercício, geralmente oferecendo uma variedade de atividades físicas.</p>
                                <div class="social-btn">
                                    <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                    <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Links Rápidos</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href={{ url('/sobre') }}>Sobre Nós</a></li>
                                    <li><a href={{ url('/treino') }}>Nossos Treinos</a></li>
                                    <li><a href={{ url('/noticia') }}>Noticias</a></li>
                                    {{-- <li><a href={{ url('/contato') }}>Login</a></li> --}}
                                    <li><a href={{ url('/contato') }}>Contate-nos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Galeria</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/insta-feed1.png" alt="Imagem da Galeria">
                                    <a href="../assets/img/widget/insta-feed1.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/insta-feed2.png" alt="Imagem da Galeria">
                                    <a href="../assets/img/widget/insta-feed2.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/insta-feed3.png" alt="Imagem da Galeria">
                                    <a href="../assets/img/widget/insta-feed3.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/insta-feed4.png" alt="Imagem da Galeria">
                                    <a href="../assets/img/widget/insta-feed4.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/insta-feed5.png" alt="Imagem da Galeria">
                                    <a href="../assets/img/widget/insta-feed5.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="gallery-thumb">
                                    <img src="../assets/img/widget/insta-feed6.png" alt="Imagem da Galeria">
                                    <a href="../assets/img/widget/insta-feed6.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Receba o boletim informativo</h3>
                            <p class="footer-text">Receba 10% de desconto em seu primeiro pedido! Corra</p>




                            <form action="{{ route('contato.enviarNew') }}" method="POST" class="contact-form newsletter" id="new_letters">
                                @csrf
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input class="form-control" type="email" name="emailNews" id="emailNews" placeholder="Endereço de E-mail" required="">
                                </div>

                                <button  type="submit" class="btn" onclick="new_letters(event)">Inscrever-se</button>

                                <div id="newsMensagem" class="msgContato"></div>

                            </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a> Todos os direitos reservados.</p></div>
                </div>
            </div>
        </div>
    </footer>



        {{-- <script> </script> COD --}}


   <!-- Jquery -->
   <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
   <!-- Slick Slider -->
   <script src="assets/js/slick.min.js"></script>
   <!-- Bootstrap -->
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- Magnific Popup -->
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Counter Up -->
   <script src="assets/js/jquery.counterup.min.js"></script>
   <!-- Range Slider -->
   <script src="assets/js/jquery-ui.min.js"></script>
   <!-- Flip Slider -->
   <script src="assets/js/jquery.flipster.min.js"></script>
   <!-- Isotope Filter -->
   <script src="assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>

   <script src="assets/js/bmi.calculator.js"></script>

   <!-- Main Js File -->
   <script src="assets/js/main.js"></script>

   {{-- Script criado --}}
   <script src="assets/js/script.js"></script>


</body>
</html>
