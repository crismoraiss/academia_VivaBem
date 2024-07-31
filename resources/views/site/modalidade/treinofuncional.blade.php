@extends('layout.layout')

@section('title', 'Modalidade - Danca')

@section('conteudo')


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
                            <img src="../assets/img/normal/treinofuncional.png" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">O treino funcional destaca-se por melhorar a funcionalidade do corpo no dia a dia.</h2>
                            <p class="mb-30"> O treino funcional prioriza movimentos naturais do corpo, como agachar, levantar, puxar e empurrar. Ao replicar essas ações em exercícios, o treinamento funcional visa melhorar a coordenação motora, a estabilidade e a força global. Essa abordagem contribui não apenas para o condicionamento físico, mas também para a prevenção de lesões, uma vez que fortalece os músculos de maneira mais abrangente.</p>
                            <p class="mb-50">Uma das principais vantagens do treino funcional é sua capacidade de melhorar o desempenho nas atividades diárias. Os exercícios são projetados para simular situações do cotidiano, tornando os movimentos mais eficientes e eficazes. Isso se traduz em benefícios tangíveis, como maior facilidade ao levantar objetos pesados, realizar tarefas domésticas ou até mesmo ao praticar esportes específicos.</p>
                            <p class="mt-25 mb-50"> Diferentemente de abordagens convencionais, que muitas vezes isolam grupos musculares específicos, o treino funcional promove o engajamento simultâneo de diversos músculos. Isso não apenas desafia o corpo de maneira mais holística, mas também aprimora a estabilidade e a resistência. O treino funcional é versátil, permitindo a adaptação a diferentes níveis de condicionamento físico e objetivos pessoais.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Todos os treinos</h3>
                            <ul>
                                <li>
                                    <a href={{ url('modalidade/musculacao') }}><i class="fa-solid fa-arrow-right"></i>Musculação</a>
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
