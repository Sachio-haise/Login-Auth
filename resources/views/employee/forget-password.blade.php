@include('layout.header')
@include('layout.sidebar')
<div class="col-9">

    <div class="row">
        <div class="col-md-4 offset-4">
            <form method="POST" action="{{url('employee/forget-password')}}" style="margin-top:6rem;
            border-radius:5px;
            padding:1rem 50px;
            width:300px;
            box-shadow: 0px 0px 14px 6px rgba(0,0,0,0.44);">
                @csrf
                <img class="figure-img img-fluid" src="{{ asset('assets/img/logo.png') }}" alt="">
                <div class="form-group my-2">
                    <label for="email" class="mb-1">Please enter your email to reset password.</label>
                    <input id="email" name="email" type="email" placeholder="Email"
                    class="form-control @error('email')  border border-danger @enderror">
                    @error('email')
                        <span class="text text-danger">{{$message}}</span>
                    @enderror
                </div>




                <button type="submit" class="my-2 btn form-control " style="color:#FDF7EB ;
                background-color: rgb(243,152,0);
                font-weight: 400px;">Submit</button>

                <a href="{{url('employee/login')}}" class="btn form-control " style="color:#FDF7EB ;
                background-color: rgb(243,152,0);
                font-weight: 400px;">Back</a>

            </form>
        </div>
    </div>

</div>
@include('layout.footer')
