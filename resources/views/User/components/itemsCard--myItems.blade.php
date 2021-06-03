<li class="u-list-style-none GridCard a-popup">
    <article class="GridCard__article">
        <header class="GridCard__header u-flex-v-center"> 
            <h2 class="sushiGridCard__heading">{{$myItems->name}}</h2>
        </header>
        <figure class="GridCard__figure">
            <img class="GridCard__image" src="../../{{$myItems->image}}" alt="{{$myItems->name}}">
        </figure>
        <section class="GridCard__textSection u-flex-v-center">
            <p class="GridCard__text">{{substr($myItems->description, 0, 100)}}...</p>
        </section>
        <section class="GridCard__buttonSection">
            <a class="u-button u-button--secondary" href="/item/delete/{{$myItems->id}}">Verwijderen</a>
            <a class="u-button u-button--primary" href="/aanbod/{{$myItems->id}}">Bekijk</a>
        </section>
    </article>
</li>