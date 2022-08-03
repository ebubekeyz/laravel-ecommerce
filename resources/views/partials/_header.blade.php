@php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
$total = ProductController::CartItem();
}

@endphp
    




<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img  style="width:170px" src="{{asset('images/logo.png')}}"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>

            @if(Session()->has('user'))
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="myorders">Orders</a>
            </li>
            @endif
            @if(Session::has('user'))
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/addproducts">Add Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="manage">Manage Products</a>
            </li>
            @endif
          </ul>

          <ul class="navbar-nav mt-3">

            @if(Session::has('user'))
            @else
          <li class="nav-item">  
            <a class="nav-link active" href="/login">Login</a>
          </li>
            <li class="nav-item" >
              <a class="nav-link active" href="/users.register">Register</a>
            </li>
           
            @endif
         
            @if(Session::has('user'))
            <span>  
              <a class="nav-link active" href="/"><b>{{Session::get('user')['name']}}</b></a>
            </span>
            
           <form method="post" action="/logout">
            @csrf
            <button class="btn btn-white text-dark">Logout</button>
           </form>
          
          </ul>
          @endif
        

        <span class="navbar-text">
         
          <div class="dropdown">
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              
             
  
              <a class="text-decoration-none text-dark mx-3" href="/login">Login</a>
              <a class="text-decoration-none text-dark" href="/register">Register</a>

           
            </ul>
          </div>
            <a class="text-decoration-none text-dark" href="/cartlist"><i class="bi bi-cart4"></i>Cart<span class="text-dark border border-1 border-dark p-1" style="">{{$total}}</span></a>
            
      
        
          <!--  <span class="mx-3"> <a class="text-decoration-none text-dark" aria-current="page" href="">Edit Product</a></span>
               
               <span class="mx-3"> <a class="text-decoration-none text-dark" aria-current="page" href="addproduct">Add Product</a></span>
              
               <span class="mx-3"><a class="text-decoration-none text-dark" href="/myorders">Orders</a></span>

            <span class="dropdown-toggle mx-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
             
            </span>-->
           


        </span>
        
      </div>
    </div>
  </nav>