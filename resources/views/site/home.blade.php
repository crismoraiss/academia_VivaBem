@extends('layout.layout')

@section('titulo','home')

@section('conteudo')

<html>
<body>

<!--==============================
    Área do Herói
==============================-->
<div class="hero-wrapper hero-2" id="hero">
    <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
        <div class="hero-slider" data-bg-src="assets/img/hero/banner.png">
           <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                <img src="assets/img/hero/hero_shape_2-1.png" alt="img">
            </div>
            <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                <img src="assets/img/hero/hero_shape_2-2.png" alt="img">
            </div>
            <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                <img src="assets/img/hero/hero_shape_2-3.png" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-style2">
                            <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Academia</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">VIVABEM</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider" data-bg-src="assets/img/hero/banner02.png">
            <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                <img src="assets/img/hero/hero_shape_2-1.png" alt="img">
            </div>
            <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                <img src="assets/img/hero/hero_shape_2-2.png" alt="img">
            </div>
            <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                <img src="assets/img/hero/hero_shape_2-3.png" alt="img">
            </div>
            <div class="container">
                <div class="row justify-content-lg-end justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-style2">
                            <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Academia</span>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">VIVABEM</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-arrow">
        <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">PREV</button>
        <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">NEXT</button>
    </div>
</div>


    <!--==============================
    Service Area
    ==============================-->
    <div class="service-bg2-area" data-bg-src="assets/img/bg/service-bg2.png">

         <!--==============================
        BMI Area
        ==============================-->
        <div class="bmi-area-1 space">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="title-area mb-30">
                            <span class="sub-title">TESTE SEU IMC</span>
                            <h2 class="sec-title text-white fw-semibold">ÍNDICE DE MASSA CORPORAL</h2>
                            <p class="sec-text">O IMC é uma ferramenta amplamente utilizada para avaliar o peso corporal em relação à altura. Pode fornecer uma indicação geral se um indivíduo está dentro de uma faixa de peso saudável.</p>
                        </div>
                        <div class="bmi-table mb-lg-0 mb-40">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">IMC</th>
                                        <th scope="col">ESTADO DE PESO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Abaixo de 18,5</th>
                                        <td>Abaixo do peso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18.5 - 24.9</th>
                                        <td>Normal</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25.0 - 29.9</th>
                                        <td>Sobrepeso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">30.0 - 34.0</th>
                                        <td>Obeso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">35.0 - Acima</th>
                                        <td>Extremamente Obeso</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="bmi-calculator-form">
                            <h4 class="form-title">Reserve o Seu Lugar:</h4>
                            <form class="bmi-form" id="form" name="bmiCalc">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="weight" class="form-control style-border" placeholder="Peso / KG" type="text" name="weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="height" class="form-control style-border" placeholder="Altura / CM" type="text" name="height">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control style-border" name="age" id="age" placeholder="Idade">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="sex" id="sex" placeholder="Gênero">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC" type="text" name="bmi">
                                </div>
                                <div class="form-group">
                                    <input for="bmi_message" placeholder="Significado" class="form-control style-border" type="text" name="meaning">
                                </div>
                                <div class="btn style3">
                                    <input type="button" value="Calcular IMC" onClick="calculateBMI()">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>




        <!--==============================
        Service Area 01
        ==============================-->
        <div class="service-area-1 space-bottom overflow-hidden">
            <div class="container">
                <div class="área-de-título">
                    <span class="subtítulo">Nossos Recursos</span>
                    <h2 class="título-sec text-white fw-semibold">SERVIÇOS QUE ESTAMOS OFERECENDO</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel service-slider-1 style2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">



                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href={{ url('modalidade/treinofuncional') }}>Treino Funcional</a></h4>
                                <p class="service-card_text">Aula de treino intenso que utiliza exercícios variados.</p>
                                <a href={{ url('modalidade/treinofuncional') }} class="link-btn" tabindex="0">Leia mais..<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href={{ url('modalidade/boxe') }}>Boxe</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício.</p>
                                <a href={{ url('modalidade/boxe') }} class="link-btn" tabindex="0">Leia mais..<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href={{ url('modalidade/meditacao') }}>Meditação</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício</p>
                                <a href={{ url('modalidade/meditacao') }} class="link-btn" tabindex="0">Leia mais..<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href={{ url('modalidade/yoga') }}>Yoga</a></h4>
                                <p class="service-card_text">Treinos de alta intensidade alternando entre períodos intensos de exercício.</p>
                                <a href={{ url('modalidade/yoga') }} class="link-btn" tabindex="0">Leia mais..<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>



                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href={{ url('modalidade/yoga') }}>Zumba</a></h4>
                                <p class="service-card_text">Aula divertida de dança com ritmos variados.</p>
                                <a href={{ url('modalidade/yoga') }} class="link-btn" tabindex="0">Leia mais..<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Pilates</a></h4>
                                <p class="service-card_text">Aula de alongamento e fortalecimento com foco na postura.</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Leia mais..<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
        <div class="sec-shape2-bottom">
            <img src="assets/img/bg/sec-shape2-top.png" alt="img">
        </div>
    </div>

<!--==============================
        Área de Programação
        ==============================-->
        <div class="schedule-area-1 space">
            <div class="container container2">
                <div class="title-area text-center">
                    <span class="sub-title">Nossas Aulas</span>
                    <h2 class="sec-title fw-semibold">NOSSA GRADE DE TREINAMENTO</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="schedule-tab-1">
                            <div class="filter-menu-active mb-50 text-center">
                                <button data-filter=".cat1" class="active btn style4 style-r0" type="button">TODOS
                                    EVENTOS</button>
                                <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                                <button class="btn style4 style-r0" data-filter=".cat3" type="button">ACADEMIA LIVRE</button>
                                <button class="btn style4 style-r0" data-filter=".cat4" type="button">CORPO TOTAL
                                    </button>
                                <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                            </div>
                            <div class="filter-active-cat1">
                                <div class="filter-item cat1">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">SEGUNDA-FEIRA</th>
                                                    <th scope="col">TERÇA-FEIRA</th>
                                                    <th scope="col">QUARTA-FEIRA</th>
                                                    <th scope="col">QUINTA-FEIRA</th>
                                                    <th scope="col">SEXTA-FEIRA</th>
                                                    <th scope="col">SÁBADO</th>
                                                    <th scope="col">DOMINGO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Construção Corporal</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Academia Livre</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Aula de Fitness</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Treino Intenso Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">08:00 - 09:00</th>
                                                    <td>
                                                        <span>Trabalho de Bombeamento</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2"></td>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Academia Livre</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2">
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">09:00 - 10:00</th>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Aula de Fitness</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Aula de Yoga</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">10:00 - 11:00</th>
                                                    <td>
                                                        <span>Construção Corporal</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Trabalho de Bombeamento</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Aula de Fitness</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Academia Livre</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Aula de Yoga</span>
                                                        Daniel
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="filter-item cat2">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">SEGUNDA-FEIRA</th>
                                                    <th scope="col">TERÇA-FEIRA</th>
                                                    <th scope="col">QUARTA-FEIRA</th>
                                                    <th scope="col">QUINTA-FEIRA</th>
                                                    <th scope="col">SEXTA-FEIRA</th>
                                                    <th scope="col">SÁBADO</th>
                                                    <th scope="col">DOMINGO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Construção Corporal</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Academia Livre</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Aula de Fitness</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>

                                                    <div class="filter-item cat3">
                                                        <div class="table-responsive">
                                                            <table class="schedule-table table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">SEGUNDA-FEIRA</th>
                                                                        <th scope="col">TERÇA-FEIRA</th>
                                                                        <th scope="col">QUARTA-FEIRA</th>
                                                                        <th scope="col">QUINTA-FEIRA</th>
                                                                        <th scope="col">SEXTA-FEIRA</th>
                                                                        <th scope="col">SÁBADO</th>
                                                                        <th scope="col">DOMINGO</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">06:00 - 07:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>CrossFit Pro</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Cardio Box</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">07:00 - 08:00</th>
                                                                        <td></td>
                                                                        <td class="active">
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Treino Intenso Pro</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">08:00 - 09:00</th>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2"></td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2">
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">09:00 - 10:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">10:00 - 11:00</th>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item cat4">
                                                        <div class="table-responsive">
                                                            <table class="schedule-table table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">SEGUNDA-FEIRA</th>
                                                                        <th scope="col">TERÇA-FEIRA</th>
                                                                        <th scope="col">QUARTA-FEIRA</th>
                                                                        <th scope="col">QUINTA-FEIRA</th>
                                                                        <th scope="col">SEXTA-FEIRA</th>
                                                                        <th scope="col">SÁBADO</th>
                                                                        <th scope="col">DOMINGO</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">06:00 - 07:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>CrossFit Pro</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Cardio Box</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">07:00 - 08:00</th>
                                                                        <td></td>
                                                                        <td class="active">
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Pro Intense
                                                                                Workout</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">08:00 - 09:00</th>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2"></td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2">
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">09:00 - 10:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">10:00 - 11:00</th>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item cat5">
                                                        <div class="table-responsive">
                                                            <table class="schedule-table table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">SEGUNDA-FEIRA</th>
                                                                        <th scope="col">TERÇA-FEIRA</th>
                                                                        <th scope="col">QUARTA-FEIRA</th>
                                                                        <th scope="col">QUINTA-FEIRA</th>
                                                                        <th scope="col">SEXTA-FEIRA</th>
                                                                        <th scope="col">SÁBADO</th>
                                                                        <th scope="col">DOMINGO</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">06:00 - 07:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>CrossFit Pro</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Cardio Box</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">07:00 - 08:00</th>
                                                                        <td></td>
                                                                        <td class="active">
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Pro Intense
                                                                                Workout</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">08:00 - 09:00</th>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2"></td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2">
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">09:00 - 10:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">10:00 - 11:00</th>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--==============================
    wcu area
    ==============================-->
    <div class="wcu-area-2 space">
        <div class="container container2">
            <div class="row justify-content-between">
                <div class="col-xl-6 align-self-center order-xl-2">
                    <div class="wcu-thumb-wrap ms-xl-5 mb-xl-0 mb-40">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="wcu-thumb2">
                                    <img src="assets/img/normal/wcu_2-1.png" alt="img">
                                </div>
                                <div class="wcu-grid2 mt-4" data-bg-src="assets/img/bg/wcu_box-bg.png">
                                    <div class="details">
                                        <span class="wcu-grid_text"> <span class="counter-number">15000</span>+ Alunos Felizes e Bem-Sucedidos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wcu-grid2 mb-4 mt-sm-0 mt-4 bg-theme">
                                    <div class="details">
                                        <span class="wcu-grid_text"> <span class="counter-number">25</span>+ Anos de Experiência</span>
                                    </div>
                                </div>
                                <div class="wcu-thumb2">
                                    <img src="assets/img/normal/wcu_2-2.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-1">
                    <div class="title-area">
                        <span class="sub-title">POR QUE NOS ESCOLHER</span>
                        <h2 class="sec-title fw-semibold">NÓS OFERECEMOS NOSSO SUPORTE FITNESS 100% CONFIÁVEL</h2>
                        <p class="sec-text">Defina seus objetivos específicos de musculação. Determine o que você deseja alcançar em termos de tamanho muscular, força e físico geral. Estabeleça metas realistas e mensuráveis que guiarão seu plano de treino e nutrição.</p>
                        <div class="about-grid-wrap mt-40">
                            <div class="about-grid style2">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/wcu-icon_2-1.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_title">Instrutores Especializados</h4>
                                    <p class="about-grid_text">Entrega regular em 30 dias</p>
                                </div>
                            </div>
                            <div class="about-grid style2">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/wcu-icon_2-2.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_title">Equipamentos Modernos</h4>
                                    <p class="about-grid_text">Entrega rápida em 24 horas</p>
                                </div>
                            </div>
                        </div>
                        <p class="sec-text">Implemente os princípios de sobrecarga progressiva em seu treino. Aumente gradualmente o peso, as repetições ou a intensidade de seus exercícios ao longo do tempo...</p>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href={{ url('/contato') }} class="btn style-r0">Agende uma Consulta</a>
                        <div class="about-info-wrap style2">
                            <div class="icon"><i class="fas fa-phone"></i></div>
                            <div class="details">
                                <p class="about-info-title">Ligue para Nós 24/7</p>
                                <a class="about-info-link" href="tel:+5511999999999">+55 11999999999</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--==============================
    Testimonial Area
    ==============================-->
    <div class="testimonial-area-1 overflow-hidden">
        <div class="testimonial-bg-thumb1">
            <div class="thumb">
                <img src="assets/img/testimonial/testi_bg1.png" alt="img">
            </div>
        </div>
        <div class="space">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-8 col-lg-9">
                        <div class="testi-box-wrap1 text-center" data-bg-src="assets/img/testimonial/testi_box-bg.png">
                            <div class="title-area">
                                <span class="sub-title">Feedbacks</span>
                                <h2 class="sec-title text-white">Depoimentos confiáveis</h2>
                            </div>
                            <div class="row global-carousel testi-slider-1" data-slide-show="1">
                                <div class="col-lg-6">
                                    <div class="testi-box">
                                        <div class="testi-box_thumb">
                                            <img src="assets/img/testimonial/testi_1_1.png" alt="img">
                                            <div class="block-quote">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="testi-box_content">
                                            <p class="testi-box_text">"Sou membro do Fitmas há mais de um ano e tem feito toda a diferença na minha jornada de fitness. A academia possui uma gama fantástica de equipamentos que atendem a todas as minhas necessidades de treino..."</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="testi-box">
                                        <div class="testi-box_thumb">
                                            <img src="assets/img/testimonial/testi_1_2.png" alt="img">
                                            <div class="block-quote">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="testi-box_content">
                                            <p class="testi-box_text">"Sou membro do Fitmas há mais de um ano e tem feito toda a diferença na minha jornada de fitness. A academia possui uma gama fantástica de equipamentos que atendem a todas as minhas necessidades de treino..."</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="testi-box">
                                        <div class="testi-box_thumb">
                                            <img src="assets/img/testimonial/testi_1_3.png" alt="img">
                                            <div class="block-quote">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <div class="testi-box_content">
                                            <p class="testi-box_text">"Sou membro do Fitmas há mais de um ano e tem feito toda a diferença na minha jornada de fitness. A academia possui uma gama fantástica de equipamentos que atendem a todas as minhas necessidades de treino..."</p>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-slider-controller" data-sliderNavfor=".testi-slider-1">
                                <a class="indicatior-btn active">
                                    <div class="testi-box_profile">
                                        <h4 class="testi-box_name">Andrew Daniel</h4>
                                        <span class="testi-box_desig">Aluno da Academia</span>
                                    </div>
                                </a>
                                <a class="indicatior-btn">
                                    <div class="testi-box_profile">
                                        <h4 class="testi-box_name">Mike Harison</h4>
                                        <span class="testi-box_desig">Aluno da Academia</span>
                                    </div>
                                </a>
                                <a class="indicatior-btn">
                                    <div class="testi-box_profile">
                                        <h4 class="testi-box_name">William Henry</h4>
                                        <span class="testi-box_desig">Aluno da Academia</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        wcu area 02 end
    ==============================-->

    <div class="service-bg-area background-image" style="background-image: url(&quot;assets/img/bg/teste1.png&quot;);">
        <div class="sec-shape-top">
            <img src="assets/img/bg/sec-shape-top.png" alt="img">
        </div>
        <!--==============================
        Service Area 01
        planos
        ==============================-->
        <div class="pricing-area">
            <div class="container">
                <div class="title-area text-center">
                    <h3 class="sub-title">Planos de Preços</h3>
                    <h2 class="sec-title text-white">Nosso Plano de Preço</h2>
                </div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card pricing-card_active">
                            <div class="pricing-card_bg">
                                <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                            </div>
                            <div class="pricing-card_icon">
                                <img src="assets/img/icon/picing-icon_1-1.svg" alt="img">
                            </div>
                            <h3 class="pricing-card_title">Associação Básica</h3>
                            <h4 class="pricing-card_price"><span class="currency">R$</span>99<span class="duration">/mês</span></h4>
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
                        <div class="pricing-card">
                            <div class="pricing-card_bg">
                                <img src="assets/img/bg/pricing-card1-bg.png" alt="img">
                            </div>
                            <div class="pricing-card_icon">
                                <img src="assets/img/icon/picing-icon_1-2.svg" alt="img">
                            </div>
                            <h3 class="pricing-card_title">Associação Gold</h3>
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
                            <div class ="pricing-card_icon">
                                <img src="assets/img/icon/picing-icon_1-3.svg" alt="img">
                            </div>
                            <h3 class="pricing-card_title">Associação Premium</h3>
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



        <!--==============================
        Why-choose-us Area
        ==============================-->


        <div class="sec-shape-bottom">
            <img src="assets/img/bg/sec-shape-bottom.png" alt="img">
        </div>
    </div>

    <div class="bg-img-sec" data-bg-src="assets/img/bg/team-bg-2.png">

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space bg-smoke3">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Blog Posts
                </span>
                <h2 class="sec-title">Leia nossos artigos mais recentes</h2>
            </div>
            <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_1.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href={{ url('/noticia') }}>Dicas e Conselhos de Nutrição para Praticantes de Academia</a></h3>
                            <p class="blog-text">Dicas e Conselhos de Nutrição para Praticantes de Academia</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_2.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href={{ url('/noticia') }}>Descubra Seu Verdadeiro Potencial no Fitmas</a></h3>
                            <p class="blog-text">Se você está visitando a área ou quer trazer um amigo para malhar, oferecemos passes diários e passes de convidado...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_3.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href={{ url('/noticia') }}>Opções com desconto para estudantes e idosos</a></h3>
                            <p class="blog-text">Entendemos o valor do exercício para toda a família, e nossa opção familiar permite que vários membros participem.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_1.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href={{ url('/noticia') }}>Dicas e Conselhos de Nutrição para Praticantes de Academia</a></h3>
                            <p class="blog-text">Dicas e Conselhos de Nutrição para Praticantes de Academia</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_2.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href={{ url('/noticia') }}>Descubra Seu Verdadeiro Potencial no Fitmas</a></h3>
                            <p class="blog-text">Se você está visitando a área ou quer trazer um amigo para malhar, oferecemos passes diários e passes de convidado...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_1_3.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="assets/img/blog/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 Dez 2023</a>
                                <a href="blog.html"><i class="far fa-user"></i>por Andrew</a>
                            </div>
                            <h3 class="blog-title box-title"><a href={{ url('/noticia') }}>Opções com desconto para estudantes e idosos</a></h3>
                            <p class="blog-text">Entendemos o valor do exercício para toda a família, e nossa opção familiar permite que vários membros participem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
