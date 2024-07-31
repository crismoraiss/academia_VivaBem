


 @extends('layout.layout')

@section('tile', 'Sobre')

@section('conteudo')

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fitmas - Gym & Fitness HTML Template</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

</head>

<body>
    <!--********************************
   		Code Start From Here
	******************************** -->

    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper background-image" style=" background-image: url(assets/img/bg/breadcrumb-bg.png);
}" data-bg-src="assets/img/bg/breadcrumb-bg.png">

    </div>

    <!--==============================
    Área Sobre
    ==============================-->
<div class="space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2 text-lg-end">
                <div class="about-thumb mb-5 mb-lg-0">
                    <img class="about-img-1" src="assets/img/normal/about_1-1.png" alt="img">
                    <img class="about-img-2 jump" src="assets/img/normal/about_1-2.png" alt="img">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="about-content-wrap">
                    <div class="title-area mb-0">
                        <span class="sub-title">Mais Sobre Nós</span>
                        <h2 class="sec-title">Desbloqueie Seu Potencial Total,
                            Alcance Seus Objetivos.</h2>
                        <p class="sec-text">Bem-vindo ao Fitmas, seu destino final para alcançar seus objetivos de fitness. Entendemos a importância de levar um estilo de vida saudável e oferecemos uma instalação de fitness de alta qualidade para apoiá-lo em sua jornada de fitness.
                        </p>
                        <div class="about-tab-1">
                            <div class="filter-menu-active">
                                <button data-filter=".cat1" class="active" type="button">Nossa Missão</button>
                                <button data-filter=".cat2" type="button">Nossa Visão</button>
                                <button data-filter=".cat3" type="button">Nosso Objetivo</button>
                            </div>
                            <div class="filter-active-cat1">
                                <div class="filter-item cat1">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Proporcionar um ambiente inspirador e acolhedor, promovendo a saúde e o bem-estar através de programas de exercícios inovadores, instrução de alta qualidade e uma comunidade que apoia todos os estágios da jornada fitness.</p>
                                </div>
                                <div class="filter-item cat2">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Ser reconhecida como a academia líder na promoção de estilos de vida saudáveis, oferecendo instalações modernas, programas diversificados e uma abordagem personalizada para atender às necessidades exclusivas de cada membro.</p>
                                </div>
                                <div class="filter-item cat3">
                                    <div class="about-tab-icon">
                                        <img src="assets/img/icon/about-icon.svg" alt="img">
                                    </div>
                                    <p class="about-tab-text">Uma academia visa promover a saúde e o bem-estar, proporcionando um ambiente inspirador com instalações modernas e programas variados de exercícios. Além de incentivar a prática regular de atividades físicas, a academia busca criar uma comunidade unida e oferecer serviços profissionais que atendam às diferentes necessidades dos membros, contribuindo para melhorar a qualidade de vida e alcançar metas de fitness individuais.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn">Agende uma Consulta</a>
                        <div class="about-info-wrap">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title">Precisa de Ajuda?</p>
                                <a class="about-info-link" href="tel:+55 11999999999">+55 (11) 999999999</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--==============================
    Área de Serviço 02
    ==============================-->
<div class="service-area-2 space-bottom overflow-hidden">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nossos Serviços</span>
            <h2 class="sec-title">Serviços que Oferecemos</h2>
        </div>
    </div>
    <div class="container">
        <div class="row global-carousel service-slider-2 slider-shadow" data-slide-show="3" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
            {{-- <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/musculacao') }}>Aula de Fitness na Academia</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre explosões intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-6.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/meditacao') }}>Aula de Meditação</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/meditacao') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/meditacao') }}>Levantamento de Peso</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre explosões intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/meditacao') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/musculacao') }}>Musculação</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre explosões intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/musculacao') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href="service-details.html">Aula de Fitness na Academia</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre explosões intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href="service-details.html" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-6.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/musculacao') }}>Aula de Meditação</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/musculacao') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/musculacao') }}>Levantamento de Peso</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre explosões intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/musculacao') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="assets/img/icon/service-icon_2-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/musculacao') }}>Musculação</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre explosões intensas de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/musculacao') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--==============================
    Área CTA
    ==============================-->
<section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.png">
    <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="cta-wrap text-center text-lg-start">
                    <div class="title-area">
                        <span class="sub-title">Agende uma Consulta</span>
                        <h2 class="sec-title text-white">Obtenha uma Consultoria Gratuita
                            Agora Mesmo!</h2>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href={{ url('/contato') }} class="btn style2">Agende uma Consulta</a>
                        <div class="about-info-wrap style3">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title text-white">Precisa de Ajuda?</p>
                                <a class="about-info-link" href="tel:+55 11999999999">+55 (11) 999999999</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!--==============================
    Área da Equipe
    ==============================-->
<div class="team-area-1 space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nossos Instrutores</span>
            <h2 class="sec-title">Conheça Nossa Incrível Equipe</h2>
        </div>
        <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true">
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-1.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">George Thomas</a></h4>
                        <span class="team-card_desig">CEO/Fundador</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-2.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a></h4>
                        <span class="team-card_desig">CEO/Fundador</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-3.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a></h4>
                        <span class="team-card_desig">CEO/Fundadora</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-4.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a></h4>
                        <span class="team-card_desig">CEO/Fundador</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-1.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">George Thomas</a></h4>
                        <span class="team-card_desig">CEO/Fundador</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-2.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a></h4>
                        <span class="team-card_desig">CEO/Fundador</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-3.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a></h4>
                        <span class="team-card_desig">CEO/Fundadora</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-card">
                    <div class="team-card_img">
                        <img src="assets/img/team/team-4.png" alt="img">
                    </div>
                    <div class="team-card_content">
                        <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a></h4>
                        <span class="team-card_desig">CEO/Fundador</span>
                        <div class="social-btn">
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
            </div>


    <!--********************************
			Code End  Here
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>


</body>

</html>
@endsection


