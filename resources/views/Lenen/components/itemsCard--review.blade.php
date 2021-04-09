<li class="reviewCard">
    <figure class="reviewCard__figure">
        <p class="reviewCard__title__score">{{$review->score}}</p>
    </figure>
    <section class="reviewCard__section">
        <h2 class="reviewCard__title">{{$review->user}} zegt: "{{$review->title}}" </h2>
        <p class="reviewCard__review">{{$review->review}}</p>
        <hr>
    </section>
</li>