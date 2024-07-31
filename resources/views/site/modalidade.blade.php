@extends('layout.layout')

@section('title', 'Modalidade')

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


<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>



<!--==============================
    Trilha de Navegação (Breadcrumb)
============================== -->
{{-- <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png"> --}}

    <div class="breadcumb-wrapper background-image" style=" background-image: url(assets/img/bg/breadcrumb-bg.png);
}" data-bg-src="assets/img/bg/breadcrumb-bg.png">


</div>

  <!--==============================
    Área de Serviço 02
==============================-->
<div class="service-area-2 space overflow-hidden">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-1.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade') }}>Aulas da Academia</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-2.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/treinofuncional') }}>Treino Funcional</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/treinofuncional') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-3.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/musculacao') }}>Musculação</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/musculacao') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-4.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/boxe') }}>Aula de Boxe</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/boxe') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-5.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/yoga') }}>Aula de Yoga Fitness</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/yoga') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-card style2">
                    <div class="service-card_icon">
                        <img src="../assets/img/icon/service-icon_2-6.svg" alt="img">
                    </div>
                    <div class="service-card_content">
                        <h4 class="service-card_title h5"><a href={{ url('modalidade/meditacao') }}>Aula de Meditação</a></h4>
                        <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício e
                            curtos períodos de recuperação...</p>
                        <a href={{ url('modalidade/meditacao') }} class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i> Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" style=" background-image: url(../assets/img/bg/cta-bg1.png);
}" data-bg-src="../assets/img/bg/cta-bg1.png">

        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">MARQUE UMA CONSULTA</span>
                            <h2 class="sec-title text-white fw-semibold">OBTENHA UMA CONSULTORIA GRATUITA AGORA AQUI!</h2>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href={{ url('/contato') }} class="btn style2 style-r0">MARQUE UMA CONSULTA</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Preciso de ajuda?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--==============================
    Área de Planos e Preços
==============================-->
<div class="pricing-area space">
    <div class="container">
        <div class="title-area text-center">
            <h3 class="sub-title">Plano de Preços</h3>
            <h2 class="sec-title">Nossos Planos de Preços</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Básica</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>99<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso livre à academia durante o horário comercial, podendo usufruir de instalações e equipamentos disponíveis.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href={{ url('/contato') }}>Escolher Este Plano</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card pricing-card_active">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Padrão</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>199<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso 24/7 à academia, incluindo aulas exclusivas. Treinos personalizados e nutricionisa inclusivo.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href={{ url('/contato') }}>Escolher Este Plano</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Associação Ultimate</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>249<span class="duration">/mês</span></h4>
                    <p class="pricing-card_content">Acesso ilimitado à academia a todas as aulas. Acompanhamento individual com instrutores.</p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 treinos</li>
                            <li><i class="far fa-check-circle"></i>Ducha e armários gratuitos</li>
                            <li><i class="far fa-check-circle"></i>Tapete de yoga pessoal</li>
                            <li><i class="far fa-check-circle"></i>Estacionamento gratuito</li>
                        </ul>
                    </div>
                    <a class="btn style2" href={{ url('/contato') }}>Escolher Este Plano</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

