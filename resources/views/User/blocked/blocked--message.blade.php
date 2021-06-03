@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
<h2>Uw account is geblokkeerd</h2>
<p>Neem contact op met de beheerder voor meer informatie</p>
<form method="POST" action="/logout">
    @csrf
    <button class="u-button u-button--primary">Uitloggen</button>
</form>