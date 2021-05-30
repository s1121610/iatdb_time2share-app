<article class="details">
    <header class="details__header">
        <a class="details__back_to_home" href="/aanbod">Ga terug</a>
        <h1 class="details__header__title">{{$item->name}}</h1>
        <h3 class="details__header__subtitle">{{$item->category}}</h3>
    </header>
    <figure class="details__figure">
        <img class="details__image" src=../{{$item->image}} alt={{$item->name}}>
    </figure> 
    <section class="details__text">
        <h2 class="details__text__title">Omschrijving</h2>
        <p class="details__text__tekst">{{$item->description }}</p>
        <h2 class="details__text__title">Deadline</h2>
        <p class="details__text__tekst">{{$item->deadline}}</p>
    </section>
    <section class="details__btnSection">
        <a href="/reserveren" class="u-button u-button--primary details__btnSection__button" >Reserveren</a>
    </section>
    <section class="details__reviews">
        <h2 class="details__reviews__title">Laat een review achter</h2>
        <form action="/aanbod/{{$item->id}}/create" method="POST">
            @csrf
            <section class="create-form__section">
                <label class="u-white" for="title">Titel</label>
                <input class="create-form__input" name="title" id="title" type="text" required>
            </section>
            <section class="create-form__section">
                <label class="u-white" for="review">Review</label><br>
                <textarea rows="8" cols="50" class="create-form__textarea" name="review" id="review" type="text" required></textarea>
            </section>
            <section class="create-form__section">
                <label class="u-white" for="score">Cijfer</label>
                <select class="create-form__input" name="score" id="score" required>
                    <option value="" disabled selected hidden>Selecteer een cijfer</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </section>
            <section class="create-form__section">
                <input type="checkbox" value="{{$item->id}}" name="id" id="id" required>
                <label class="u-white" for="id">Ik accepteer dat deze review online geplaats gaat worden.</label>
            </section>
            <button class="u-button u-button--primary details__reviews__submit" type="submit">Versturen</button>
        </form>
        <section class="details__posts">
            <h2 class="details__reviews__title">Reviews</h2>
            <ul>
                @foreach($reviews as $review)
                    @if($review->item == $item->id)
                        @include("Lenen.components.itemsCard--review")
                    @endif
                @endforeach
            </ul>
    
        </section>
    </section>

</article>