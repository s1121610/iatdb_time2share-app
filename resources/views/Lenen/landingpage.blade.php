@extends('Lenen.default')
@section('content')
<header class="landing-header">
    <figure class="landing-header__logo">
        <p class="landing-header__logo__tekst">Time<span class="u-blue">2</span>Share</p>
    </figure>
    <article class="landing-header__tekst">
        <h1 class="landing-header__tekst__title">Altijd je spullen weer terug</h1>
        <p class="landing-header__tekst__p">Vind jij het ook zo irritant als je uitgeleende spullen niet meer terug krijg? Time2share biedt de oplossing!</p>
        <section>
            <button class="u-button u-button--primary u-margin--nav" onclick="window.location.href='/aanbod/create'">Uitlenen</button>
            <button class="u-button u-button--secondary u-margin--nav" onclick="window.location.href='/aanbod'">Bekijk het aanbod</button>
        </section>
    </article>
    <figure class="landing-header__figure">
        <img class="landing-header__image landing-header__image--kleren u-image" src="./img/header/Kleren.png" alt="Foto van een aantal kleren">
    </figure>
    <figure class="landing-header__figure">
        <img class="landing-header__image landing-header__image--auto u-image" src="./img/header/Auto.png" alt="Foto van een auto">
    </figure>
    <figure class="landing-header__figure">
        <img class="landing-header__image u-image landing-header__image--camera" src="./img/header/Camera.png" alt="Foto van een camera">
    </figure>
    <nav class="landing-header__navigatie nav">
        <ul class="nav__list">
            <li class="nav__list__item"><a class="nav__list__item--link" href="/">Home</a></li>
            <li class="nav__list__item"><a class="nav__list__item--link" href="/aanbod">Aanbod</a></li>
            <li class="nav__list__item"><a class="nav__list__item--link" href="#">Hoe werkt het?</a></li>
            <li class="nav__list__item"><button class="u-button u-button--secondary" onclick="window.location.href='/login'">Login</button></li>
            <li class="nav__list__item"><button class="u-button u-button--primary" onclick="window.location.href='/register'">Aanmelden</button></li>
        </ul>
    </nav>
</header>
@include('Lenen.components.checkbox--index')


