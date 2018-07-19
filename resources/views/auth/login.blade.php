<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XileRO OS Conversion Tool</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        .registration-container {
            width: 70%;
            float: right;
            height: 100vh;
            display: flex;
        }
        .registration-container form {
            align-self: center;
        }

        .image {
            height: 100vh;
            padding-bottom: 166px;
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
    </style>
</head>
<body>

    <div class="container d-flex">

        <div class="image flex-fill">
            <img src="{{ url('/images/succubus_cute.png') }}" alt="" style="width:100%">
        </div>

        <div class="registration-container flex-fill">

            <form method="POST" action="{{ route('login') }}" id="form" autocomplete="off">

                @csrf

                <h2 class="mb-2">XileRO OS Login</h2>

                <div class="form-group">
                    <label for="userid" class="col-form-label text-md-right">Username</label>
                    <input id="userid" type="text" class="form-control{{ $errors->has('userid') ? ' is-invalid' : '' }}" name="userid" value="{{ old('userid') }}" autofocus>
                    @if ($errors->has('userid'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('userid') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label text-md-right">Password</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" autofocus>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="actions mt-4 d-flex">
                    <button type="submit" class="btn btn-dark mr-1">Login to Convert OS Items!</button>
                </div>

            </form>

        </div>

    </div>

<!-- Scripts (We use node package manager cause we are l33t -->
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>