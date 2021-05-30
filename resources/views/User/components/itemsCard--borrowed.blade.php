<li class="u-list-style-none GridCard a-popup">
    <article class="GridCard__article">
        <header class="GridCard__header u-flex-v-center"> 
            <h2 class="sushiGridCard__heading">{{$borrowedItems->name}}</h2>
        </header>
        <figure class="GridCard__figure">
            <img class="GridCard__image" src="../../{{$borrowedItems->image}}" alt="{{$borrowedItems->name}}">
        </figure>
        <section class="GridCard__textSection u-flex-v-center">
            <p class="GridCard__text">{{$borrowedItems->description}}</p>
        </section>
        <section>
            <a class="u-button u-button--primary" href="/item/return/{{$borrowedItems->id}}">Teruggebracht</a>
        </section>
    </article>
</li>