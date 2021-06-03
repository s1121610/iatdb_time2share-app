<li class="u-list-style-none GridCard a-popup" data-product-category={{$item->category}}>
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
        <section class="GridCard__buttonSection">
            <a class="u-button u-button--secondary" href="/item/delete/{{$item->id}}">Verwijder</a>
            <a class="u-button u-button--primary" href="/aanbod/{{$item->id}}">Bekijk</a>
        </section>
    </article>
</li>