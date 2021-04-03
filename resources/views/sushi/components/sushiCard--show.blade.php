<article class="sushiCard">
    <figure class="sushiCard__figure">
        <img class="sushiCard__image" src={{$sushi->image}} alt={{$sushi->name}} . " sushi van de soort " . {{$sushi->kind}} }}>
    </figure> 
    <section class="sushiCard__text">
        <!-- <h1>{{$sushi->name}}</h1><br>
        <h3>{{$sushi->kind}}</h3><br> -->
        <p>{{ $sushi->description }}</p>
    </section>
    <section class="sushiCard__btnSection">
        <button class="sushiCard__button">Order now</button>
        <a class="sushiCard__back_to_home" href="/sushi">Back to home</a>
    </section>
</article>