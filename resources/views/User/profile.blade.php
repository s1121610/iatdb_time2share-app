@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
<h2>{{$user->username}}</h2>
<p>Woonplaats: {{$user->woonplaats}}</p>
<p>E-mailadres: </p>
<a href="mailto:{{$user->email}}">{{$user->email}}</a>
<h2>Bekijk het aanbod van {{$user->name}}:</h2>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($item as $item)
        @include('Lenen.components.itemsCard--aanbod')
    @endforeach
</ul>