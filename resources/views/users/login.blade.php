<x-layout>
    @include('partials._header')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card"style="background-color:#F8F0E3">
                <div class="card-title mt-5 text-center text-dark">
                <h3 class="py-3 "><b>Login</b></h3>
                <h6><b>Login into your account to post gigs</b></h6>
                    
                     <!--<h3 class="py-3 "><b>Register</b></h3>-->
                </div>
                <div class="card-body">
                    <form  action="/users.login" method="post">
                        @csrf
                       
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

                        <div class="text-center mt-3"><button class="btn btn-danger w-100" name="login">Sign In</button></div>
                        <P class="mt-2">Dont have an account?&nbsp;<a class="text-decoration-none text-danger" href="/register">Register</a></P>
      
                        <P class="mt-2"><a class="text-decoration-none text-dark" href="/"><i class="bi bi-arrow-left"></i>Back</a></P>
      
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
    @include('partials._footer')
</x-layout>



