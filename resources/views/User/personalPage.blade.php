@extends('Lenen.default')
<link rel="stylesheet" type="text/css" href="{{ url('./css/navmargin.css') }}">
@section('content')
@include('Lenen.navbar')
<header class="account-card">
    <h1 class="account__title">Hallo {{$activeUser}}!</h1>
    <section class="u-flex">
        <form method="POST" action="/logout">
            @csrf
            <button class="u-button u-button--tertiary">Uitloggen</button>
        </form>
        <a class="u-button u-button--tertiary" href="/aanbod/create">Advertentie maken</a>
    </section>
    </header>
@if($userRole == 'admin')
    @include('User.components.admin')
@endif
<section class="account__aanbod">
    <h2 class="account__aanbod__title">Mijn aanbod:</h2>
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($myItems as $myItems)
            @include('User.components.itemsCard--myItems')
        @endforeach.
    </ul>
</section>
<section class="account__uitgeleend">
    <h2 class="account__uitgeleend__title">Uitgeleende producten:</h2>
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($reservedItems as $reservedItems)
            @include('User.components.itemsCard--reservations')
        @endforeach
    </ul>
</section>    
<section class="account__geleend">
    <h2 class="account__geleend__title">Producten die u geleend heeft:</h2>
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($borrowedItems as $borrowedItems)
            @include('User.components.itemsCard--borrowed')
        @endforeach
    </ul>
</section>