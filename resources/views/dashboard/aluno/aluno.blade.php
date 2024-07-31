
{{--  --}}

{{-- @extends('layout.layout')

@section('title', 'Dashboard')

@section('conteudo') --}}
{{--
<h1>aluno</h1>
<a href="{{ route('sair') }}" class="btn btn-danger">Sair</a> --}}
{{--
@endsection --}}
@extends('layout-dash.layout-dash')

@section('title', 'Contato')

@section('conteudo-dash')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Roboto:wght@300;400;500;700&display=swap">
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
  background-image: url(https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/5baf8325-ed69-40b0-b9d2-d8c5d2bde3b0);
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
  background: #34495e;
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
  background: linear-gradient(
    180deg,
    transparent,
    transparent,
    rgba(3, 3, 185, 0.5)
  );
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
  background-image: linear-gradient(
    240deg,
    rgb(124, 136, 224) 0%,
    #c3f4fc 100%
  );
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
  background: conic-gradient(
    from 0deg,
    #590b94 0%,
    #590b94 0% var(--i),
    #b3b2b2 var(--i),
    #b3b2b2 100%
  );
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

{{-- <main> --}}
    {{-- <nav class="main-menu">
      <h1>Aplicativo Fitness</h1>
      <img class="logo" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/4cfdcb5a-0137-4457-8be1-6e7bd1f29ebb" alt="" />
      <ul>
        <li class="nav-item active">
          <b></b>
          <b></b>
          <a href="#">
            <i class="fa fa-house nav-icon"></i>
            <span class="nav-text">Início</span>
          </a>
        </li>

        <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <i class="fa fa-user nav-icon"></i>
              <span class="nav-text">Perfil</span>
            </a>
          </li>

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <i class="fa fa-calendar-check nav-icon"></i>
              <span class="nav-text">Agenda</span>
            </a>
          </li>

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <i class="fa fa-person-running nav-icon"></i>
              <span class="nav-text">Atividades</span>
            </a>
          </li>

          <li class="nav-item">
            <b></b>
            <b></b>
            <a href="#">
              <i class="fa fa-sliders nav-icon"></i>
              <span class="nav-text">Configurações</span>
            </a>
          </li>
        </ul>
      </nav> --}}

      <section class="content">
        <div class="left-content">
          <div class="activities">
            <h1>Bem vindo <strong>{{ $aluno->nomeAlunoo }}</strong></h1>
            <div class="activity-container">
              <div class="image-container img-one">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/467cf682-03fb-4fae-b129-5d4f5db304dd" alt="tênis" />
                <div class="overlay">
                  <h3>Tênis</h3>
                </div>
              </div>

              <div class="image-container img-two">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/3bab6a71-c842-4a50-9fed-b4ce650cb478" alt="caminhada" />
                <div class="overlay">
                  <h3>Caminhada</h3>
                </div>
              </div>

              <div class="image-container img-three">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c8e88356-8df5-4ac5-9e1f-5b9e99685021" alt="corrida" />
                <div class="overlay">
                  <h3>Corrida</h3>
                </div>
              </div>

              <div class="image-container img-four">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/69437d08-f203-4905-8cf5-05411cc28c19" alt="ciclismo" />
                <div class="overlay">
                  <h3>Ciclismo</h3>
                </div>
              </div>

              <div class="image-container img-five">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e1a66078-1927-4828-b793-15c403d06411" alt="yoga" />
                <div class="overlay">
                  <h3>Yoga</h3>
                </div>
              </div>

              <div class="image-container img-six">
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/7568e0ff-edb5-43dd-bff5-aed405fc32d9" alt="natação" />
                <div class="overlay">
                  <h3>Natação</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="left-bottom">
            <div class="weekly-schedule">
              <h1>Programação Semanal</h1>
              <div class="calendar">
                <div class="day-and-activity activity-one">
                  <div class="day">
                    <h1>13</h1>
                    <p>seg</p>
                  </div>
                  <div class="activity">
                    <h2>Natação</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/90affa88-8da0-40c8-abe7-f77ea355a9de" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" style="--i: 3" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e082b965-bb88-4192-bce6-0eb8b0bf8e68" style="--i: 4" alt="" />
                    </div>
                  </div>
                  <button class="btn">Participar</button>
                </div>

                <div class="day-and-activity activity-two">
                  <div class="day">
                    <h1>15</h1>
                    <p>qua</p>
                  </div>
                  <div class="activity">
                    <h2>Yoga</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 2" alt="" />
                    </div>
                  </div>
                  <button class="btn">Participar</button>
                </div>

                <div class="day-and-activity activity-three">
                  <div class="day">
                    <h1>17</h1>
                    <p>sex</p>
                  </div>
                  <div class="activity">
                    <h2>Tênis</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e082b965-bb88-4192-bce6-0eb8b0bf8e68" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 3" alt="" />
                    </div>
                  </div>
                  <button class="btn">Participar</button>
                </div>

                <div class="day-and-activity activity-four">
                  <div class="day">
                    <h1>18</h1>
                    <p>sáb</p>
                  </div>
                  <div class="activity">
                    <h2>Caminhada</h2>
                    <div class="participants">
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" style="--i: 1" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/32037044-f076-433a-8a6e-9b80842f29c9" style="--i: 2" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/07d4fa6f-6559-4874-b912-3968fdfe4e5e" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/c61daa1c-5881-43f8-a50f-62be3d235daf" style="--i: 4" alt="" />
                      <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/90affa88-8da0-40c8-abe7-f77ea355a9de" style="--i: 5" alt="" />
                    </div>
                  </div>
                  <button class="btn">Participar</button>
                </div>
              </div>
            </div>

            <div class="personal-bests">
              <h1>Melhores Desempenhos</h1>
              <div class="personal-bests-container">
                <div class="best-item box-one">
                  <p>Mais Rápido 5K Corrida: 22min</p>
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/242bbd8c-aaf8-4aee-a3e4-e0df62d1ab27" alt="" />
                </div>
                <div class="best-item box-two">
                  <p>Maior Distância Ciclismo: 4 milhas</p>
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/a3b3cb3a-5127-498b-91cc-a1d39499164a" alt="" />
                </div>
                <div class="best-item box-three">
                  <p>Maior Duração Patinação: 2 horas</p>
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/e0ee8ffb-faa8-462a-b44d-0a18c1d9604c" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="right-content">
          <div class="user-info">
            <div class="icon-container">
              <i class="fa fa-bell nav-icon"></i>
              <i class="fa fa-message nav-icon"></i>
            </div>
            <h4>Kelsey Miller</h4>
            <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/40b7cce2-c289-4954-9be0-938479832a9c" alt="usuário" />
          </div>

          <div class="active-calories">
            <h1 style="align-self: flex-start">Calorias Ativas</h1>
            <div class="active-calories-container">
              <div class="box" style="--i: 85%">
                <div class="circle">
                  <h2>85<small>%</small></h2>
                </div>
              </div>
              <div class="calories-content">
                <p><span>Hoje:</span> 400</p>
                <p><span>Esta Semana:</span> 3500</p>
                <p><span>Este Mês:</span> 14000</p>
              </div>
            </div>
          </div>

          <div class="mobile-personal-bests">
            <h1>Melhores Desempenhos</h1>
            <div class="personal-bests-container">
              <div class="best-item box-one">
                <p>Mais Rápido 5K Corrida: 22min</p>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/05dfc444-9ed3-44cc-96af-a9cf195f5820" alt="" />
              </div>
              <div class="best-item box-two">
                <p>Maior Distância Ciclismo: 4 milhas</p>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/9ca170e9-1252-4fa6-8677-36493540c1f2" alt="" />
              </div>
              <div class="best-item box-three">
                <p>Maior Duração Patinação: 2 horas</p>
                <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/262d1611-ed4c-4297-981c-480cf7f95714" alt="" />
              </div>
            </div>
          </div>

          <div class="friends-activity">
            <h1>Atividade dos Amigos</h1>
            <div class="card-container">
              <div class="card">
                <div class="card-user-info">
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/9290037d-a5b2-4f50-aea3-9f3f2b53b441" alt="" />
                  <h2>Jane</h2>
                </div>
                <img class="card-img" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/bef54506-ea45-4e42-a1b6-23a48f61c5e8" alt="" />
                <p>Completamos o Desafio de Corrida de 30 Dias!🏃‍♀️🎉</p>
              </div>

              <div class="card card-two">
                <div class="card-user-info">
                  <img src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/42616ef2-ba96-49c7-80ea-c3cf1e2ecc89" alt="" />
                  <h2>Mike</h2>
                </div>
                <img class="card-img" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/2dcc1b94-06c5-4c62-b886-53b9e433fd44" alt="" />
                <p>Acabei de estabelecer um novo recorde em ciclismo: 30 milhas!💪</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    {{-- </main> --}}


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
  </body>

</html>

@endsection


