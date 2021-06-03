@extends('Lenen.default')
<link rel="stylesheet" type="text/css" href="{{ url('./css/navmargin.css') }}">
@section('content')
@include('Lenen.navbar')
@include('Lenen.components.ItemsCard--details') 
