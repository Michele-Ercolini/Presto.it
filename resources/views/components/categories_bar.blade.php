<div class="row">
    <div class="categorie categoriePa col-12">
        {{-- @dd($categories) --}}
        @foreach ($categories as $category)
            <a class="cat" href="{{route('category_show', compact('category'))}}"> | {{$category->name}} | - </a>
        @endforeach
    </div>
</div>

<style>
@media (max-width: 1920px) {
    .categoriePa{
        padding-left: 250px;
    }
  }

  @media (max-width: 1400px) {
    .categoriePa{
        padding-left: 180px;
    }
  }

  @media (max-width: 1200px) {
    .categoriePa{
        padding-left: 80px;
    }
  }

  @media (max-width: 990px) {
    .categoriePa{
        padding-left: 30px;
    }
  }
</style>