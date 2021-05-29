<li class="u-list-style-none GridCard a-popup" data-product-category={{$item->category}}>
    <a href="/aanbod/{{$item->id}}">
        <article class="GridCard__article">
            <header class="GridCard__header u-flex-v-center"> 
                <h2 class="sushiGridCard__heading">{{$item->name}}</h2>
            </header>
            <figure class="GridCard__figure">
                <img class="GridCard__image" src="../../{{$item->image}}" alt="{{$item->name}}">
            </figure>
            <section class="GridCard__textSection u-flex-v-center">
                <p class="GridCard__text">{{$item->description}}</p>
            </section>
        </article>
    </a>
</li>