<x-layout>
    @include('partials._header')

    <div class="custom-product">
        <div class="col-sm-10">
           <div class="trending-wrapper">
               <h4>My Orders</h4>
               @foreach($orders as $item)
               <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                   <a href="detail/{{$item->id}}">
                       <img class="trending-image" src="{{$item->gallery ? asset('storage/' . $item->gallery) : asset('/images/no-image.png')}}">
                     </a>
                </div>
                <div class="col-sm-4 mx-5">
                       <div class="">
                         <h2>Name: {{$item->name}}</h2>
                         <p>Delivery Status: {{$item->status}}</p>
                         <p>Address: {{$item->address}}</p>
                         <p>Payment Status: {{$item->payment_status}}</p>
                         <p>Payment Method: {{$item->payment_method}}</p>
                       </div>
                </div>
               
               </div>
               @endforeach
             </div>

             @include('partials._footer')

</x-layout>