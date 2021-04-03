<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushi</title>
    <script src="/js/main.js" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ url('./css/style.css') }}">
</head>
<body>
    @section('title')
        Creeër Sushi
    @endsection

    <article class="create-form">
        <form class="create-form__form" action="/sushi" method="POST">
            @csrf

            <section class="create-form__section">
                <label for="name">Naam</label>
                <input class="create-form__input" name="name" type="text" required>
            </section>
            <section class="create-form__section">
                <label for="kind">Soort</label>
                <select class="create-form__input" name="kind" id="kind" required>
                    @foreach($kind_of_sushi as $kind_of_sushi)
                        <option value={{$kind_of_sushi->kind}}>{{$kind_of_sushi->kind}}</option>
                    @endforeach
                </select>
            </section>
            <section class="create-form__section">
                <label for="description">Beschrijving</label><br>
                <textarea rows="4" cols="50" class="create-form__textarea" name="description" type="text" required></textarea>
            </section>
            <section class="create-form__section">
                <label for="image">Afbeelding</label>
                <select class="create-form__input" name="image" id="image">
                    @foreach($images as $images)
                        <option value="{{$images->image}}" required>{{$images->image}}</option>
                    @endforeach        
                </select>
            </section>
            <section class="create-form__section">
                <button class="sushiCard__button" type="submit">Sushi aanmaken</button>
            </section>
        </form>
    </article>   
</body>
</html>