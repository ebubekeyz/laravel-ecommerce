<x-layout>
    @include('partials._header')
    <div class="container"></div>
    
    <div class="row mx-3">

        <div class="col-sm-6">
            <img src="{{$product->gallery ? asset('storage/' . $product->gallery) : asset('/images/no-image.png')}}">

        </div>

        <div class="col-sm-6">
            <a class="text-decoration-none text-dark" href="/">Go Back</a>

            <h2>{{$product['name']}}</h2>
            <h3><b>Price:</b>  ₦{{$product['price']}}</h3>
            <h6><b>Details:</b> {{$product['description']}}</h6>
            <h6><b>Category:</b> {{$product['category']}}</h6>
<br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}" class="">
                <button class="btn btn-danger">Add to Cart</button>
            </form>
            
            

            
        </div>


    </div>



    </div>
@include('partials._footer')
</x-layout>