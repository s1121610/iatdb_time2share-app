<li class="u-list-style-none GridCard a-popup" data-kind-of-sushi={{$sushi->kind}}>
    <a href="/sushi/{{$sushi->id}}">
        <article class="GridCard__article">
            <header class="GridCard__header u-flex-v-center"> 
                <h2 class="sushiGridCard__heading">{{$sushi->kind}} {{$sushi->name}}</h2>
            </header>
            <figure class="GridCard__figure">
                <img class="GridCard__image" src="{{$sushi->image}}" alt="{{$sushi->name}}">
            </figure>
            <section class="GridCard__textSection u-flex-v-center">
                <p class="GridCard__text">{{$sushi->description}}</p>
            </section>
        </article>
    </a>
</li>