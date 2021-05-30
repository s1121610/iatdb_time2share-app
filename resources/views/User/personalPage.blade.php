@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
<h1>Hallo {{$activeUser}}!</h1>
<form method="POST" action="/logout">
    @csrf
    <button class="u-button u-button--primary">Uitloggen</button>
</form>
@if($userRole == 'admin')
    @include('User.components.admin')
@else
    <p>geen admin</p>
@endif
<h2>Mijn aanbod</h2>
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($myItems as $myItems)
            @include('User.components.itemsCard--myItems')
        @endforeach.
    </ul>
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