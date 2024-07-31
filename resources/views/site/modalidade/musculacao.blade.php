@extends('layout.layout')

@section('title', 'Modalidade - Danca')

@section('conteudo')


<!--==============================
    Trilha de Navegação (Breadcrumb)
============================== -->
{{-- <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png"> --}}





<!--==============================
    Trilha de Navegação (Breadcrumb)
============================== -->
{{-- <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png"> --}}

    <div class="breadcumb-wrapper background-image" style=" background-image: url(../assets/img/bg/breadcrumb-bg.png);
}" data-bg-src="../assets/img/bg/breadcrumb-bg.png">

</div>

 <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-50">
                            <img src="../assets/img/normal/service-details1-1.png" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">A musculação fortalece e desenvolve os músculos do corpo de maneira eficaz.</h2>
                            <p class="mb-30">A musculação é conhecida por promover o crescimento e a tonificação dos músculos. Ao realizar exercícios de resistência, como levantamento de peso, os músculos são submetidos a estresse controlado, estimulando o processo de reparo e crescimento. Esse desenvolvimento muscular não apenas melhora a estética, mas também contribui para a funcionalidade do corpo, auxiliando em atividades diárias e esportivas.</p>
                            <p class="mb-50"> Além do ganho de massa muscular, a musculação é eficaz na queima de calorias e na redução da gordura corporal. O aumento da massa muscular acelera o metabolismo, resultando em uma maior capacidade do corpo em queimar calorias, mesmo em repouso. Isso contribui significativamente para a melhoria da composição corporal, favorecendo a perda de peso e a conquista de uma forma física mais saudável.</p>
                            <p class="mt-25 mb-50">Embora a musculação seja frequentemente associada à melhoria da aparência física, seus benefícios vão além da estética. O treinamento de força fortalece ossos, articulações e tendões, reduzindo o risco de lesões e melhorando a postura. Além disso, está associado a benefícios para a saúde mental, como a liberação de endorfinas, que contribuem para o bem-estar emocional e o alívio do estresse.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Todos os treinos</h3>
                            <ul>
                                <li>
                                    <a href={{ url('modalidade/treinofuncional') }}><i class="fa-solid fa-arrow-right"></i>Treino Funcional</a>
                                </li>
                                <li>
                                    <a href={{ url('modalidade/meditacao') }}><i class="fa-solid fa-arrow-right"></i>Meditação</a>
                                </li>
                                <li>
                                    <a href={{ url('modalidade/boxe') }}><i class="fa-solid fa-arrow-right"></i>Boxe</a>
                                </li>
                                <li>
                                    <a href={{ url('modalidade/yoga') }}><i class="fa-solid fa-arrow-right"></i>Yoga</a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_schedule">
                            <h3 class="widget_title">Horario da Academia</h3>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                   Seg a Sex, das 08h00 as 22h00
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Sab, das 08h00 as 17h00
                                </li>
                                <li class="unavailable">
                                    <i class="far fa-clock"></i>
                                    Domingo fechado
                                </li>
                            </ul>
                        </div>
                    </aside>
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
                        <img src="../assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="../assets/img/icon/picing-icon_1-1.svg" alt="img">
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
                        <img src="../assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="../assets/img/icon/picing-icon_1-2.svg" alt="img">
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
                        <img src="../assets/img/bg/pricing-card1-bg.png" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="../assets/img/icon/picing-icon_1-3.svg" alt="img">
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
