@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
<section class="block-message">
    <h2>Uw account is geblokkeerd</h2>
    <p>Neem contact op met de beheerder voor meer info.</p>
    <form method="POST" action="/logout">
        @csrf
        <button class="u-button u-button--primary">Uitloggen</button>
    </form>
</section>