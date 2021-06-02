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
        <section class="GridCard__borrowerSection u-flex-v-center">
            <p class="GridCard__text">Aanvrager: {{$reservedItems->borrower}}</p>
        </section>
        <section>
            <p class="GridCard__text">Deadline: {{$reservedItems->deadline}}</p>
        </section>
        <section>
            <a class="u-button u-button--primary" href="/item/accepted/{{$reservedItems->id}}">Weer ontvangen</a>
        </section>
    </article>
</li>