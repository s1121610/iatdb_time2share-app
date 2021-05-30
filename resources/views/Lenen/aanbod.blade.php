@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
@include('Lenen.components.aanbod--search')
@if($userRole == 'admin')
<a href="/account">Terug</a>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($item as $item)
        @include('User.admin.admin--controlItems')
    @endforeach
</ul>
@else
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($item as $item)
        @include('Lenen.components.itemsCard--aanbod')
    @endforeach
</ul>
@endif


