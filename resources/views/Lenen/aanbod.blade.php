@extends('Lenen.default')
@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($item as $item)
        @include('Lenen.components.itemsCard--aanbod')
    @endforeach
</ul>

