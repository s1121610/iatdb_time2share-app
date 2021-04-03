<li class="u-list-style-none GridCard a-popup" data-kind-of-drink={{$drinks->kind}}>
    <article class="GridCard__article">
        <header class="GridCard__header u-flex-v-center"> 
            <h2 class="GridCard__heading">{{$drinks->kind}} {{$drinks->name}}</h2>
        </header>
        <figure class="GridCard__figure">
            <img class="GridCard__image" src="{{$drinks->image}}" alt="{{$drinks->name}}">
        </figure>
        <section class="GridCard__textSection u-flex-v-center">
            <p class="GridCard__text">{{$drinks->description}}</p>
        </section>
    </article>
</li>