@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
<h1>Hallo {{$activeUser}}!</h1>

<h2>Reserveringen</h2>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($borrowedItems as $borrowedItems)
        @include('User.components.itemsCard--reservations')
    @endforeach
</ul>
<h2>Geleende producten</h2>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($reservedItems as $reservedItems)
        @include('User.components.itemsCard--borrowed')
    @endforeach
</ul>