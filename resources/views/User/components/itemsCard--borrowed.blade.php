<li class="u-list-style-none GridCard a-popup">
    <article class="GridCard__article">
        <header class="GridCard__header u-flex-v-center"> 
            <h2 class="sushiGridCard__heading">{{$borrowedItems->name}}</h2>
        </header>
        <figure class="GridCard__figure">
            <img class="GridCard__image" src="../../{{$borrowedItems->image}}" alt="{{$borrowedItems->name}}">
        </figure>
        <section class="GridCard__textSection u-flex-v-center">
            <p class="GridCard__text">{{substr($borrowedItems->description, 0, 100)}}...</p>
                    </section>
        <section class="GridCard__deadline">
            @if($borrowedItems->deadline < $currDate)
                <p class="GridCard__text u-bold u-alarm">Deadline: {{\Carbon\Carbon::parse($borrowedItems->deadline)->format('d-m-Y')}}</p>
                <p>Breng dit item z.s.m. terug naar de eigenaar</p>
            @elseif($borrowedItems->deadline == $currDate)
                <p class="GridCard__text u-bold">Deadline: {{\Carbon\Carbon::parse($borrowedItems->deadline)->format('d-m-Y')}}</p>
                <p>Breng dit item vandaag terug naar de eigenaar</p>
            @else
                <p class="GridCard__text u-bold">Deadline: {{\Carbon\Carbon::parse($borrowedItems->deadline)->format('d-m-Y')}}<p>
            @endif
        </section>
        <section class="GridCard__buttonSection u-flex-v-center">
            <a class="u-button u-button--primary" href="/item/return/{{$borrowedItems->id}}">Teruggebracht</a>
        </section>
    </article>
</li>