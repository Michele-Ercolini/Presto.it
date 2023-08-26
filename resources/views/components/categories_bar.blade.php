<div class="row ">
    <div class="categorie col-12 ">
        {{-- @dd($categories) --}}
        @foreach ($categories as $category)
            <a class="cat" href="{{route('category_show', compact('category'))}}">| {{$category->name}} | - </a>
        @endforeach
    </div>
</div>