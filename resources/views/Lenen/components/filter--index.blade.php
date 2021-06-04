<button class="u-button u-button--secondary u-Mtop" id="filter-section__button" onclick="showFilter()">Filter</button>
<section id="js--filterSection" class="filter-section">
    <h2>Filter</h2>
    @foreach($categories as $category)
        <div class="filter-section-wrapper">
            <label class="filter_section__label" for="{{$category->category}}">{{$category->category}}</label>
            <input type="checkbox" id="{{$category->category}}" name="{{$category->category}}">
        </div>
    @endforeach
</section>