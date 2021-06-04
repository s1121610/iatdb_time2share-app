@extends('Lenen.default')
@section('content')
<header class="landing-header">
    <figure class="landing-header__logo">
        <p class="landing-header__logo__tekst">Time<span class="u-blue">2</span>Share</p>
    </figure>
    <article class="landing-header__tekst">
        <h1 class="landing-header__tekst__title">Altijd je spullen weer terug</h1>
        <p class="landing-header__tekst__p">Vindt u het ook zo irritant als je uitgeleende spullen niet meer terug krijg? Time2share biedt de oplossing!</p>
        <section>
            <button class="u-button u-button--primary u-margin--nav" onclick="window.location.href='/aanbod/create'">Product aanbieden</button>
            <button class="u-button u-button--secondary u-margin--nav" onclick="window.location.href='/aanbod'">Bekijk het aanbod</button>
        </section>
    </article>
    <!--########### RESPONSIVE IMAGES #####################-->
    <picture class="landing-header__figure">
        <source class="landing-header__image u-image landing-header__image--kleren" srcset="/img/header/Kleren/Kleren.avif" type="image/avif" />
        <source class="landing-header__image u-image landing-header__image--kleren" srcset="/img/header/Kleren/Kleren.webp" media="(min-width: 1400px)" type="image/webp" />
        <source class="landing-header__image u-image landing-header__image--kleren" srcset="/img/header/Kleren/Kleren_320.webp" media="(min-width: 700px)" type="image/webp" />
        <img class="landing-header__image u-image landing-header__image--kleren" 
                srcset="/img/header/Kleren/Kleren_320.jpg 320w,
                    /img/header/Kleren/Kleren.jpg 620w" 
        sizes="(min-width: 1400px) 620px, 320w"
        src="/img/header/Kleren/Kleren.png" alt="Foto van een aantal kledingstukken.">
    </picture>

    <picture class="landing-header__figure">
        <source class="landing-header__image u-image landing-header__image--auto" srcset="/img/header/Auto/Auto.avif" type="image/avif" />
        <source class="landing-header__image u-image landing-header__image--auto" srcset="/img/header/Auto/Auto.webp" media="(min-width: 1400px)" type="image/webp" />
        <source class="landing-header__image u-image landing-header__image--auto" srcset="/img/header/Auto/Auto_480.webp" media="(min-width: 700px)" type="image/webp" />
        <img class="landing-header__image u-image landing-header__image--auto"
            srcset="/img/header/Auto/Auto_480.jpg 480w,
                    /img/header/Auto/Auto.jpg 620w" 
        sizes="(min-width: 1400px) 620px, 480px"
        src="/img/header/Auto/Auto.png" alt="Foto van een witte auto">
    </picture>

    <picture class="landing-header__figure">
        <source class="landing-header__image u-image landing-header__image--camera" srcset="/img/header/Camera/Camera.avif" type="image/avif" />
        <source class="landing-header__image u-image landing-header__image--camera" srcset="/img/header/Camera/Camera.webp" media="(min-width: 1400px)" type="image/webp" />
        <source class="landing-header__image u-image landing-header__image--camera" srcset="/img/header/Camera/Camera_480.webp" media="(min-width: 700px)" type="image/webp" />
        <img class="landing-header__image u-image landing-header__image--camera"
            srcset="/img/header/Camera/Camera_480.jpg 480w,
                    /img/header/Camera/Camera.jpg 620w" 
        sizes="(min-width: 1400px) 620px, 480px"
        src="/img/header/Camera/Camera.png" alt="Foto van een cameratoestel.">
    </picture>

    <nav class="landing-header__navigatie nav">
        <ul class="nav__list">
            <li class="nav__list__item"><a class="nav__list__item--link" href="/">Home</a></li>
            <li class="nav__list__item"><a class="nav__list__item--link" href="/aanbod">Aanbod</a></li>
            <li class="nav__list__item"><button class="u-button u-button--secondary" onclick="window.location.href='/login'">Login</button></li>
            <li class="nav__list__item"><button class="u-button u-button--primary" onclick="window.location.href='/register'">Aanmelden</button></li>
        </ul>
    </nav>
</header>
@include('Lenen.components.checkbox--index')