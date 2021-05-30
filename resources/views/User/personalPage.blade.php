@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
<h1>Hallo {{$activeUser}}!</h1>
<form method="POST" action="/logout">
    @csrf
    <button class="u-button u-button--primary">Uitloggen</button>
</form>
<h2>Reserveringen</h2>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($reservedItems as $reservedItems)
        @include('User.components.itemsCard--reservations')
    @endforeach
</ul>
<h2>Geleende producten</h2>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($borrowedItems as $borrowedItems)
        @include('User.components.itemsCard--borrowed')
    @endforeach
</ul>