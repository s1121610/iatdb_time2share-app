<li class="u-list-style-none GridCard a-popup">
    <article class="GridCard__article">
        <header class="GridCard__header u-flex-v-center"> 
            <h2 class="sushiGridCard__heading">{{$reservedItems->name}}</h2>
        </header>
        <figure class="GridCard__figure">
            <img class="GridCard__image" src="../../{{$reservedItems->image}}" alt="{{$reservedItems->name}}">
        </figure>
        <section class="GridCard__textSection u-flex-v-center">
            <p class="GridCard__text">{{substr($reservedItems->description, 0, 100)}}...</p>
        </section>
        <section class="GridCard__borrowerSection u-flex-v-center">
            <p class="GridCard__text">Aanvrager:</p>
            <a class="details__text__tekst u-white" href="/profile/{{$reservedItems->borrower}}">{{$reservedItems->borrower}}</a>
        </section>
        <section class="GridCard__deadlineSection u-flex-v-center">
            <p class="GridCard__text">Deadline: {{\Carbon\Carbon::parse($reservedItems->deadline)->format('d-m-Y')}}</p>
        </section>
        @if($reservedItems->atBorrower == true)
        <section class="GridCard__statusSection GridCard__statusSection--text u-flex-v-center">
            <p>Dit product is nog bij {{$reservedItems->borrower}}</p>
        </section>
        @else
        <section class="GridCard__buttonSection u-flex-v-center">
            <a class="u-button u-button--primary" href="/item/accepted/{{$reservedItems->id}}">Weer ontvangen</a>
        </section>
        @endif
        
    </article>
</li>