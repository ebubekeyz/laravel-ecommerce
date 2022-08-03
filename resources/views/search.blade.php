<x-layout>
    @include('partials._header')
    <div class="custom-product">
         <div class="col-sm-4">
            
         </div>
         <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                @unless(count($products)==0)
                @foreach($products as $item)
                <div class="searched-item">
                  <a class="text-decoration-none text-dark" href="detail/{{$item['id']}}">
                 
                  <img class="w-25" src="{{$item->gallery ? asset('storage/' . $item->gallery) : asset('/images/no-image.png')}}">
                  <div class="">
                    <h2>{{$item['name']}}</h2>
                    <p>{{$item['description']}}</p>
                  </div>
                </a>
                </div>
    
                @endforeach
    
                @else
                <p>No result found</p>
                @endunless
                
              </div>
         </div>
    </div>
    @include('partials._footer')
    </x-layout>