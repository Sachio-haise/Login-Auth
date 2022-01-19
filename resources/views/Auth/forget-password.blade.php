<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <style>
        body{
            font-weight: 400;
            font-family: "Open sans", sans-serif;

        }

        form{
            transform: translateY(50%);
            border-radius:5px;
            padding:2rem 3rem;
            box-shadow: 0px 0px 14px 6px rgba(0,0,0,0.44);

        }
        .btn-link{
            text-decoration: none;
            font-weight: 500;
            color: rgb(6,6,26);
        }
        .btn-submit{
            color:#FDF7EB ;
            background-color: rgb(243,152,0);
            font-weight: 400px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4">
                <form method="POST" action="{{url('/forget-password')}}">
                    @csrf
                    <h1 class="text-center">Form Logo</h1>
                    <div class="form-group my-3">
                        <label for="email">Please enter your email to reset password.</label>
                        <input id="email" name="email" type="email" placeholder="Email"
                        class="form-control @error('email')  border border-danger @enderror">
                        @error('email')
                            <span class="text text-danger">{{$message}}</span>
                        @enderror
                    </div>




                    <button type="submit" class="mb-3 btn form-control btn-submit" >Submit</button>

                    <a href="{{url('/login')}}" class="btn form-control btn-submit">Back</a>

                </form>
            </div>
        </div>

    </div>

    <!--Bootstrap Js Link-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
</body>
</html>
