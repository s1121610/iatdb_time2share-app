@extends('Lenen.default')
<link rel="stylesheet" type="text/css" href="{{ url('./css/navmargin.css') }}">
@section('content')
@include('Lenen.navbar')
<figure class="profile-logo">
    <p class="landing-header__logo__tekst--subpage landing-header__logo__tekst">Time<span class="u-blue">2</span>Share</p>
</figure>
<section class="profile-card">
    <h2 class="profile-card__title">{{$user->username}}</h2>
    <section class="profile-card__content">
        <p class="profile-card__city">Woonplaats: {{$user->woonplaats}}</p>
        <section class="profile-card__email">
            <p>E-mailadres:</p>
            <a class="profile-card__email__link" href="mailto:{{$user->email}}">{{$user->email}}</a>
        </section>
    </section>
</section>
<article class="profile-content">
    <header>
        <h2 class="profile-content__title">Bekijk het aanbod van {{$user->name}}:</h2>
    </header>
    <section>
        <ul class="u-grid-12 u-grid-gap-2">
            @foreach($item as $item)
                @include('Lenen.components.itemsCard--aanbod')
            @endforeach
        </ul>
    </section>
</article>
