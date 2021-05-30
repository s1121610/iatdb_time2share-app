<li class="u-list-style-none GridCard a-popup">
    <a href="/aanbod/{{$myItems->id}}">
        <article class="GridCard__article">
            <header class="GridCard__header u-flex-v-center"> 
                <h2 class="sushiGridCard__heading">{{$myItems->name}}</h2>
            </header>
            <figure class="GridCard__figure">
                <img class="GridCard__image" src="../../{{$myItems->image}}" alt="{{$myItems->name}}">
            </figure>
            <section class="GridCard__textSection u-flex-v-center">
                <p class="GridCard__text">{{$myItems->description}}</p>
            </section>
        </article>
    </a>
</li>