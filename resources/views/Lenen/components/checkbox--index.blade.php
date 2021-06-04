<section class="filter-section">
    <h2 class="filter-section__title">Ik wil lenen...</h2>
    <ul class="filter-section-wrapper">
        @foreach($categories as $category)
        <li>
            <a href="/aanbod/filter/{{$category->category}}">{{$category->category}}</a>
        </li>
        @endforeach
    </ul>
</section>
