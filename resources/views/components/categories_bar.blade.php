<<<<<<< HEAD
<div class="row ">
    <div class="categorie col-12 justify-content-center align-items-center">
=======
<div class="row">
    <div class="categorie categoriePa col-12">
>>>>>>> 304629bd0a332e8cbfd2ac2c5382bc39a38c99ee
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