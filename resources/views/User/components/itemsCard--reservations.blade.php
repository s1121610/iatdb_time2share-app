<li class="u-list-style-none GridCard a-popup">
    <article class="GridCard__article">
        <header class="GridCard__header u-flex-v-center"> 
            <h2 class="sushiGridCard__heading">{{$reservedItems->name}}</h2>
        </header>
        <figure class="GridCard__figure">
            <img class="GridCard__image" src="../../{{$reservedItems->image}}" alt="{{$reservedItems->name}}">
        </figure>
        <section class="GridCard__textSection u-flex-v-center">
            <p class="GridCard__text">{{$reservedItems->description}}</p>
        </section>
    </article>
    
</li>