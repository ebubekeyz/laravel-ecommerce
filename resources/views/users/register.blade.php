<x-layout>
    @include('partials._header')
    <div class="row mx-3">
        <div class="col-lg-6 m-auto">
            <div class="card"style="background-color:#F8F0E3">
                <div class="card-title mt-5 text-center text-dark">
                <h3 class="py-3 "><b>Register</b></h3>
                <h6><b>Create an account</b></h6>
                    
                     <!--<h3 class="py-3 "><b>Register</b></h3>-->
                </div>
                <div class="card-body">
                    <form  action="/users.register" method="post">
                        @csrf
                        <p><label for="name"><b>User Name</b></label></p>
                        <input type="text" name="name" placeholder="User Name"  class="form-control mb-3" value="{{old('name')}}">
                        @error('username')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror


                        <p><label for="email"><b>Email</b></label></p>
                        <input type="text" name="email" placeholder="" class="form-control mb-3" value="{{old('email')}}">
                        @error('email')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        
                        <p><label for="password"><b>Password</b></label></p>
                        <input type="password" name="password" placeholder="" class="form-control mb-3" value="{{old('password')}}">
                        @error('password')
                        <p class="text-danger mt-1">{{$message}}</p>
                        @enderror
                        

                        <div class="text-center mt-3"><button class="btn btn-danger w-100" name="register">Register</button></div>
                        <P class="mt-2">Already have an account?&nbsp;<a class="text-decoration-none text-danger" href="/login">Login</a></P>
      
                        <P class="mt-2"><a class="text-decoration-none text-dark" href="/"><i class="bi bi-arrow-left"></i>Back</a></P>
      
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
    @include('partials._footer')
</x-layout>
