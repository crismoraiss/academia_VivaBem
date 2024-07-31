<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/css-dash/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/bettterwaether.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/CalcSS3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/form-validaton.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/ion.rangeSlider.skinFlat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/ion.rangeSlider.skinHTML5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/ ion.rangeSlider.skinModern.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/ion.rangeSlider.skinNice.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/ion.rangeSlider.skinSimple.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css-dash/jquery-ui.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css-dash/jquery.bootstrap-touchspin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/jquery.circliful.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/jqvmap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css-dash/loaders.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/main.scss') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/perfect-scrolbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/smart_wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/tether.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-dash/toggle-switch.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Roboto:wght@300;400;500;700&display=swap");

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        nav {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
        }

        nav ul,
        nav ul li {
            outline: 0;
        }

        nav ul li a {
            text-decoration: none;
        }

        body {
            font-family: "Nunito", sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(to bottom, #000000, #1f6e64);
            /* background-image: url(https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/5baf8325-ed69-40b0-b9d2-d8c5d2bde3b0); */
            background-repeat: no-repeat;
            background-size: cover;
            /* background: #212140; */
        }

        /* MAIN MENU */

        main {
            display: grid;
            grid-template-columns: 13% 87%;
            width: 100%;
            margin: 40px;
            background: rgb(254, 254, 254);
            box-shadow: 0 0.5px 0 1px rgba(255, 255, 255, 0.23) inset,
                0 1px 0 0 rgba(255, 255, 255, 0.66) inset, 0 4px 16px rgba(0, 0, 0, 0.12);
            border-radius: 15px;
            z-index: 10;
        }

        .main-menu {
            overflow: hidden;
            background: #050606;
            padding-top: 10px;
            border-radius: 15px 0 0 15px;
            font-family: "Roboto", sans-serif;
        }

        .main-menu h1 {
            display: block;
            font-size: 1.5rem;
            font-weight: 500;
            text-align: center;
            margin: 20px 0 30px;
            color: #fff;
            font-family: "Nunito", sans-serif;
        }

        .logo {
            display: none;
        }

        .nav-item {
            position: relative;
            display: block;
        }

        .nav-item a {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1rem;
            padding: 15px 0;
            margin-left: 10px;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .nav-item b:nth-child(1) {
            position: absolute;
            top: -15px;
            height: 15px;
            width: 100%;
            background: #fff;
            display: none;
        }

        .nav-item b:nth-child(1)::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-bottom-right-radius: 20px;
            background: rgb(73, 57, 113);
        }

        .nav-item b:nth-child(2) {
            position: absolute;
            bottom: -15px;
            height: 15px;
            width: 100%;
            background: #fff;
            display: none;
        }

        .nav-item b:nth-child(2)::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-top-right-radius: 20px;
            background: rgb(73, 57, 113);
        }

        .nav-item.active b:nth-child(1),
        .nav-item.active b:nth-child(2) {
            display: block;
        }

        .nav-item.active a {
            text-decoration: none;
            color: #000;
            background: rgb(254, 254, 254);
        }

        .nav-icon {
            width: 60px;
            height: 20px;
            font-size: 20px;
            text-align: center;
        }

        .nav-text {
            display: block;
            width: 120px;
            height: 20px;
        }

        /* CONTENT */

        .content {
            display: grid;
            grid-template-columns: 75% 25%;
        }

        /* LEFT CONTENT */

        .left-content {
            display: grid;
            grid-template-rows: 50% 50%;
            background: #f6f7fb;
            margin: 15px;
            padding: 20px;
            border-radius: 15px;
        }

        /* ACTIVITIES */

        .activities h1 {
            margin: 0 0 20px;
            font-size: 1.4rem;
            font-weight: 700;
        }

        .activity-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(2, 150px);
            column-gap: 10px;
        }

        .img-one {
            grid-area: 1 / 1 / 2 / 2;
        }

        .img-two {
            grid-area: 2 / 1 / 3 / 2;
        }

        .img-three {
            display: block;
            grid-area: 1 / 2 / 3 / 4;
        }

        .img-four {
            grid-area: 1 / 4 / 2 / 5;
        }

        .img-five {
            grid-area: 1 / 5 / 2 / 6;
        }

        .img-six {
            display: block;
            grid-area: 2 / 4 / 3 / 6;
        }

        .image-container {
            position: relative;
            margin-bottom: 10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
            border-radius: 10px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: flex-end;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg,
                    transparent,
                    transparent,
                    rgba(3, 3, 185, 0.5));
            border-radius: 10px;
            transition: all 0.6s linear;
        }

        .image-container:hover .overlay {
            opacity: 0;
        }

        .overlay h3 {
            margin-bottom: 8px;
            margin-right: 10px;
            color: #fff;
        }

        /* LEFT BOTTOM */

        .left-bottom {
            display: grid;
            grid-template-columns: 55% 40%;
            gap: 40px;
        }

        /* WEEKLY SCHEDULE */

        .weekly-schedule {
            display: flex;
            flex-direction: column;
        }

        .weekly-schedule h1 {
            margin-top: 20px;
            font-size: 1.3rem;
            font-weight: 700;
        }

        .calendar {
            margin-top: 10px;
        }

        .day-and-activity {
            display: grid;
            grid-template-columns: 15% 60% 25%;
            align-items: center;
            border-radius: 14px;
            margin-bottom: 5px;
            color: #484d53;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }

        .activity-one {
            background-color: rgb(124, 136, 224, 0.5);
            background-image: linear-gradient(240deg,
                    rgb(124, 136, 224) 0%,
                    #c3f4fc 100%);
        }

        .activity-two {
            background-color: #aee2a4a1;
            background-image: linear-gradient(240deg, #e5a243ab 0%, #f7f7aa 90%);
        }

        .activity-three {
            background-color: #ecfcc376;
            background-image: linear-gradient(240deg, #97e7d1 0%, #ecfcc3 100%);
        }

        .activity-four {
            background-color: #e6a7c3b5;
            background-image: linear-gradient(240deg, #fc8ebe 0%, #fce5c3 100%);
        }

        .day {
            display: flex;
            flex-direction: column;
            align-items: center;
            transform: translateY(-10px);
        }

        .day h1 {
            font-size: 1.6rem;
            font-weight: 600;
        }

        .day p {
            text-transform: uppercase;
            font-size: 0.9rem;
            font-weight: 600;
            transform: translateY(-3px);
        }

        .activity {
            border-left: 3px solid #484d53;
        }

        .participants {
            display: flex;
            margin-left: 20px;
        }

        .participants img {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            z-index: calc(2 * var(--i));
            margin-left: -10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }

        .activity h2 {
            margin-left: 10px;
            font-size: 1.25rem;
            font-weight: 600;
            border-radius: 12px;
        }

        .btn {
            display: block;
            padding: 8px 24px;
            margin: 10px auto;
            font-size: 1.1rem;
            font-weight: 500;
            outline: none;
            text-decoration: none;
            color: #484b57;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            cursor: pointer;
        }

        .btn:hover,
        .btn:focus,
        .btn:active,
        .btn:visited {
            transition-timing-function: cubic-bezier(0.6, 4, 0.3, 0.8);
            animation: gelatine 0.5s 1;
        }

        @keyframes gelatine {

            0%,
            100% {
                transform: scale(1, 1);
            }

            25% {
                transform: scale(0.9, 1.1);
            }

            50% {
                transform: scale(1.1, 0.9);
            }

            75% {
                transform: scale(0.95, 1.05);
            }
        }

        /* PERSONAL BESTS */

        .personal-bests {
            display: block;
        }

        .personal-bests h1 {
            margin-top: 20px;
            font-size: 1.3rem;
            font-weight: 700;
        }

        .personal-bests-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 150px);
            gap: 10px;
            margin-top: 10px;
        }

        .best-item {
            display: flex;
            gap: 20px;
            width: 100%;
            height: 100%;
            border-radius: 15px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }

        .box-one {
            flex-direction: row;
            align-items: center;
            justify-content: center;
            grid-area: 1 / 1 / 2 / 3;
            background-color: rgba(185, 159, 237, 0.6);
            padding: 15px;
            font-size: 1rem;
            font-weight: 700;
        }

        .box-one img {
            max-width: 100px;
            aspect-ratio: 4/3;
        }

        .box-two {
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            font-size: 0.9rem;
            font-weight: 700;
            padding: 10px;
            grid-area: 2 / 1 / 3 / 2;
            background-color: rgba(238, 184, 114, 0.6);
        }

        .box-two img {
            max-width: 90px;
            aspect-ratio: 3/2;
            align-self: flex-end;
        }

        .box-three {
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            font-size: 0.9rem;
            font-weight: 700;
            padding: 10px;
            grid-area: 2 / 2 / 3 / 3;
            background-color: rgba(184, 224, 192, 0.6);
        }

        .box-three img {
            max-width: 70px;
            aspect-ratio: 1/1;
            align-self: flex-end;
        }

        /* RIGHT CONTENT */

        .right-content {
            display: grid;
            grid-template-rows: 5% 20% 75%;
            background: #f6f7fb;
            margin: 15px 15px 15px 0;
            padding: 10px 0;
            border-radius: 15px;
        }

        /* USER INFO */

        .user-info {
            display: grid;
            grid-template-columns: 30% 55% 15%;
            align-items: center;
            padding: 0 10px;
        }

        .icon-container {
            display: flex;
            gap: 15px;
        }

        .user-info h4 {
            margin-left: 40px;
        }

        .user-info img {
            width: 40px;
            aspect-ratio: 1/1;
            border-radius: 50%;
        }

        /* ACTIVE CALORIES  */

        .active-calories {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgb(214, 227, 248);
            padding: 0 10px;
            margin: 15px 10px 0;
            border-radius: 15px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }

        .active-calories h1 {
            margin-top: 10px;
            font-size: 1.2rem;
        }

        .active-calories-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }

        .calories-content p {
            font-size: 1rem;
        }

        .calories-content p span {
            font-weight: 700;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
            padding: 10px 0;
            /* width: 200px; */
        }

        .box h2 {
            position: relative;
            text-align: center;
            font-size: 1.25rem;
            color: rgb(91, 95, 111);
            font-weight: 600;
        }

        .box h2 small {
            font-size: 0.8rem;
            font-weight: 600;
        }

        .circle {
            position: relative;
            width: 80px;
            aspect-ratio: 1/1;
            background: conic-gradient(from 0deg,
                    #590b94 0%,
                    #590b94 0% var(--i),
                    #b3b2b2 var(--i),
                    #b3b2b2 100%);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle::before {
            content: "";
            position: absolute;
            inset: 10px;
            background-color: rgb(214, 227, 248);
            border-radius: 50%;
        }

        /* MOBILE PERSONAL BESTS  */

        .mobile-personal-bests {
            display: none;
        }

        /* FRIEND ACTIVITIES  */

        .friends-activity {
            display: flex;
            flex-direction: column;
        }

        .friends-activity h1 {
            font-size: 1.2rem;
            font-weight: 700;
            margin: 15px 0 10px 15px;
        }

        .card-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .card {
            background-color: #fff;
            margin: 0 10px;
            padding: 5px 7px;
            border-radius: 15px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 3px;
        }

        .card-two {
            display: block;
        }

        .card-user-info {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding-bottom: 5px;
        }

        .card-user-info img {
            width: 25px;
            aspect-ratio: 1/1;
            border-radius: 50%;
            object-fit: cover;
        }

        .card-user-info h2 {
            font-size: 1rem;
            font-weight: 700;
            margin-left: 5px;
        }

        .card-img {
            display: block;
            width: 100%;
            aspect-ratio: 7/4;
            margin-bottom: 10px;
            object-fit: cover;
            border-radius: 10px;
            object-position: 50% 30%;
        }

        .card p {
            font-size: 0.9rem;
            padding: 0 5px 5px;
        }

        @media (max-width: 1500px) {
            main {
                grid-template-columns: 6% 94%;
            }

            .main-menu h1 {
                display: none;
            }

            .logo {
                display: block;
                width: 30px;
                margin: 20px auto;
            }

            .nav-text {
                display: none;
            }

            .content {
                grid-template-columns: 70% 30%;
            }
        }

        @media (max-width: 1310px) {
            main {
                grid-template-columns: 8% 92%;
                margin: 30px;
            }

            .content {
                grid-template-columns: 65% 35%;
            }

            .day-and-activity {
                margin-bottom: 10px;
            }

            .btn {
                padding: 8px 16px;
                margin: 10px 0;
                margin-right: 10px;
                font-size: 1rem;
            }

            .personal-bests-container {
                grid-template-rows: repeat(3, 98px);
                gap: 15px;
            }

            .box-one {
                flex-direction: row;
                justify-content: space-between;
                grid-area: 1 / 1 / 2 / 3;
                padding: 10px;
                font-size: 0.9rem;
            }

            .box-one img {
                max-width: 80px;
            }

            .box-two {
                flex-direction: row;
                justify-content: space-between;
                grid-area: 2 / 1 / 3 / 3;
            }

            .box-two img {
                max-width: 70px;
                align-self: center;
            }

            .box-three {
                flex-direction: row;
                justify-content: space-between;
                grid-area: 3 / 1 / 4 / 3;
            }

            .box-three img {
                max-width: 60px;
                align-self: center;
            }

            .right-content {
                grid-template-rows: 4% 20% 76%;
                margin: 15px 15px 15px 0;
            }
        }

        @media (max-width: 1150px) {
            .content {
                grid-template-columns: 60% 40%;
            }

            .left-content {
                grid-template-rows: 50% 50%;
                margin: 15px;
                padding: 20px;
            }

            .btn {
                padding: 8px 8px;
                font-size: 0.9rem;
            }

            .personal-bests-container {
                grid-template-rows: repeat(3, 70px);
                gap: 10px;
            }

            .activity-container {
                grid-template-columns: repeat(3, 1fr);
                grid-template-rows: repeat(2, 150px);
            }

            .img-one {
                grid-area: 1 / 1 / 2 / 2;
            }

            .img-two {
                grid-area: 2 / 1 / 3 / 2;
            }

            .img-three {
                display: none;
            }

            .img-four {
                grid-area: 1 / 2 / 2 / 3;
            }

            .img-five {
                grid-area: 1 / 3 / 2 / 4;
            }

            .img-six {
                grid-area: 2 / 2 / 3 / 4;
            }

            .left-bottom {
                grid-template-columns: 100%;
                gap: 0;
            }

            .right-content {
                grid-template-rows: 4% 19% 36% 41%;
            }

            .personal-bests {
                display: none;
            }

            .mobile-personal-bests {
                display: block;
                margin: 0 10px;
            }

            .mobile-personal-bests h1 {
                margin-top: 20px;
                font-size: 1.2rem;
            }

            .card-two {
                display: none;
            }

            .card-img {
                aspect-ratio: 16/9;
            }
        }

        @media (max-width: 1050px) {
            .right-content {
                grid-template-rows: 4% 19% 37% 40%;
            }
        }

        @media (max-width: 910px) {
            main {
                grid-template-columns: 10% 90%;
                margin: 20px;
            }

            .content {
                grid-template-columns: 55% 45%;
            }

            .left-content {
                grid-template-rows: 50% 50%;
                padding: 30px 20px 20px;
            }

            .activity-container {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(2, 150px);
            }

            .img-one {
                grid-area: 1 / 1 / 2 / 2;
            }

            .img-two {
                grid-area: 2 / 1 / 3 / 2;
            }

            .img-three {
                display: none;
            }

            .img-four {
                grid-area: 1 / 2 / 2 / 3;
            }

            .img-five {
                grid-area: 2 / 2 / 3 / 3;
            }

            .img-six {
                display: none;
            }
        }

        @media (max-width: 800px) {
            .content {
                grid-template-columns: 52% 48%;
            }
        }

        @media (max-width: 700px) {
            main {
                grid-template-columns: 15% 85%;
            }

            .content {
                grid-template-columns: 100%;
                grid-template-rows: 45% 55%;
                grid-template-areas:
                    "rightContent"
                    "leftContent";
            }

            .left-content {
                grid-area: leftContent;
                grid-template-rows: 45% 55%;
                padding: 10px 20px 10px;
            }

            .right-content {
                grid-area: rightContent;
                grid-template-rows: 5% 40% 50%;
                margin: 15px 15px 0 15px;
                padding: 10px 0 0;
                gap: 15px;
            }

            .activities,
            .weekly-schedule {
                margin-top: 10px;
            }

            .active-calories-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .friends-activity {
                display: none;
            }
        }
    </style>
</head>

<body>
    <main>
        <nav class="main-menu">

            <img class="logo"
                src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/4cfdcb5a-0137-4457-8be1-6e7bd1f29ebb"
                alt />
            @if (session('tipo_usuario') == 'Aluno')
                <h1>Aluno<br></h1>
                <ul>
                    <li class="nav-item active">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa-solid fa-user nav-icon"></i>
                            {{-- <i class="fa fa-house "></i> --}}
                            <span class="nav-text">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-user nav-icon"></i>
                            <span class="nav-text">Meus treinos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-calendar-check nav-icon"></i>
                            <span class="nav-text">Agendamentos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-person-running nav-icon"></i>
                            <span class="nav-text">Pagamentos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Cronograma</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Meus</span>
                        </a>
                    </li>

                    <li class="nav-item-gaby">
                        <b></b>
                        <b></b>
                        <a href="{{ route('sair') }}">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Sair</span>

                            {{-- <a href="{{ route('sair') }}" class="btn btn-danger">SAIR</a> --}}
                        </a>
                    </li>
                </ul>
            @elseif(session('tipo_usuario') == 'administrativo')
            {{-- no botao trazer o caminho da route para funcionario/ é para achar os dados de todos os funcionarios cadrastados e exibir --}}
                <h1>administrativo<br></h1>
                <ul>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href={{ route('dashboard.administrador.administrador') }}>
                            {{-- <i class="fa-solid fa-user nav-icon"></i> --}}
                            {{-- <i class="fa fa-house "></i> --}}
                            <span class="nav-text">Perfil</span>
                        </a>
                    </li>
 
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href={{ route('dashboard.administrador.aluno.index') }}>
                            {{-- <i class="fa fa-user nav-icon"></i> --}}
                            <span class="nav-text">Alunos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="{{ route('dashboard.administrador.aluno.create') }}">
                            {{-- <i class="fa fa-sliders nav-icon"></i> --}}
                            <span class="nav-text">Criar Aluno</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            {{-- <i class="fa fa-person-running nav-icon"></i> --}}
                            <span class="nav-text">Treinos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href={{ route('dashboard.administrador.funcionario.create') }}>
                            {{-- <i class="fa fa-sliders nav-icon"></i> --}}
                            <span class="nav-text">Criar Funcionario</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href={{ route('dashboard.administrador.funcionario.index') }}>
                            {{-- <i class="fa fa-sliders nav-icon"></i> --}}
                            <span class="nav-text">Funcionarios</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="{{ route('sair') }}">
                            {{-- <i class="fa fa-sliders nav-icon"></i> --}}
                            <span class="nav-text">Sair</span>
                        </a>
                    </li>
                </ul>
            @elseif(session('tipo_usuario') == 'instrutor')
                <h1>Funcionário<br></h1>
                <ul>
                    <li class="nav-item active">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa-solid fa-user nav-icon"></i>
                            {{-- <i class="fa fa-house "></i> --}}
                            <span class="nav-text">Perfil</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-user nav-icon"></i>
                            <span class="nav-text">Alunos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-calendar-check nav-icon"></i>
                            <span class="nav-text">Funcionários</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-person-running nav-icon"></i>
                            <span class="nav-text">Treinos</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Cronograma</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Pendências</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <b></b>
                        <b></b>
                        <a href="#">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Pagamentos</span>
                        </a>
                    </li>

                    <li class="nav-item-gaby">
                        <b></b>
                        <b></b>
                        <a href="{{ route('sair') }}">
                            <i class="fa fa-sliders nav-icon"></i>
                            <span class="nav-text">Sair</span>

                            {{-- <a href="{{ route('sair') }}" class="btn btn-danger">SAIR</a> --}}
                        </a>
                    </li>
                </ul>
            @endif
        </nav>



        <section class="">
            @yield('conteudo-dash')
        </section>

    </main>

    <script>
        const navItems = document.querySelectorAll(".nav-item");

        navItems.forEach((navItem, i) => {
            navItem.addEventListener("click", () => {
                navItems.forEach((item, j) => {
                    item.className = "nav-item";
                });
                navItem.className = "nav-item active";
            });
        });
    </script>




    <script src="assets/js-dash/custom.js"></script>

    <script src="assets/js-dash/jquery.js"></script>

    <script src="assets/js-dash/plugins.js"></script>


</body>

</html>
