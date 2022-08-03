<x-layout>

    @include('partials._header')
    <div class="custom-product">
        <div class="col-sm-10">
           <div class="trending-wrapper">
               <h4>Result for Products</h4>
               @foreach($products as $item)
               <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                   <a href="detail/{{$item->id}}">
                       <img class="trending-image" src="{{$item->gallery ? asset('storage/' . $item->gallery) : asset('/images/no-image.png')}}">
                     </a>
                </div>
                <div class="col-sm-4 mx-5">
                       <div class="">
                         <h2>{{$item->name}}</h2>
                         <p>{{$item->description}}</p>
                       </div>
                </div>
                <div class="col-sm-3 remove-cart">
                   <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
                </div>
               </div>
               @endforeach
               <a class="btn btn-dark text-decoration-none mx-5" href="ordernow">Order Now</a>
             </div>

         
@include('partials._footer')
</x-layout>