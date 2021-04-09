@extends('Lenen.default')
@section('content')
@include('Lenen.navbar')
@include('Lenen.components.aanbod--search')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($item as $item)
        @include('Lenen.components.itemsCard--aanbod')
    @endforeach
</ul>

