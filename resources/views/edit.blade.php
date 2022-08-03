<x-layout>
    @include('partials._header')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card"style="background-color:#F8F0E3">
                <div class="card-title mt-5 text-center text-dark">
                <h3 class="py-3 "><b>Edit Product</b></h3>
                <h6><b></b></h6>
                    
                     <!--<h3 class="py-3 "><b>Register</b></h3>-->
                </div>
                <div class="card-body">
                    <form  action="/edit/{{$products->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <p><label for="name"><b>Product Name</b></label></p>
                        <input type="text" name="name" placeholder=""  class="form-control mb-3" value="{{$products->name}}">
                        @error('name')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror


                        <p><label for="price"><b>Price</b></label></p>
                        <input type="text" name="price" placeholder="" class="form-control mb-3" value="{{$products->price}}">
                        @error('price')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        
                        <p><label for="category"><b>Category</b></label></p>
                        <input type="text" name="category" placeholder="" class="form-control mb-3" value="{{$products->category}}">
                        @error('category')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        

                       

                        
                        <p><label for="description"><b>Description</b></label></p>
                        <textarea name="description" placeholder="" id="comment" class="form-control mb-3" rows="5">{{$products->description}}</textarea>
                        @error('description')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        
                        
                        
                       <p><label for="gallery"><b>Image</b></label></p>
                        <input type="file" name="gallery" placeholder=""  accept= "image/jpg, image/png, image/jpeg" class="form-control mb-3">
                        @error('gallery')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        <img class="w-25 mt-5" src="{{$products->gallery ? asset('storage/' . $products->gallery) : asset('/images/no-image.png')}}">

                        

                       

                        <div class="text-center mt-3"><button class="btn btn-danger w-100" name="post">Edit Products</button></div>
                        <P class="mt-2"><a class="text-decoration-none text-dark" href="/"><i class="bi bi-arrow-left"></i>Back</a></P>
      
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>

    @include('partials._footer')
</x-layout>
