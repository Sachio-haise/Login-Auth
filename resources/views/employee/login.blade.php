@include('layout.header')
@include('layout.sidebar')
<div class="col-9">


        <div class="row">
            <div class="col-md-4 offset-4">
                <form method="POST" action="{{url('employee/login')}}" style="margin-top:6rem;
                border-radius:5px;
                padding:1rem 50px;
                width:300px;
                box-shadow: 0px 0px 14px 6px rgba(0,0,0,0.44);">
                    @csrf
                    <img class="figure-img img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="">
                    <div class="form-group">
                        <input name="email" type="email" placeholder="Email"
                        class="form-control @error('email')  border border-danger @enderror">
                        @error('email')
                            <span class="text text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mt-2 mb-2">
                        <input name="password" type="password"
                     placeholder="Password"
                     class="form-control  @error('password')  border border-danger @enderror">
                     @error('password')
                            <span class="text  text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <a href="{{url('employee/forget-password')}}" class="btn-link" style="text-decoration: none;
                    font-weight: 500;
                    color: rgb(6,6,26);outline:none;">Forget Password</a>

                    <button type="submit" class="mt-2 btn form-control btn-submit" style="color:#FDF7EB ;
                    background-color: rgb(243,152,0);
                    font-weight: 400px;">Login</button>



                </form>
            </div>
         </div>


</div>
@include('layout.footer')
