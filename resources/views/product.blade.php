<x-layout>
  @include('partials._header')
  @include('partials._search')
    <div id="carouselExampleCaptions" class="carousel slide custom-product" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

         @foreach($products as $item)
         <div class="carousel-item {{$item['id']==1? 'active' : ''}}" style="background-color:rgb(212, 208, 208);">

            <a href="detail/{{$item['id']}}">
            <img class="slider-img" src="{{$item->gallery ? asset('storage/' . $item->gallery) : asset('/images/no-image.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" >
                <h5 class="item-1"><b>{{$item['name']}}</b></h5>
                <p class="item-2">{{$item['description']}}</p>
                <button class="btn btn-dark">Buy Now</button>
              </div>
            </a>
            </div>
         @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
          
        </div>

<div class="trending-wrapper">

    <h3 class="trending-text">Trending Products</h3>
    @foreach($products as $item)
    <div class="col-sm-12">
    <div class="trending-item mx-2">
        <a class="text-decoration-none text-dark" href="detail/{{$item['id']}}">
        <img class="trending-image" src="{{$item->gallery ? asset('storage/' . $item->gallery) : asset('/images/no-image.png')}}" class="d-block w-100" alt="...">
        <div class="overlay" >
            <h5 class="text"><b>{{$item['name']}}</b></h5>
            
          </div>
        </a>
        </div>
      </div>
    </div>
     @endforeach
    
</div>



</div>



      </div>


      <br><br><br><br> <br><br><br><br><br><br>
      @include('partials._footer')

</x-layout>