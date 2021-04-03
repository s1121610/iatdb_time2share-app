<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All drinks</title>
    <link rel="stylesheet" type="text/css" href="{{ url('./css/style.css') }}">
</head>
<body>
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($drinks as $drinks)
            @include('drinks.components.drinkCard--index')
        @endforeach
    </ul>
    <!--
        @section('title')
            {{"All sushi"}}
        @endsection
    -->
</body>
</html>